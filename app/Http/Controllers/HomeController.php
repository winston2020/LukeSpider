<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //




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

        if (strpos($agent,"baiduspider")>-1)
        {
            $log['Bot'] = "Baidu";
        }
        if (strpos($agent,"Sogou")>-1)
        {
            $log['Bot'] = "Sogou";
        }

        if (strpos($agent,"360spider")>-1)
        {
            $log['Bot'] = "360spider";
        }

        if (strpos($agent,"Yisouspider")>-1)
        {
            $log['Bot'] = "Yisouspider";
        }
        $log['host'] = $_SERVER['HTTP_HOST'];
        $spider = new Spider();
        $spider->ip = $log['ip'];
        $spider->spidername = $log['Bot'];
        $spider->path = $log['path'];
        $spider->host = $log['host'];
        $spider->save();
    }






}
