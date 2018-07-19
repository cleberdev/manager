<?php

namespace MyClass\ORM;

use System\DB\Database;

class GetRecord extends Database
{

	public function __construct() {

	}

	public static function get_list($getTabel) {

		$SQL      = "select * from ".$getTabel;
		return $this->selectDB($SQL);
	}
}
