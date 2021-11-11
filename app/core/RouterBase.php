<?php

namespace app\core;

use app\core\Request;

class RouterBase {

    public function start(array $routes) {

        $method = Request::getMethod();
        $url = Request::getUrl();

        $controller = 'NotFoundController';
        $action = 'index';
        $items = [];
        $args = [];

        if(isset($routes[$method])) {

            foreach($routes[$method] as $route => $callback) {

                $pattern = preg_replace('(\{[a-z0-9]{1,}\})', '([a-z0-9-]{1,})', $route);

                if(preg_match('#^('.$pattern.')*$#i', $url, $matches) === 1) {

                    array_shift($matches);
                    array_shift($matches);

                    if(preg_match_all('(\{[a-z0-9]{1,}\})', $route, $m)) {
                        $items = preg_replace('(\{|\})', '', $m[0]);
                    }

                    foreach($matches as $key => $match) {
                        $args[$items[$key]] = $match;
                    }

                    if(count($args) == 1) {
                        $args = implode('', $args);
                    }

                    $callbackSplit = explode('@', $callback);
                    $controller = $callbackSplit[0];
                    
                    if(isset($callbackSplit[1])) {
                        $action = $callbackSplit[1];
                    }

                    break;
                }

            }
        }

        $controller = "\app\controllers\\$controller";
        $definedController = new $controller();

        $definedController->$action($args);
        
    }
    
}