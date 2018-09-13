<?php

namespace MyClass\Persistence;

use System\DB\Database;


class DeleteRecord extends Database {

	public function __construct($getTabel, $identity) {
		return self::deleteRecord($getTabel, $identity);
	}

	private function deleteRecord($getTabel, $identity) {

		$SQL = "delete from ".$getTabel." where id=".$identity;
		print( $this->deleteDB($SQL) );
	}

	
}
