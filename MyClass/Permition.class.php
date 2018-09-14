<?php
/**
 * class Permition *
 * handles the user login/logout/session
 */

namespace Myclass;

use System\DB\Database;
use MyClass\Users;

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;


class Permition extends Database
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
		// Create some handlers
		$stream  = new StreamHandler(__DIR__.'/logger_teste.log', Logger::DEBUG);
		$firephp = new FirePHPHandler();
		$logger  = new Logger('loggers');

		$dataUser = new Users();
		$emailDB 	=  $dataUser->getDataEmail( $_POST['login-email'] );

		$passRequest = sha1(md5( $_POST['login-password'] ));
		$passDB 		 = $emailDB[0]->password;

		if(isset($_POST['login-email']) and isset($_POST['login-password'])){
			if($_POST['login-email'] == $emailDB[0]->email && $passRequest == $passDB  ){
				$_SESSION['login'] = $emailDB[0]->email;
				$_SESSION['pass']  = $_POST['login-password'];
				$_SESSION['access']= true;

				$this->setLogin( true );



						$logger->pushHandler($stream);
						$logger->pushHandler($firephp);
						$logger->info('Login:: CORRETO::'. $_POST['login-email'].' E '.$_POST['login-password'].' in DB: '.$emailDB[0]->email );


			}else{
				unset($_SESSION['login']);
				unset($_SESSION['pass']);
				unset($_SESSION['access']);

				$logger->pushHandler($stream);
				$logger->pushHandler($firephp);
				$logger->info('Login:: ERROR::'. $_POST['login-email'].' E '.$_POST['login-password']);

				$this->setLogin( false );
			}

		}
	}
}
