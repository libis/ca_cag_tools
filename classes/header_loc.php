<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(E_ALL);
set_time_limit(0);
define("__MY_DIR__", $_SERVER['DOCUMENT_ROOT']);
define("__MY_DATA__", "/cag_tools/data/");
//$_SERVER['HTTP_HOST'] = "import";

require_once(__MY_DIR__."/ca_cag/setup.php");
require_once(__CA_LIB_DIR__."/core/Db.php");
require_once(__CA_MODELS_DIR__."/ca_locales.php");
require_once(__CA_MODELS_DIR__."/ca_lists.php");
require_once(__MY_DIR__."/cag_tools/classes/UserException.php");

require_once(__MY_DIR__."/cag_tools-staging/shared/log/KLogger.php");
define("__LOG_DIR__", __MY_DIR__."/cag_tools-staging/shared/log/");

include __MY_DIR__."/cag_tools/classes/MyFunctions_new.php";