<?php
ob_start();
session_start();
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT",__DIR__ . DS ."template/front");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK",__DIR__ . DS ."template/back");
defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY",__DIR__ . DS ."uploads");
defined("DB_HOST") ? null : define("DB_HOST","localhost");
defined("DB_USER") ? null : define("DB_USER","root");
defined("DB_PASS") ? null : define("DB_PASS","");
defined("DB_NAME") ? null : define("DB_NAME","ecom_db");
$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
require_once("function.php");
require_once("cart.php");
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}


?>