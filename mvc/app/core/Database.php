<?php 

class Database {

	// [WINDOWS] Make sure extension=php_pdo_{connection type}.dll is enabled. 
	// ref: http://php.net/manual/en/pdo.installation.php
	
	/*
	todo: abstract properly, disconnect, overloaded query etc.
	 */
	public $database;

	public static function connect($DB = []){
		if (!empty($DB)){
			try {
				echo 'trying to connect <br>';
				return new PDO($DB['CONNECTION'] . ':host='. $DB['HOST'].';dbname='. $DB['DBNAME'], $DB['USERNAME'], $DB['PASSWORD']);
			} catch (PDOException $e) {
				print_r($e);
				die();
			}
		}
	}
}