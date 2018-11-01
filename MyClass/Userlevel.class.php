<?php
/**
 * Class that verify if user has permissions the modules
 */

namespace MyClass;


use MyClass\EngineTemplate\ValidatePosts;
use MyClass\Persistence\Write;
use MyClass\Persistence\GetRecord;
use MyClass\Persistence\DeleteRecord;

class Userlevel {

	private $table = "userLevel";

	protected $response;

	public function setResponse($response) {
		$this->response = $response;
	}

	public function getResponse() {
		$dataJson = json_encode($this->response);
		return $dataJson;
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


/**
 * [deleteRecord description]
 * @method deleteRecord
 * @param  [inf]       $paramId   [key of record for using in wehere clausure SQL]
 * @return [array]                [description]
 */
public function deleteRecord($paramId = null){
	if(!is_null($paramId)){
		try {

			$dt = new DeleteRecord($this->table, $paramId);
			$this->setResponse( $dt );
			return $this->getResponse();
		}catch (\Exception $e) {
			print($e->getMessage());
			die;
		}
	}
}




}
