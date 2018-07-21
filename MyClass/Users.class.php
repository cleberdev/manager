<?php

namespace MyClass;

use MyClass\Vendor\ValidatePosts;
use MyClass\Persistence\GetRecord;
use MyClass\Persistence\Write;

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
									return $this->setResponse = "Update data in database";
					break;

					default:
									return $this->getAllRecord();
					break;
				}//and switchs

		} else {
					$this->getAllRecord($this->table);
		}
	}


	private function addRecord($setData){
					unset($setData['action']);
					unset($setData['module']);

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

}
