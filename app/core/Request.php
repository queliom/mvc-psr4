<?php

namespace app\core;

class Request {

    public static function getUrl() {

        $url = filter_input(INPUT_GET, 'request');
        return '/'.$url;

    }

    public static function getMethod() {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

}