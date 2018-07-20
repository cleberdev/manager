<?php
/*
 * @param autoload for include for files
 */
require_once ("Autoload.php");
/*
 *
 * Start System Configuration
 * CONSTANTS special for the system
 */

use System\Config;

$module = filter_var($_POST['module'], FILTER_SANITIZE_STRING);

/*
 * service ajax
 */
if (file_exists(Config::_MCLASS_."/".$module.".class.php")) {
	$moduleNow = Config::_MCLASS_."\\".$module;
	$Obj_str   = new $moduleNow($_POST);

	$data = json_encode($Obj_str->setResponse);
	print_r($data);

}
