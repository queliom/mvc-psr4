<?php

namespace app\core;

use app\core\Conn;

class Model {

	public static function conn() {
		return Conn::getConn();
	} 

}