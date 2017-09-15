<?php

$serv = new swoole_server('127.0.0.1', 9501, SWOOLE_BASE, SWOOLE_SOCK_TCP);
$serv->set([
    'worker_num' => 4,
    //'daemonize'  => true,
    'backlog'    => 128
]);

$serv->on('Connect', 'onConnect');
$serv->on('Receive', 'onReceive');
$serv->on('Close', 'onClose');

$serv->start();

function onConnect($serv, $fd)
{
    echo "连接上了\n";
}

function onReceive($serv, $fd, $from_id, $data)
{
    echo "收到了\n";
}

function onClose($serv, $fd)
{
    echo "关闭了\n";
}
