<?php

namespace MyClass;

use MyClass\EngineTemplate\ValidatePosts;
use MyClass\Persistence\GetRecord;
use MyClass\Persistence\Write;
use MyClass\Persistence\Rewrite;
use MyClass\Persistence\DeleteRecord;
use MyClass\GetInforSession;
use MyClass\Userlevel;

Class Users
{

	private $table 	= "users";
	private $tbView = "vw_permissionlist";
	protected $response;
	protected $dropdownList;

	public function setResponse($response) {
		$this->response = $response;
	}

	public function getResponse() {
		$dataJson = json_encode($this->response);
		return $dataJson;
	}


	public function setDropdownList($response) {
		$this->dropdownList = $response;
	}

	public function getDropdownList() {
		$dataJson = json_encode($this->dropdownList);
		return $dataJson;
	}

	/*
	* Show data according to the action
	* @param $data is a array
	*/
	public function __construct($data = []) {
		self::getAllRecord( $this->table );
		self::getDropdownUserType( $this->tbView );

	}




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



	private function updateRecord($setData){
		unset($setData['action']);
		unset($setData['module']);
		unset($setData['password_confirm']);

		$identity = filter_var($setData['updateData'], FILTER_SANITIZE_NUMBER_INT);
		unset($setData['updateData']);

		$setData['password']  = sha1(md5($setData['password'])) ;
		$setData['inputDate'] = (new \Datetime())->format('Y-m-d H:i:s');

		$this->setResponse( new Rewrite($setData, $this->table, $identity) );

	}


	public function validationData($data = []){
		if(!empty($data)){
			if (ValidatePosts::valida_users($data, 'userForm') !== true) {
				return ValidatePosts::valida_users($data, 'userForm');
			} else {
				return $this->addRecord($data );
			}
		}
	}


	private function addRecord($setData){

		if(empty($setData['updateData'])){
			unset($setData['module']);
			unset($setData['updateData']);
			unset($setData['password_confirm']);

			$setData['password']  = sha1(md5($setData['password'])) ;
			$setData['inputDate'] = (new \Datetime())->format('Y-m-d H:i:s');

			new Write($setData, $this->table);

		}else{
			$this->updateRecord($setData);
		}

	}

	/**
	 * [Get list if names and IDs for type user for dropdown list of type de ]
	 * @method getDropdownUserType
	 * @param  [type]              $tableName [name table of database]
	 *
	 */
	private function getDropdownUserType($tableName){
		try {
			$result = (new GetRecord())->dropdownUserType();
			$this->setDropdownList( $result ) ;
		}catch (\Exception $e) {
			print($e->getMessage());
			die;
		}
	}//END THE METHOD getAllList

	private function getAllRecord($tableName){
		try {
			$result = (new GetRecord())->getAllList($tableName);
			$this->setResponse( $result ) ;
		}catch (\Exception $e) {
			print($e->getMessage());
			die;
		}
	}//END THE METHOD getAllList


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

			public function getDataEmail($paramEmail = null){
				if(!is_null($paramEmail)){
					try {
						$dt = new GetRecord();
						return $dt->getRecordEmail($this->table, $paramEmail);

					}catch (\Exception $e) {
						print($e->getMessage());
					}
				}
			}

			public function getDataLogin($param = null){
				if(!is_null($param)){
					try {
						$dt = new GetRecord();
						return $dt->getRecordLogin($this->table, $param);

					}catch (\Exception $e) {
						print($e->getMessage(). "Table:".$this->table . 'and param:'.$param);
					}
				}
			}
}
