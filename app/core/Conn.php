<?php

namespace app\core;

use app\Config;

class Conn extends Config {

	private static $conn;

	public static function getConn() {

		if(!isset(self::$conn)) {

			try {

				self::$conn = new \PDO(
					"mysql:dbname=".self::DB_NAME.";
					host=".self::DB_HOST, self::DB_USER, self::DB_PASS, 
					[\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
				);

			} catch(\PDOException $e) {

				echo "ERROR TO CONNECT DATABASE ".$e->getMessage();
				exit();

			}
			
		}

		return self::$conn;

	}

}