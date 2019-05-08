<?php 
error_reporting(0);

session_start();

date_default_timezone_set("Asia/Kolkata");

define('HTTP_SERVER', 'http://'.$_SERVER['SERVER_NAME'].'/friendbook.ml/');

define('BASEDIR', getcwd().DIRECTORY_SEPARATOR );

define('UPLOAD_DIR', BASEDIR.'uploads');

define('ADMIN_EMAIL', 'venkat.tumu261@gmail.com' );

require_once('include/connection.php');

?>