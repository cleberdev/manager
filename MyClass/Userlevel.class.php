<?php
/**
 * Class that verify if user has permissions the modules
 */

namespace MyClass;


use MyClass\EngineTemplate\ValidatePosts;
use MyClass\Persistence\Write;
use MyClass\Persistence\GetRecord;

class Userlevel {

	private $table = "Userlevel";

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
		self::getAllRecord( $this->table );
	}

	public function validationData($data = []){
		if(!empty($data)){
			if (ValidatePosts::valida_users($data, 'level') !== true) {
				return ValidatePosts::valida_users($data, 'level');
			} else {

				return $this->addRecord($data );
			}
		}
	}

/**
 *
 */
	private function addRecord($setData){
		unset($setData['module']);
		new Write($setData, $this->table);
	}


/**
 *
 */
	private function getAllRecord($tableName = ""){
		try {
			$result = (new GetRecord())->getAllList($tableName);
			$this->setResponse( $result ) ;
		}catch (\Exception $e) {
			print($e->getMessage());
			die;
		}
}




}
