<?php

namespace MyClass\Vendor;

use MyClass\DataValidator;

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

		$dt = new DataValidator();
		$dt->set('name', $data['name'])->is_required()->min_length(3)
		->set('email', $data['email'])->is_email()
		->set('login', $data['login'])->min_length(3);

		if ($dt->validate()) {
			return true;
		} else {
			return $dt->get_errors();
		}
	}
	
}
