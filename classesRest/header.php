<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
error_reporting(E_ALL);
set_time_limit(0);

$_SERVER['SCRIPT_FILENAME'] =  "c:/xampp/htdocs/ca_cag/index.php";

define("__MY_DIR__", $_SERVER['DOCUMENT_ROOT'] );
echo __MY_DIR__;
define("__MY_DATA__", "../data/");
echo __MY_DATA__;

require_once(dirname($_SERVER['SCRIPT_FILENAME'])."/setup.php");
require_once(__CA_LIB_DIR__."/core/Db.php");
require_once(__CA_MODELS_DIR__."/ca_locales.php");
require_once(__CA_MODELS_DIR__."/ca_objects.php");
require_once(__CA_MODELS_DIR__."/ca_lists.php");

require_once("c:/xampp/htdocs/cag_tools-staging/shared/log/KLogger.php");
define("__LOG_DIR__", "c:/xampp/htdocs/cag_tools-staging/shared/log/");
echo __LOG_DIR__;

include "MyFunctions_new.php";
