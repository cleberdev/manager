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

	public function getRecord($getTabel) {
		$SQL = "select * from ".$getTabel;
		return $this->selectDB($SQL);
	}

	public function getRecordEmail($getTabel, $paramId) {
		$SQL = "select * from ".$getTabel." where email= '".$paramId."'";
		return $this->selectDB($SQL);
	}


	public function getRecordLogin($getTabel, $paramId) {
		$SQL = "select * from ".$getTabel." where login= '".$paramId."'";
		return $this->selectDB($SQL);
	}

/**
 * [Get list of data specific of the module Userlevel for listing in dropdown]
 * @method dropdownUserType
 * @return [type]           [array data]
 */
	public function dropdownUserType() {
		$SQL = "select distinct(idUserlevel), typeLevel FROM vw_permissionlist";
		return $this->selectDB($SQL);
	}


}
