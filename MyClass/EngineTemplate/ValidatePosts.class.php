<?php

namespace MyClass\EngineTemplate;

use MyClass\Rules;
use GUMP;

class ValidatePosts
{
	public function __construct()
	{

	}

	
/**
 * Method for validation of datas the users
 * Receive parameters data of type array
 * [valida_users description]
 * @param  array  $data  [data send user of system, for validation]
 * @param  string $level [level of access the user on system. Verify file Rules.class]
 * @return [type]        [true or false]
 */
public static function valida_users($data = [], $level = "") {
	if(!empty($level)){
		$is_valid = GUMP::is_valid($data, Rules::setRulesUserForm( $level) );

		if($is_valid === true) {
			return true;
		} else {
			return $is_valid;
		}
	}else{
		return false;
	}
	

}

}
