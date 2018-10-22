<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SitemapController extends Controller
{
    //





    function index(){
        $count = DB::select('select count(1) from content');
        $a = self::object_to_array($count[0]);
        $count = $a['count(1)'];
        $id = rand(0,$count);
        $content = Content::where(['id' > $id])->limit(250)->get();
        return view('sitemap')->with(['content'=>$content]);
    }



    function object_to_array($obj){
        $_arr=is_object($obj)?get_object_vars($obj):$obj;
        foreach($_arr as $key=>$val){
            $val=(is_array($val))||is_object($val)?self::object_to_array($val):$val;
            $arr[$key]=$val;
        }
        return $arr;
    }


}
