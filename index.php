<?php
	session_start();
	$_SESSION['module'] = "";
	$_SESSION['result_avatar'] = array();
	require_once("view/inc/header.php");
	require_once("view/inc/menu.php");
	include 'paths.php';
	include 'utils/utils.inc.php';


	if (PRODUCTION) { //we are in production
	    ini_set('display_errors', '1');
	    ini_set('error_reporting', E_ERROR | E_WARNING | E_NOTICE); //error_reporting(E_ALL) ;
	} else {
	    ini_set('display_errors', '0');
	    ini_set('error_reporting', '0'); //error_reporting(0);
	}

	if (!isset($_GET['module'])) {

		require_once("modules/main/controller/controller_main.class.php");

	} else	if ( (isset($_GET['module'])) && (!isset($_GET['view'])) ){
	//	if ($_GET['module']==="products_frontend"){
	//	require_once("modules/products/controller/controller_".$_GET['module'].".class.php");
//}else{
		require_once("modules/".$_GET['module']."/controller/controller_".$_GET['module'].".class.php");
//	}
	}

	if ( (isset($_GET['module'])) && (isset($_GET['view'])) ) {
		require_once("modules/".$_GET['module']."/view/".$_GET['view'].".php");
	}

	require_once("view/inc/footer.html");
