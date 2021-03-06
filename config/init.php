<?php
// Start Session
session_start(); 

/* 
** Config File: where hold on all database parameters 
*/
require_once 'config.php';

// Include Helpers
require_once 'helpers/system_helper.php';

/*
** Autoloader: to not include manualy every class
** automatic require when instantiate the class
** instead of
** require_once(lib/Template.php);
**
** the class name as to match the file name
*/ 
function __autoload($class_name) {
    require_once 'lib/'.$class_name.'.php';
}

?>