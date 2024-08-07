<?php

class Connection{
	// Variável que guarda a conexão PDO
	 protected static $db;

	 private function __construct(){
		$hostname="143.106.241.3";
		$username="cl202247";
		$password="ENVI2224*";
		$dbname="cl202247";

		try {
			self::$db = new PDO("mysql:host=$hostname;dbname=$dbname;charset=utf8", $username, $password);
			self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		} catch (PDOException $e) {
			die("Falha na conexão: " . $e->getMessage());
		}
	 }

	 public static function getConexao(){
		if(!self::$db){
			new Connection();
		}

		return self::$db;
	}

}