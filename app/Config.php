<?php

namespace app;

class Config extends Environment {
		
		const BASE_URL =
		(self::ENVIRONMENT == 'development') ? 'http://localhost/mvc_default_psr4/' : 'http://site.com' ;
		const DB_NAME =
		(self::ENVIRONMENT == 'development') ? 'db_name' : 'prod_db_name' ;
		const DB_HOST =
		(self::ENVIRONMENT == 'development') ? 'localhost' : 'prod_db_host' ;
		const DB_USER =
		(self::ENVIRONMENT == 'development') ? 'root' : 'prod_db_user' ;
		const DB_PASS =
		(self::ENVIRONMENT == 'development') ? '' : 'prod_db_pass' ;
		
}