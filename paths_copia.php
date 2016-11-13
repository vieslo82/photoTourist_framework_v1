<?php
    //SITE_ROOT
	//$path=$_SERVER['DOCUMENT_ROOT'].'/25C framework_v3/';
	$path=$_SERVER['DOCUMENT_ROOT'].'/php/photoTourist_framework_v1/';
    define('SITE_ROOT', $path);

    //SITE_PATH
    //define('SITE_PATH','https://'.$_SERVER['HTTP_HOST'].'/25C framework_v3/');
		define('SITE_PATH','https://'.$_SERVER['HTTP_HOST'].'/php/photoTourist_framework_v1/');

	//CSS
	define('CSS_PATH', SITE_PATH . 'view/css/');

    //log
    define('LOG_DIR',SITE_ROOT.'classes/Log.class.singleton.php');
    define('USER_LOG_DIR',SITE_ROOT.'log/user/Site_User_errors.log');
    define('GENERAL_LOG_DIR',SITE_ROOT.'log/general/Site_General_errors.log');

    //production
    define('PRODUCTION',true);

    //model
    define('MODEL_PATH',SITE_ROOT.'model/');
    //view
    define('VIEW_PATH_INC',SITE_ROOT.'view/inc/');
    define('VIEW_PATH_INC_ERROR',SITE_ROOT.'view/inc/templates_error/');
    //modules
    define('MODULES_PATH',SITE_ROOT.'modules/');

    //resources
    define('RESOURCES',SITE_ROOT.'resources/');
    //media
    define('MEDIA_PATH',SITE_ROOT.'media/');
    //utils
    define('UTILS',SITE_ROOT.'utils/');

    //model users
    define('FUNCTIONS_USERS',SITE_ROOT.'modules/users/utils/');
    define('MODEL_PATH_USERS',SITE_ROOT.'modules/users/model/');
    define('DAO_USERS',SITE_ROOT.'modules/users/model/DAO/');
    define('BLL_USERS',SITE_ROOT.'modules/users/model/BLL/');
    define('MODEL_USERS',SITE_ROOT.'modules/users/model/model/');
    define('USERS_JS_PATH', SITE_PATH . 'modules/users/view/js/');
	define('USERS_CSS_PATH', SITE_PATH . 'modules/users/view/css/');

    //model products
    define('UTILS_PRODUCTS',SITE_ROOT.'modules/products/utils/');
    define('PRODUCTS_JS_LIB_PATH', SITE_PATH . 'modules/products/view/lib/');
	define('PRODUCTS_JS_PATH', SITE_PATH . 'modules/products/view/js/');
    define('PRODUCTS_CSS_PATH', SITE_PATH . 'modules/products/view/css/');
