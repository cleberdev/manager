<?php
/**
 * class Permition *
 * handles the user login/logout/session
 */

namespace Myclass;

class Permition
{

	private $response;
	private $login = false;

	public function setLogin($param){
		$this->login = $param;
	}

	public function getLogin(){
		return $_SESSION['access'];
	}

	public function setResponse($response) {
		$this->response = $response;
	}

	public function getResponse() {
		return $this->response;
	}


	public function __construct()
	{
		
		
	}


	public function verifyAccess(){
		if(isset($_POST['login-email']) and isset($_POST['login-password'])){
			if($_POST['login-email'] == 'cleber@wdcom.com.br' && $_POST['login-password'] == '123'){
				$_SESSION['login'] = $_POST['login-email'];
				$_SESSION['pass']  = $_POST['login-password'];
				$_SESSION['access']= true;
				
				$this->setLogin( true );
				
			}else{
				unset($_SESSION['login']);
				unset($_SESSION['pass']);
				unset($_SESSION['access']);


				$this->setLogin( false ); 
			}

		}
	}
}
