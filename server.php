#!/usr/bin/env php
<?php

require __DIR__."/vendor/autoload.php";

use Swoole\WebSocket\Server;
use Swoole\WebSocket\Frame;

$server = new Server("0.0.0.0", 8080);

$server->on("Start", function(Server $server)
{
    echo "Swoole WebSocket Server is started at http://127.0.0.1:8080\n";
});

$server->on('Open', function(Server $server, Swoole\Http\Request $request) {
    echo "connection open: {$request->fd}\n";
});

$server->on('Message', function(Server $server, Frame $frame) {
    echo "received message: {$frame->data}\n";
});

$server->on('Close', function(Server $server, int $fd) {
    echo "connection close: {$fd}\n";
});

$server->on('Disconnect', function(Server $server, int $fd) {
    echo "connection disconnect: {$fd}\n";
});

$server->start();


