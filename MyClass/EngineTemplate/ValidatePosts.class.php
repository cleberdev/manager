<?php

namespace MyClass\EngineTemplate;

use MyClass\DataValidator;
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
		$is_valid = GUMP::is_valid($data, array(
			'name'  => 'required|min_len, 3',
			'login' => 'required|alpha_numeric|min_len, 4',
			'email' => 'required|valid_email'

		));

		if($is_valid === true) {
			return true;
		} else {
			return $is_valid;
		}

		// $dt = new DataValidator();
		// $dt->set('name', $data['name'])->is_required()->min_length(3)
		// ->set('email', $data['email'])->is_email()
		// ->set('login', $data['login'])->min_length(3);
		//
		// if ($dt->validate()) {
		// 	return true;
		// } else {
		// 	return $dt->get_errors();
		// }
	}

}
