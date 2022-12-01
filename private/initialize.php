<?php 
// Use PHP constatnts to assign file paths
// __FILE__ returnsthe current path to this file 
// dirname() returns the path to the parent directory
define('PRIVATE_PATH', dirname(__FILE__));
define('PROJECT_PATH', dirname(PRIVATE_PATH));
define('PUBLIC_PATH', PROJECT_PATH . '/public');
define('SHARED_PATH', PRIVATE_PATH . '/shared');


require_once('functions.php');


?>