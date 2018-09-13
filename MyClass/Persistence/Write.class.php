<?php

namespace MyClass\Persistence;

use System\DB\Database;


Class Write extends database
{

	
	public function __construct($getData = [], $table = "") 
	{
		self::writeInDB($getData, $table);
	}

	private function writeInDB($getData = [], $table = "")
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
			$SQL            = "insert into ".$table." (".$nameInputs.")values(".$nameInputsForm.")";

			return $this->insertDB($SQL);
			
		} else {
			throw new \Exception("Não foi possíve escrever as informações no banco de dados.", 1);
		}
	}//END METHOD writeInDB

}//END CLASS
