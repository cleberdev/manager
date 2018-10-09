<?php
/**
 * Class that verify if user has permissions the modules
 */

namespace MyClass;


use MyClass\EngineTemplate\ValidatePosts;

class Userlevel {
	private $_uri = array();
	protected $response;

	public function setResponse($response) {
		$this->response = $response;
	}

	public function getResponse() {
		return $this->response;
	}
	/**
	 * Construct an colection of URL's
	 */
	public function __construct() {}

	public function validationData($data = []){

		if (ValidatePosts::valida_users($data, 'level') !== true) {
			return ValidatePosts::valida_users($data, 'level');
		} else {
			echo "OK. Add on DB"; 
		}
	}




}
