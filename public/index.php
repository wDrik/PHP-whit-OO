<?php

require "../vendor/autoload.php";

use Pimple\Container;

$container = new Container();

$container['conn'] = function () {
    return new \Source\Conn("mysql:host=localhost;dbname=course_oo","root","");
};

$container['product'] = function ($c) {
    return new \Source\Product($c['conn']);
};

$list = $container['product']->listing();

var_dump($list);
