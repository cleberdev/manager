<?php

namespace MyClass\Persistence;

use System\DB\Database;

Class Rewrite extends database
{

	public function __construct($getData = [], $table = "", $paramId = "") 
	{
		self::Rewrite($getData, $table);
	}

	private function Rewrite($getData = [], $table = "", $paramId = "" )
	{
		if (!empty($getData) && !empty($table)) {
			foreach ($getData as $key => $value) {
				$newGetDataKey[]    = $key;
				$newGetDataValues[] = $value;
			}
			$nameInputs = implode(',', $newGetDataKey);

			foreach ($newGetDataValues as $key) {
				$valoresTratatos[] = str_replace($key, "'".$key."'", $key);
			}

			$nameInputsForm = implode(',', $valoresTratatos);
			$SQL            = "update ".$table." SET $nameInputsForm WHERE id=".$paramId;

			return $this->insertDB($SQL);

		} else {
			throw new \Exception("Não foi possíve escrever as informações no banco de dados.", 1);
		}
	}//END METHOD Rewrite

}//END CLASS
