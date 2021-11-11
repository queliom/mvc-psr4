<?php

namespace app\controllers;

use app\core\Controller;
use app\models\SampleClass;

class HomeController extends Controller {

	public function __construct() {

		$this->SampleClass = new SampleClass();

		$this->dataReturn = [
			'userName' => 'Queliom Elias de Assis'
		];

	}

	public function index() {

		$this->dataReturn['insertReturn'] = $this->SampleClass->sampleInsertMethod('varchar', 100);
		$this->dataReturn['selectReturn'] = $this->SampleClass->sampleMethod();

		$this->render('home', $this->dataReturn);

	}

}