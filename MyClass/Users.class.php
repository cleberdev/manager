<?php

namespace MyClass;

use MyClass\Vendor\ValidatePosts;
use MyClass\Persistence\GetRecord;
use MyClass\Persistence\Write;
use MyClass\Persistence\Rewrite;
use MyClass\Persistence\DeleteRecord;

Class Users
{

	private $table = "users";
	private $response;

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
					return $this->setResponse = ValidatePosts::valida_users($setData);
					exit;
				} else {
					$this->addRecord($setData);
				}

				break;

				case 'update':
				if (ValidatePosts::valida_users($setData) !== true) {
					return $this->setResponse = ValidatePosts::valida_users($setData);
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
				// return $this->getAllRecord();
				break;
				}//and switchs

			} else {
				$this->getAllRecord($this->table);
			}
		}



		public function deleteRecord($paramId = null){
			if(!is_null($paramId)){
				try {

					$dt = new DeleteRecord($this->table, $paramId);
					$this->setResponse = $dt;
					return $this->setResponse;
				}catch (\Exception $e) {
					print($e->getMessage());
					die;
				}
			}
		}



		private function updateRecord($setData){
			unset($setData['action']);
			unset($setData['module']);
			$identity = filter_var($setData['identity'], FILTER_SANITIZE_NUMBER_INT);
			unset($setData['identity']);

			$setData['password']  = sha1(md5($data['password']));
			$setData['inputDate'] = (new \Datetime())->format('Y-m-d H:i:s');

			new Rewrite($setData, $this->table, $identity);
		}


		private function addRecord($setData){
			unset($setData['action']);
			unset($setData['module']);
			unset($setData['identity']);

			$setData['password']  = sha1(md5($data['password']));
			$setData['inputDate'] = (new \Datetime())->format('Y-m-d H:i:s');
			new Write($setData, $this->table);
		}


		private function getAllRecord($tableName = ''){
			if(!empty($tableName)){
				try {
					$dt = new GetRecord();
					$this->setResponse = $dt->getAllList($tableName);
					return $this->setResponse;
				}catch (\Exception $e) {
					print($e->getMessage());
				}
			}
		}


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

	}
