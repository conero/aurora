<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        /*
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
        */
        return '
            <!doctype html>
            <head>
                <title>Aurora - Joshua Coneoro</title>
                <link rel="shortcut icon" href="/aurora/public/aurora.ico"/>
                <link rel="shortcut icon" href="/aurora/public/aurora.ico"/>
            </head>
            <body>
                <div style="margin-left:5%;margin-right:5%;">
                    <h4>Aurora 个人应用！ </h4>
                    <p>Author: Joshua Coenro</p>
                    <p>Date: 2017年5月5日 星期五</p>
                    <p>Todate: '.date('Y-m-d H:i:s').'</p>
                </div>
            </body>
            </html>
        ';
    }
}