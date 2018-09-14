<?php
namespace MyClass;

class Rules {
	private $_rules = array();

	/**
	 * Construct an colection of URL's
	 */
	public function _construct() {	}


  public static function setRulesUserForm() {
    $rulesUsers = array(
			'name'  => 'required|min_len, 3',
			'login' => 'required|alpha_numeric|min_len, 4',
			'email' => 'required|valid_email',
      'phone' => 'required'
      
		);

      return $rulesUsers;
	}

}
