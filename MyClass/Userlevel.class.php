<?php
/**
 * Class that verify if user has permissions the modules
 */

namespace MyClass;


use MyClass\EngineTemplate\ValidatePosts;
//use MyClass\Persistence\Write;

class Userlevel {

	private $table = "userLevel";

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
				return ValidatePosts::valida_users($data, 'level');
			} else {

					return true; //$this->addRecord($data);

				//$this->setResultValidation( " Validação OK " ) ;
			}
		}
	}

	// private function addRecord($setData){
	// 	unset($data['module']);
	// 	new Write($setData, $this->table);
	// }




}
