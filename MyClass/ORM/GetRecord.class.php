<?php

namespace MyClass\ORM;
use System\DB\Database;

class GetRecord {

	private static $db;

	public function __construct() {

	}

	public static function get_list($getTabel) {
		self::$db = new Database();
		$SQL      = "select * from ".$getTabel;
		return self::$db->selectDB($SQL);
	}
}
