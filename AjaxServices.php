<?php
/*
 * @param autoload for include for files
 */
require_once ("Autoload.php");
require_once ("vendor/autoload.php");
/*
 *
 * Start System Configuration
 * CONSTANTS special for the system
 */

use System\Config;


$module = filter_var($_POST['module'], FILTER_SANITIZE_STRING);
$action = filter_var($_GET['action'], FILTER_SANITIZE_STRING);


if($action == 'validation'){
	$module = filter_var($_GET['module'], FILTER_SANITIZE_STRING);

	$moduleNow = Config::_MCLASS_."\\".$module;
	$Obj_str   = new $moduleNow();
	$data = json_encode($Obj_str->validationData( $_POST ) );
	print_r($data);
	exit;
}



if($action == 'update'){
	$module = filter_var($_GET['module'], FILTER_SANITIZE_STRING);
	$pKey = filter_var($_GET['key'], FILTER_SANITIZE_NUMBER_INT);

	$moduleNow = Config::_MCLASS_."\\".$module;
	$Obj_str   = new $moduleNow();
	$data = json_encode($Obj_str->getDataId($pKey));
	print_r($data);
	exit;
}



if($action == 'delete'){
	$module = filter_var($_GET['module'], FILTER_SANITIZE_STRING);
	$pKey = filter_var($_GET['key'], FILTER_SANITIZE_NUMBER_INT);

	$moduleNow = Config::_MCLASS_."\\".$module;
	$Obj_str   = new $moduleNow();
	$data = json_encode($Obj_str->deleteRecord($pKey));
	print_r($data);
	exit;
}


/*
* service ajax if the run
*/
if (file_exists(Config::_MCLASS_."/".$module.".class.php")) {
	$moduleNow = Config::_MCLASS_."\\".$module;
	$Obj_str   = new $moduleNow($_POST);

	$data = json_encode($Obj_str->getResponse());
	print_r($data);
}else{
  	$redirect = "login";
    header("location:$redirect");
	die;
}
