<?php

namespace App\Http\Controllers;

use App\Content;
use App\Yuming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitemapController extends Controller
{
    //

    function __construct()
    {
        $this->host = $_SERVER['HTTP_HOST'];
        if (strpos($this->host,'www.') !== false){
            $this->domain = str_after($this->host,'.');
        }else{
            $this->domain = $this->host;
        }
        $file = @fopen(public_path('outlink/url.txt'),'r');
        $i = 0;
        $this->outlink = array();
        while (!feof($file)){
            $line = fgets($file);
            if($line){
                $this->outlink[$i] = $line;
                $i++;
            }
        }

    }



    function index(){

        $host = Yuming::where(['host'=>$this->domain])->first();
        $content = Content::orderby('id','desc')->get()->toArray();
        return view('sitemap')->with(['content'=>$content,'host'=>$host]);
    }


    function indextwo(){
        $host = Yuming::where(['host'=>$this->domain])->fitst();
        $content = Content::take(500)->orderBy('updated_at', 'desc')->get();
        return response()->view('sitemap.index', [
            'host' => $host,
            'content'=>$content,
        ])->header('Content-Type', 'text/xml');
    }





}
