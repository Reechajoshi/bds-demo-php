<?php
ob_start();
session_start();
include 'config/dbconfig.php';
if($_REQUEST)
{
$pwd=$_REQUEST['fieldValue'];
//$pass=$_REQUEST['pwd'];
//$check = $_REQUEST['setcookie'];
$sql_logincheck=mysql_query("select * from member where password='" .$pwd."' and id=".$_SESSION['uid']);
	//echo $sql_logincheck;

	$rs_logincheck=mysql_num_rows($sql_logincheck);
	
	if($rs_logincheck==0)
	{
	echo'["pwd",false]';
	}
	
}	
//mysql_close($link);
?>
