<?php

namespace App\Http\Controllers;

use App\Content;
use App\title;
use GuzzleHttp\Client;
use GuzzleHttp\Pool;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\DocBlock\Tags\Deprecated;
use Symfony\Component\DomCrawler\Crawler;

class SpiderController extends Controller
{
    private $totalPageCount;
    private $counter        = 1;
    private $concurrency    = 300;  // 同时并发抓取

    protected $startUrl = 'https://www.autotimes.com.cn/news/1.html';

    public function title()
    {
        set_time_limit(0);
        ini_set('memory_limit', '128M');
        for ($i=1;$i<1764;$i++){
            $this->url[] = 'https://www.newyx.net/news/list'.$i.'htm';
//            $this->url[] = 'https://www.autotimes.com.cn/news/'.$i.'html';
        }
        $this->totalPageCount = 1500;
        $client = new Client();
//        dd($this->url);
        $requests = function ($total) use ($client) {
            foreach ($this->url as $uri) {
                yield function() use ($client, $uri) {
                    return $client->getAsync($uri);
                };
            }
        };
//        dd($requests($this->totalPageCount));

        $pool = new Pool($client, $requests($this->totalPageCount), [
            'concurrency' => $this->concurrency,
            'fulfilled'   => function ($response, $index){
                echo '爬取'.$this->url[$index];
                echo '<br>';
                ob_flush();
                flush();
                try{
//                    dd($response->getBody()->getContents());
                    $http = $response->getBody()->getContents();
                }catch (\Exception $e){
                    echo '没有找到数据';
                }
                if(!empty($http)){
                    $crawler = new Crawler();
                    $crawler->addHtmlContent($http);
                    dd(123);
                    $arr = $crawler->filter('body > div.auto_wz_1 > div > div > div.auto_wz_3 > div.auto_wz_5')->each(function ($node,$i) use ($http) {
                        $data['href'] = $node->filter('div.auto_wz_6 > a')->attr('href');
                        $data['title'] = $node->filter('div.auto_wz_6 > a')->text();
//                            $data['author'] = $node->filter('li > div.r_info > div.furt > span.zuozhe')->text();
                        $data['created_at'] = date('Y-m-d H:i:s');
                        $data['updated_at'] = date('Y-m-d H:i:s');
//                            $data['webid'] = 4;
//                        dd($data);
                        return $data;
                    });
                    $bool = DB::table('title')->insert($arr);
                    echo $bool;
                    echo '<br>';
                    $this->countedAndCheckEnded();
                }
            },
            'rejected' => function ($reason, $index){
//                    log('test',"rejected" );
//                    log('test',"rejected reason: " . $reason );
                $this->countedAndCheckEnded();
            },
        ]);

        $promise = $pool->promise();
        $promise->wait();

    }

    public function content()
    {
        set_time_limit(0);
        ini_set('memory_limit', -1);
//        $this->title = Title::select('href')->get();
        $this->title = Title::select('href')->get();
        $this->totalPageCount = count($this->title);
        $client = new Client();
        $requests = function ($total) use ($client) {
            foreach ($this->title as $uri) {
                yield function() use ($client, $uri) {
                    return $client->getAsync($uri->href);
                };
            }
        };
        $pool = new Pool($client, $requests($this->totalPageCount), [
            'concurrency' => $this->concurrency,
            'fulfilled'   => function ($response, $index){
//                $file = @fopen(public_path('body/txt1018.txt'),'a');
                echo '爬取'.$this->title[$index]->href;
                echo '<br>';
                ob_flush();
                flush();
                try{
                    $http =  iconv('utf-8','UTF-8',$response->getBody()->getContents());
                } catch(\Exception $e) { // I guess its InvalidArgumentException in this case
                    $this->countedAndCheckEnded();
                }
                $crawler = new Crawler();
                $crawler->addHtmlContent($http);
                $data['title'] = $this->gettitle($http);
                $data['author'] = '我的世界';
                try{
                    $data['keywords'] = $crawler->filter('head > meta:nth-child(12)')->attr('content');
                }catch (\Exception $e){
                    $data['keywords'] = '我的世界';
                }
                try{
                    $data['description'] = $crawler->filter('head > meta:nth-child(3)')->attr('content');
                }catch (\Exception $e){
                    $data['description'] = $this->gettitle($http);
                }
                $data['content'] = $this->getbody($http);

                $data['comuln_id'] = 3;
                $data['created_at'] = date('Y-m-d');
                $data['updated_at'] = date('Y-m-d');




//                $txt = $data['title'].'#######'.$this->chuli($data['content']).chr(10);
//                $bool = fwrite($file,$txt);
                try{
                    $bool = DB::table('sp_content')->insert($data);
                }catch (\Exception $e){
                    dd($e);
                    $bool = false;
                    echo '插入错误，跳过';
                }
//                fclose($file);
                if ($bool){
                    echo 'save success';
                    echo '<br>';
                }else{
                    echo 'save fail';
                    echo '<br>';
                }
                $this->countedAndCheckEnded();
            },
            'rejected' => function ($reason, $index){
//                    log('test',"rejected" );
//                    log('test',"rejected reason: " . $reason );
                $this->countedAndCheckEnded();
            },
        ]);

        $promise = $pool->promise();
        $promise->wait();

    }


    public function countedAndCheckEnded()
    {
        if ($this->counter < $this->totalPageCount){
            return;
        }
    }

    //截取文章的标题
    function gettitle($html){

        echo '正在截取标题'.'<br>';
        $str = substr($html,strpos($html,'<h1>'));
        $h1 = substr($str,0,strpos($str,'</h1>')+5);
        $t = substr($h1,23);
        $title = substr($t,0,strpos($t,'</h1>'));
        echo '截取成功！！'.'<br>';
        echo $title.'<br>';
        return $title;
    }

    //截取文章的内容
    function getbody($ta){



        echo '正在截取文章内容'.'<br>';
        $t = substr($ta,strpos($ta,'<div id="content">')+18);
        $t = substr($t,0,strpos($t,'</div>'));
        echo '截取成功！！'.'<br>';
        return $t;
    }

    function chuli($str){
        $str = str_replace('<a','<div',$str);
        return str_replace(array("\r\n", "\r", "\n" ,"\t"), "", $str);
    }

}