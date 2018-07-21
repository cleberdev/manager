<?php

namespace MyClass;

use MyClass\Vendor\ValidatesPosts;
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
		self::actionMethods($data);
	}

	private function actionMethods($setData = []) {
		if (isset($setData['action'])) {
			$action = $setData['action'];
			try {
				switch ($action) {
					case 'add':
					if (ValidatesPosts::valida_users($setData) !== true) {
						return $this->setResponse = ValidatesPosts::valida_users($setData);
						exit;
					} else {
						unset($setData['action']);
						unset($setData['module']);

						$setData['password']  = sha1(md5($data['password']));
						$setData['inputDate'] = (new \Datetime())->format('Y-m-d H:i:s');
						new Write($setData, $this->table);

					}
					break;

					case 'update':
					return $this->setResponse = "Update data in database";
					break;

					default:
					return $this->setResponse = GetRecord($this->table);
					break;
				}//and switchs
			} catch (\Exception $e) {
				print($e->getMessage());
			}

		} else {

			$dt = new GetRecord();
			$this->setResponse = $dt->getAllList($this->table);
			return $this->setResponse;

		}
	}

}
