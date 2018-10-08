<?php
namespace MyClass;

class Rules {


	/**
	 * Construct an colection of URL's
	 */
	public function _construct() {	}


	public static function setRulesUserForm( $typeFormUser = "") {
		$rules = array(
			'userForm' => array(
				'name'  					=> 'required|min_len, 3',
				'login' 					=> 'required|alpha_numeric|min_len, 4',
				'email' 					=> 'required|valid_email',
				'phone' 					=> 'required',
				'password' 				=> 'required',
				'password_confirm' => 'required'

			),
			'level' => array(
				'typeLevel'  	=> 'required|min_len, 3',
				'description' 	=> 'required|min_len, 10'
			)
		);

		return $rules[ $typeFormUser ];
	}

	
}
