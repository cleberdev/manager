<?php

namespace MyClass;

use MyClass\EngineTemplate\ValidatePosts;
use MyClass\Persistence\GetRecord;
use MyClass\Persistence\Write;
use MyClass\Persistence\Rewrite;
use MyClass\Persistence\DeleteRecord;

Class Users
{

	private $table = "users";
	protected $response;

	public function setResponse($response) {
		$this->response = $response;
	}

	public function getResponse() {
		return $this->response;
	}
	/*
	* Show data according to the action
	* @param $data is a array
	*/
	public function __construct($data = []) {
		self::actionUser($data);
	}


	private function actionUser($setData = []) {
		if (isset($setData['action'])) {
			$action = $setData['action'];

			switch ($action) {
				case 'add':
					if (ValidatePosts::valida_users($setData) !== true) {
						return $this->setResponse( ValidatePosts::valida_users($setData));
						exit;
					} else {
						$this->addRecord($setData);
					}
				break;

				case 'update':
					if (ValidatePosts::valida_users($setData) !== true) {
						return $this->setResponse( ValidatePosts::valida_users($setData) );
						exit;
					} else {

						return $this->updateRecord($setData);
					}
				exit;
				break;

				case 'delete':
					return $this->deleteRecord($pIdentity);
					exit;
				break;

				default:
				$this->getAllRecord($this->table);
				break;
			}

		} else {
			$this->getAllRecord($this->table);
		}


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
		$identity = filter_var($setData['identity'], FILTER_SANITIZE_NUMBER_INT);
		unset($setData['identity']);

		$setData['password']  = sha1(md5($setData['password'])) ;
		$setData['inputDate'] = (new \Datetime())->format('Y-m-d H:i:s');

		$this->setResponse( new Rewrite($setData, $this->table, $identity) );

	}


	private function addRecord($setData){
		unset($setData['action']);
		unset($setData['module']);
		unset($setData['identity']);
		unset($setData['password_confirm']);

		$setData['password']  = sha1(md5($setData['password'])) ;
		$setData['inputDate'] = (new \Datetime())->format('Y-m-d H:i:s');
		new Write($setData, $this->table);
	}


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

		}
