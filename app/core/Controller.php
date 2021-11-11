<?php

namespace app\core;

use app\Config;

class Controller {

	public function render(
		string $viewName, 
		array $data = [], 
		bool $renderTemplate = true, 
		string $layoutName = 'main') 

	{

		$data['baseUrl'] = Config::BASE_URL;
		extract($data);

		$template = self::renderTemplate($layoutName, $data);
		$view = self::renderView($viewName, $data);

		if(!$renderTemplate) {
			echo $view;
			exit();
		}

		echo str_replace('{{content}}', $view, $template);

	}

	private static function renderTemplate(string $layoutName, array $layoutData) {

		extract($layoutData);

		ob_start();
		include_once __DIR__."/../views/template/$layoutName.php";
		return ob_get_clean();

	}

	private static function renderView(string $viewName, array $layoutData) {

		extract($layoutData);

		ob_start();
		include_once __DIR__."/../views/$viewName.php";
		return ob_get_clean();

	}

	public function redirectTo($patch = null) {

		if(!empty($patch)) {

			if(empty(parse_url($patch)['host'])) {
				header('Location: '.Config::BASE_URL.$patch);
			} else {
				header('Location: '.$patch);
			}
			
			exit();

		}

		header('Location: '.Config::BASE_URL);
		exit();

	}

}