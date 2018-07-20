<?php
/*
 * Autor: Cleber Santos
 *  @param autoload for include for files
 * Add new line
 */
require_once ("AutoLoad.php");
/*
 *
 * Start System Configuration
 * CONSTANTS special for the system
 */

use System\Config;
/*
 * initialize objects of system of template smarty
 * Also add atribs for routers of inicialize pages internals
 */
require_once ("Smarty_ini.php");

// $moduleNow = Config::_MCLASS_."\\"._ROUTER_NOW_;
// $Obj_str   = new $moduleNow($_POST);

// print("<pre>");
// var_dump($Obj_str);

// die;
/*
 *Library of system that handling templates for he
 */
if (file_exists(Config::_VIEWS_._ROUTER_NOW_.'.html') && file_exists(Config::_MCLASS_."/"._ROUTER_NOW_.".class.php")) {
	$moduleNow = Config::_MCLASS_."\\"._ROUTER_NOW_;
	$Obj_str   = new $moduleNow($_POST);

	$smarty->assign('response', $Obj_str->setResponse);
	$smarty->display(Config::_VIEWS_._ROUTER_NOW_.'.html');

} else {

	$smarty->display(Config::_VIEWS_.'Dashboard.html');
}

$smarty->display(Config::_VIEWS_C.'footer.html');
