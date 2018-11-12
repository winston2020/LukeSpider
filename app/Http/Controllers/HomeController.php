<?php

namespace App\Http\Controllers;

use App\Comuln;
use App\Content;
use App\Spider;
use App\Yuming;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
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

        $this->outlink = DB::table('outlink')->get()->toArray();


    }


    function writespider() {
        $log = [];
        $log['ip'] = $_SERVER['REMOTE_ADDR'];
        if (!empty($_SERVER['http_client_ip'])) {
            $log['ip'] = $_SERVER['http_client_ip'];
        } elseif (!empty($_SERVER['http_x_forwarded_for'])) {
            $log['ip'] = $_SERVER['http_x_forwarded_for'];
        }
        $log['path'] =$_SERVER['REQUEST_URI'];
        $agent1 = $_SERVER["HTTP_USER_AGENT"];
        $agent=strtolower($agent1);
        $log['Bot'] ="";
        if (strpos($agent,"bot")>-1)
        {
            $log['Bot'] = "其他蜘蛛";
        }

        elseif (strpos($agent,"baiduspider")>-1)
        {
            $log['Bot'] = "Baidu";
        }
        elseif (strpos($agent,"Sogou")>-1)
        {
            $log['Bot'] = "Sogou";
        }

        elseif (strpos($agent,"360spider")>-1)
        {
            $log['Bot'] = "360spider";
        }

        elseif (strpos($agent,"Yisouspider")>-1)
        {
            $log['Bot'] = "Yisouspider";
        }
        else{
            $log['Bot'] = "Weizhispider";
        }
        $log['host'] = $_SERVER['HTTP_HOST'];
        $spider = new Spider();
        $spider->ip = $log['ip'];
        $spider->spidername = $log['Bot'];
        $spider->path = $log['path'];
        $spider->host = $log['host'];
        $spider->save();
    }


    function index(){
        $this->writespider();
        $count = DB::select('select count(1) from content');
        $a = self::object_to_array($count[0]);
        $count = $a['count(1)'];
        $id = rand(0,$count);
        $host = Yuming::where(['host'=>$this->domain])->first();
        $content = DB::table('content')->where('id', '>', $id)->limit(250)->get()->toArray();
        $otherhost = DB::table('yuming')->where('id','<>',$host->id)->limit(20)->get();
        $comuln = Comuln::all();
        return view($host->temp.'.index')->with(['content'=>$content,'host'=>$host,'outlink'=>$this->outlink,'comuln'=>$comuln,'otherlink'=>$otherhost]);
    }


    function lists($comulnid){
        $this->writespider();
        $content = Content::where(['comuln_id'=>$comulnid])->limit(100)->orderby('id','desc')->get()->toArray();
        $comulnname = Comuln::where(['id'=>$comulnid])->first();
        $comuln = Comuln::all();
        $host = Yuming::where(['host'=>$this->domain])->first();
        return view($host->temp.'.list')->with(['content' => $content,'comuln_name'=>$comulnname,'host'=>$host,'comuln'=>$comuln]);
    }

    function show($id){
        
        $this->writespider();
        $content = Content::where(['id' => $id])->first();
        $host = Yuming::where(['host'=>$this->domain])->first();
        $count = DB::select('select count(1) from content');
        $a = self::object_to_array($count[0]);
        $count = $a['count(1)'];
        $id = rand(0,$count);
        $other = DB::table('content')->where('id', '>', $id)->limit(2500)->get()->toArray();
        $comuln = Comuln::all();
        $now = Comuln::where(['id' => $content->comuln_id])->first();

        return view($host->temp.'.show')->with(['content'=>$content,'outlink'=>$this->outlink,'other'=>$other,'host'=>$host,'comuln'=>$comuln,'now'=>$now]);

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
