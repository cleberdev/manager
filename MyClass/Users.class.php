<?php

namespace MyClass;

use MyClass\DataValidator;
use MyClass\ORM\GetRecord;
use MyClass\ORM\Write;

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
					if ($this->validate_Data_Users($setData) !== true) {
						return $this->setResponse = $this->validate_Data_Users($setData);
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
			$this->setResponse = $dt->get_list($this->table); 
			return $this->setResponse;

		}
	}

	/*
	* Method for validation of datas the users
	* Receive parameters data of type array
	* @return True if validation positive
	*/
	private function validate_Data_Users($data = []) {

		$dt = new DataValidator();
		$dt->set('name', $data['name'])->is_required()->min_length(3)
		->set('email', $data['email'])->is_email()
		->set('login', $data['login'])->min_length(5);

		if ($dt->validate()) {
			return true;
		} else {
			return $dt->get_errors();
		}
	}

	private function redirect($url, $permanent = false) {
		if($permanent) {
			header('HTTP/1.1 301 Moved Permanently');
		}
		header('Location: '.$url);
		exit();
	}

}
