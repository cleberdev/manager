<?php

namespace MyClass\EngineTemplate;

use MyClass\Rules;

use GUMP;

class ValidatePosts
{
	public function __construct()
	{

	}

	/*
	* Method for validation of datas the users
	* Receive parameters data of type array
	* @return True if validation positive
	*/
	public static function valida_users($data = []) {
		$is_valid = GUMP::is_valid($data, Rules::setRulesUserForm() );

		if($is_valid === true) {
			return true;
		} else {
			return $is_valid;
		}

	}

}
