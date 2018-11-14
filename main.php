<?php
/*
 * Autor: Cleber Santos
 * @param autoload for include for files
 * Add new line
 */
require_once ("Autoload.php");
require_once ("vendor/autoload.php");


use System\Config;

use MyClass\GetInforSession;
use MyClass\Logout;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;


/***************
 *
 *Library of system that handling templates for he
 *
 **/
require_once ("Smarty_ini.php");



/***
 * destroy a session exists and return for
 * the screen of the login
**/
if(_ROUTER_NOW_ === 'Logout'){
	$logout = new Logout();
	$logout->endSession();
}


// Create some handlers
$stream  = new StreamHandler(__DIR__.'/logger_app.log', Logger::DEBUG);
$firephp = new FirePHPHandler();
$logger  = new Logger('loggers');

if (file_exists(Config::_VIEWS_._ROUTER_NOW_.'.html') && file_exists(Config::_MCLASS_."/"._ROUTER_NOW_.".class.php")) {
	$moduleNow = Config::_MCLASS_."\\"._ROUTER_NOW_;
	$Obj_str   = new $moduleNow($_POST);


	$smarty->assign('MOD', _ROUTER_NOW_);



	//loading method of module-specific components
	if(method_exists($Obj_str, getResponse ) ){
			$smarty->assign('response', $Obj_str->getResponse());
	}

	if(method_exists($Obj_str, getColectionDataSelect ) ){
			$smarty->assign('colectionDataSelect', $Obj_str->getColectionDataSelect());
	}
	if(method_exists($Obj_str, getColectionDataCHK ) ){
			$smarty->assign('colectionDataCHK', $Obj_str->getColectionDataCHK());
	}

	if( $perm->getLogin() ){
		$smarty->display(Config::_VIEWS_C.'body.html');
		$smarty->display(Config::_VIEWS_._ROUTER_NOW_.'.html');

		// print("<pre>");
		// print_r($Obj_str->getResponse());
		// print("</pre>");

	}else{
		$logger->pushHandler($stream);
		$logger->pushHandler($firephp);
		$logger->error('Login Rejeitado !');
		$smarty->display(Config::_VIEWS_.'Login.html');
	}


} else {

	if( $perm->getLogin() ){

		$smarty->display(Config::_VIEWS_C.'body.html');
		$smarty->display(Config::_VIEWS_.'Dashboard.html');

		//show infor the user that is at on session
		// print("<pre>");
		// var_dump(  getInforSession::getDataSessionInDb(getInforSession::getInfor('infor_user','userID'), 'users') );
		// print("</pre>");

	}else{
		$logger->pushHandler($stream);
		$logger->pushHandler($firephp);
		$logger->info('Acesso negado! Dados fornecidos: '.$_POST['login-email']);
		$smarty->display(Config::_VIEWS_.'Login.html');
	}
}

$smarty->display(Config::_VIEWS_C.'footer.html');
