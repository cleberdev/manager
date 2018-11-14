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
				'name'  					=> 'required|min_len, 3|alpha_space',
				'login' 					=> 'required|alpha_numeric|min_len, 4|alpha_space',
				'email' 					=> 'required|valid_email',
				'phone' 					=> 'required',
				'password' 				=> 'required',
				'password_confirm' => 'required'

			),
			'level' => array(
				'typeLevel'    	=> 'required|min_len, 3|alpha_space',
				'description' 	=> 'required|min_len, 10'
			),
			'accessList' => array(
				'name'    		=> 'required|min_len, 3|alpha_space',
				'description' 	=> 'required|min_len, 10|alpha_space'
			)
		);

		return $rules[ $typeFormUser ];
	}


}
