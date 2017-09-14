<?php

/**
 * @author: caojinliang@fosun.com
 * Date: 17-9-14
 * Time: 下午4:47
 */
$http = new swoole_http_server('127.0.0.1', 9501);
$http->on('request', function ($req, $res) {
    //var_dump($req->get, $req->header, $req->server, $req->cookie, $req->files);
    //var_dump($res);
    //$res->header('Content-Type', 'text/xml');
    //$res->status(400);

    /**
     * end操作后将向客户端浏览器发送HTML内容
     * end只能调用一次，如果需要分多次向客户端发送数据，请使用write方法
     * 客户端开启了KeepAlive，连接将会保持，服务器会等待下一次请求
     * 客户端未开启KeepAlive，服务器将会切断连接
     */
    // $res->end("<h1>Hello Swolle. #" . rand(1000, 9999) . "</h1>");

    /**
     * 此种方法，Transfer-Encoding: chunked
     * 并且end方法不在接受参数
     */
    //$res->write("<h1>Hello Swolle. #" . rand(1000, 9999) . "</h1>");
    //$res->end();

    /**
     * 3. 发送文件
     */
    //$res->header('Content-Type', 'application/*');
    //$res->sendfile(__DIR__ .'/server.php');

});
$http->start();
