<?php

namespace MyClass\Persistence;

use System\DB\Database;

Class Rewrite extends database
{

	public function __construct($getData = [], $table = "", $paramId = "")
	{
		self::Rewrite($getData, $table, $paramId);
	}

	private function Rewrite($getData = [], $table = "", $paramId = "" )
	{
		if (!empty($getData) && !empty($table)) {
			foreach ($getData as $key => $value) {
				$newGetDataKey[]    = $key.'='."'".$value."'";
			}
			$nameInputs = implode(',', $newGetDataKey);
			$SQL            = "update ".$table." SET $nameInputs WHERE id=".$paramId;
			return $this->updateDB($SQL);
			
		} else {
			throw new \Exception("Não foi possíve escrever as informações no banco de dados.", 1);
		}
	}//END METHOD Rewrite

}//END CLASS
