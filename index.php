<?php
 
define('BASE_PATH', dirname(realpath(__FILE__)));

function __autoload($class){
   require_once BASE_PATH . "/libs/$class.php";
}

 
require_once BASE_PATH . '/libs/init.php';
require_once BASE_PATH . '/config/config.php';

$init = new Init();


