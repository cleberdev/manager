<?php
/**
 * class Permition *
 * handles the user login/logout/session
 *
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

	public function setLogin($param)
	{
		$this->login = $param;
	}

	public function getLogin(){
		return $_SESSION['infor_user']['access'];
	}

	public function setResponse($response)
	{
		$this->response = $response;
	}

	public function getResponse()
	{
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
		$dataUser 	=  $dataUser->getDataLogin( $_POST['login-email'] );

		$passRequest = sha1(md5( $_POST['login-password'] ));
		$passDB 		 = $dataUser[0]->password;


		if(isset($_POST['login-email']) and isset($_POST['login-password'])){
			if($_POST['login-email'] == $dataUser[0]->login && $passRequest == $passDB ){

				$_SESSION['infor_user']['email'] 		= $dataUser[0]->email;
				$_SESSION['infor_user']['userID']		= $dataUser[0]->id;
				$_SESSION['infor_user']['userLogin']	= $dataUser[0]->login;
				$_SESSION['infor_user']['access']		= true;

				$this->setLogin( true );

				$logger->pushHandler($stream);
				$logger->pushHandler($firephp);
				$logger->info('Login Aceito. INFOR: '.'e-mail:'.$dataUser[0]->email.' - ' .'IdUser:'.$dataUser[0]->id );


			}else{
				unset($_SESSION['infor_user']);

				$logger->pushHandler($stream);
				$logger->pushHandler($firephp);

				$this->setLogin( false );
			}

		}
	}


	public function endSession(){

		unset($_SESSION['infor_user']);
		$this->setLogin( false );
	}
}
