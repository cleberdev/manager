<?php
session_start();

use MyClass\Route;
use System\Config;
use MyClass\GetInforSession;
use MyClass\Permition;

$smarty = new Smarty;

$smarty                 = new \Smarty;
$smarty->force_compile  = false;
$smarty->debugging      = false;
$smarty->caching        = false;
$smarty->cache_lifetime = 120;

$smarty->assign("title", "Manager System", true);

$perm = new Permition();
$perm->verifyAccess();


/*
 * header of system: config libs paths
 * navegation of system
 */
$smarty->assign("assets", Config::_ASSETSCSS_);

$smarty->assign("link_notify", Config::_ASSETSJS_);
$smarty->assign("link_css", Config::_THCSS_);
$smarty->assign("link_JSv", Config::_THJSv_);
$smarty->assign("link_img", Config::_THIMG_);

$smarty->assign("link_jquery", Config::_THJSv_);
$smarty->assign("link_pliguis", Config::_THJSp_);
$smarty->assign("link_js", Config::_THJS_);

/*
 * -instance path current of URI
 * -provides URI for handling and searching the template respective
 * -The constant saves the current path
 */
$router  = new Route();
$routing = new \MyClass\Route();
$routing->add("/");
$routing->add("/Users");
$routing->add("/Permission");
$routing->add("/Dashboard");
$routing->add("/Login");
$routing->add("/Logout");
$routing->add("/Userlevel");
$routing->add("/AccessList");
$routing->add("/ManageAccess");


define('_ROUTER_NOW_', $routing->submit());

$dataOfUser = getInforSession::getDataSessionInDb(getInforSession::getInfor('infor_user','userID'), 'users');
$smarty->assign("boasVindas", "Olá, Seja Bém-Vindo ".$dataOfUser[0][0]->name);
$smarty->assign("userConected", $dataOfUser[0][0]->name);
$smarty->assign("userEmail", $dataOfUser[0][0]->email);
$smarty->assign("typeUser", 'ADMINISTRADOR'/*$dataOfUser[0][0]->type*/);

$smarty->display(Config::_VIEWS_C.'head.html');
