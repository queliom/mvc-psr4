<?php

namespace app\core;

use app\core\RouterBase;

class Router extends RouterBase {
    
    public $routes;

    public function get(string $endpoint, string $trigger) {
        $this->routes['get'][$endpoint] = $trigger;
    }

    public function post(string $endpoint, string $trigger) {
        $this->routes['post'][$endpoint] = $trigger;
    }

    public function put(string $endpoint, string $trigger) {
        $this->routes['put'][$endpoint] = $trigger;
    }

    public function delete(string $endpoint, string $trigger) {
        $this->routes['delete'][$endpoint] = $trigger;
    }

}