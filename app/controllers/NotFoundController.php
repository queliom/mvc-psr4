<?php

namespace app\controllers;

use app\core\Controller;

class NotFoundController extends Controller {

	public function index() {
		echo "404";
	}

}