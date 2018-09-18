<?php
namespace MyClass;

use MyClass\Permition;

class Logout {
	private $_uri = array();

	/**
	 * Construct an colection of URL's
	 */
	public function __construct() {	}


	/**
	 * [endSession description]
	 * making the destruction the sessions of the user existente.
	 * calling the method the class Permition of name endSession.
	 */
	public function endSession(){
		
		$perm = new Permition();
		$perm->endSession();

	}

}
