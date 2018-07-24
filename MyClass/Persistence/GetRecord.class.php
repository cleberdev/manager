<?php

namespace MyClass\Persistence;

use System\DB\Database;

class GetRecord extends Database {

	public function __construct() {}

	public function getAllList($getTabel) {
		$SQL = "select * from ".$getTabel;
		return $this->selectDB($SQL);

	}

	public function getRecordId($getTabel, $paramId) {
		$SQL = "select * from ".$getTabel." where id=".$paramId;
		return $this->selectDB($SQL);
	}
}
