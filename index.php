<?php
/*
 * Autor: Cleber Santos
 *  @param autoload for include for files
 * Add new line
 */
require_once ("Autoload.php");
/*
 *
 * Start System Configuration
 * CONSTANTS special for the system
 */

use System\Config;
/*
*
* Library of system that handling templates for he
*/


require_once ("Smarty_ini.php");
// $post = array(
// 	'module' => 'Users',
// 	'action' => 'add',
// 	'type' => '1',
// 	'name' => 'te',
// 	'email' => 'teste@teste.com.br',
// 	'phone' => '(83)98899-4466',
// 	'login' => 'testeste',
// 	'password' => 'cl159ss'
// );

// print("<pre>");
// print_r($post);
// print("</pre>");

// $moduleNow = Config::_MCLASS_."\\"._ROUTER_NOW_;
// $Obj_str   = new $moduleNow($post);

// print("<pre>");
// var_dump($Obj_str->setResponse);
// print("</pre>");


// die;

if (file_exists(Config::_VIEWS_._ROUTER_NOW_.'.html') && file_exists(Config::_MCLASS_."/"._ROUTER_NOW_.".class.php")) {
	$moduleNow = Config::_MCLASS_."\\"._ROUTER_NOW_;
	$Obj_str   = new $moduleNow($_POST);

	$smarty->assign('MOD', _ROUTER_NOW_);
	$smarty->assign('response', $Obj_str->setResponse);
	$smarty->display(Config::_VIEWS_._ROUTER_NOW_.'.html');

} else {

	$smarty->display(Config::_VIEWS_.'Dashboard.html');
}

$smarty->display(Config::_VIEWS_C.'footer.html');
