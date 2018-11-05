<?php
/**
 * Class that verify if user has permissions the modules
 */

namespace MyClass;


use MyClass\EngineTemplate\ValidatePosts;
use MyClass\Persistence\Write;
use MyClass\Persistence\Rewrite;
use MyClass\Persistence\GetRecord;
use MyClass\Persistence\DeleteRecord;

class ManageAccess {

	private $table = "manageAccess";

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
	
	if(empty($setData['updateData'])){
		unset($setData['module']);
		unset($setData['updateData']);
		new Write($setData, $this->table);	
	}else{
		$this->updateRecord($setData);
	}
	
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

/**
 * [Get data for insert in form for update]
 * @param  [INT] $paramId [key for using on structure  SQL ]
 * @return [data]         [record existing in database]
 */
public function getDataId($paramId = null){
	if(!is_null($paramId)){
		try {
			$dt = new GetRecord();
			$this->setResponse = $dt->getRecordId($this->table, $paramId);
			return $this->setResponse;
		}catch (\Exception $e) {
			print($e->getMessage());
		}
	}
}

/**
 * [updateRecord modify record in database using key information]
 * @param  [array] $setData [array content data for modify]
 * @return [type]          [description]
 */
private function updateRecord($setData){
	unset($setData['action']);
	unset($setData['module']);
	$identity = filter_var($setData['updateData'], FILTER_SANITIZE_NUMBER_INT);
	unset($setData['updateData']);

	$this->setResponse( new Rewrite($setData, $this->table, $identity) );

}

}
