<?php
ob_start();
session_start();

if($_SESSION['admin_id']=="")
{
	//header("location:index.php");
}
?>
<?php

error_reporting(0);
$link = mysql_connect("localhost","bds_jobs","eJ6LqqM82bnCQPjV");
mysql_select_db("bds_jobs");
define("DB_HOSTNAME", "localhost");
define("DB_USERNAME", "bds_jobs");
define("DB_PASSWORD", "eJ6LqqM82bnCQPjV");
define("DB_DATABASE", "bds_jobs");




?>
