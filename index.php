<?php
/*
 * Autor: Cleber Santos
 * @param autoload for include for files
 * Add new line
 */
require_once ("Autoload.php");
/*
 *
 * Start System Configuration
 * CONSTANTS special for the system
 */

use System\Config;
use MyClass\Permition;


/*
*
* Library of system that handling templates for he
*/


require_once ("Smarty_ini.php");


$perm = new Permition();
$perm->verifyAccess();


// print("<pre>");
// print_r($_SESSION);
// print("</pre>");


if (file_exists(Config::_VIEWS_._ROUTER_NOW_.'.html') && file_exists(Config::_MCLASS_."/"._ROUTER_NOW_.".class.php")) {
	$moduleNow = Config::_MCLASS_."\\"._ROUTER_NOW_;
	$Obj_str   = new $moduleNow($_POST);


	$smarty->assign('MOD', _ROUTER_NOW_);
	$smarty->assign('response', $Obj_str->getResponse());
	

	if( $perm->getLogin() ){
		$smarty->display(Config::_VIEWS_C.'body.html');
		$smarty->display(Config::_VIEWS_._ROUTER_NOW_.'.html');
	}else{
		$smarty->display(Config::_VIEWS_.'Login.html');	
	}


} else {
	//$smarty->display(Config::_VIEWS_C.'body.html');
	//$smarty->display(Config::_VIEWS_._ROUTER_NOW_.'.html');
	
	if( $perm->getLogin() ){
		$smarty->display(Config::_VIEWS_C.'body.html');
		$smarty->display(Config::_VIEWS_.'Dashboard.html');	
	}else{
		$smarty->display(Config::_VIEWS_.'Login.html');	
	}
}


// if( $perm->getLogin() ){


// 	if (file_exists(Config::_VIEWS_._ROUTER_NOW_.'.html') && file_exists(Config::_MCLASS_."/"._ROUTER_NOW_.".class.php")) {
// 		$moduleNow = Config::_MCLASS_."\\"._ROUTER_NOW_;
// 		$Obj_str   = new $moduleNow($_POST);

// 		if(get_class( $Obj_str ) === 'MyClass\\Login'){

// 		}
// 		$smarty->assign('MOD', _ROUTER_NOW_);
// 		$smarty->assign('response', $Obj_str->getResponse());
// 		$smarty->display(Config::_VIEWS_C.'body.html');


// 	} else {

// 		$smarty->display(Config::_VIEWS_C.'body.html');
// 	}


// }else{

// 	if (file_exists(Config::_VIEWS_._ROUTER_NOW_.'.html') && file_exists(Config::_MCLASS_."/"._ROUTER_NOW_.".class.php")) {
// 		$moduleNow = Config::_MCLASS_."\\"._ROUTER_NOW_;
// 		$Obj_str   = new $moduleNow($_POST);


// 		$smarty->assign('MOD', _ROUTER_NOW_);
// 		$smarty->assign('response', $Obj_str->getResponse());
// 		//$smarty->display(Config::_VIEWS_C.'body.html');
// 		$smarty->display(Config::_VIEWS_._ROUTER_NOW_.'.html');

// 	} else {

// 	//	$smarty->display(Config::_VIEWS_C.'body.html');
// 		$smarty->display(Config::_VIEWS_.'Login.html');
// 	}


// } 






$smarty->display(Config::_VIEWS_C.'footer.html');
