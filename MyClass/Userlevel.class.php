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
	public function __construct() {
		self::validationData($_POST);
	}

	public function validationData($data = []){

		if(!empty($data)){
			if (ValidatePosts::valida_users($data, 'level') !== true) {
				unset($_SESSION['resultValidation']);
				$myClass = explode('\\', get_class($this));
				$_SESSION['resultValidation'][ $myClass[1] ] = ValidatePosts::valida_users($data, 'level');
			} else {
				if(isset($_SESSION['resultValidation'])){ 
					unset($_SESSION['resultValidation']);
				}

				//$this->setResultValidation( " Validação OK " ) ;
			}
		}

	}




}
