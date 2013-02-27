<?php

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app = new Yolo\Application();

$app->get('/', function (Request $request) {
    return new Response("Hallo welt, got swag yo!\n");
});

$app->run();
