<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    //
    function index(){
        set_time_limit(0);

        $file = @fopen(public_path('url/url.txt'),'a');
        for ($k = 3311;$k>0;$k--){
            echo date('Ymd', strtotime("-" . $k . " day")).'<br>';
            echo '剩余'.$k.'天<br>';
            for ($i = 1;$i < 30;$i++) {
                try{
                    $html = file_get_contents('http://news.ifeng.com/listpage/11502/' . date('Ymd', strtotime("-" . $k . " day")) . '/' . $i . '/rtlist.shtml');
                    $dom = new \DOMDocument();
                    @$dom->loadHTML($html);
                    //            print ($html.$i);
                    $xpath = new \DOMXPath($dom);
                    $hrefs = $xpath->evaluate('/html/body//a');
                    $count = $hrefs->length;
                    for ($j = 0; $j < $count; $j++) {
                        $href = $hrefs->item($j);
                        $url = $href->getAttribute('href');

                        if (strpos($url,'http://news.ifeng.com/guoxue/')!==false || strpos($url,'http://news.ifeng.com/culture/')!==false
                            || strpos($url,'http://news.ifeng.com/history/')!==false || strpos($url,'http://news.ifeng.com/society/')!==false
                            || strpos($url,'http://news.ifeng.com/mil/')!==false || strpos($url,'http://news.ifeng.com/taiwan/')!==false
                            || strpos($url,'http://news.ifeng.com/world/')!==false || strpos($url,'http://news.ifeng.com/mainland/')!==false){
                            echo $url . '<br>';
                            fwrite($file,$url.chr(10));
                        }
//
//
//        //            print ($url);
                    }
                }catch (\Exception $exception){
                    echo '未知错误'.'<br>';
                }
                ob_flush();
                flush();
            }
        }
        fclose($file);
    }
}
