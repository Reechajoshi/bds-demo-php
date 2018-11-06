<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update role set rolename='".$_REQUEST['rolename']."', roledesc= '".$_REQUEST['roledesc']."' where roleid=".$_REQUEST['roleid']);
		echo "update role set rolename='".$_REQUEST['rolename']."', roledesc= '".$_REQUEST['roledesc']."' where roleid=".$_REQUEST['roleid'];
	}
else
	{
		$insertsql = mysql_query("insert into role (rolename,roledesc) values('".$_REQUEST['rolename']."', '".$_REQUEST['roledesc']."')");
		echo "insert into role (rolename,roledesc) values('".$_REQUEST['rolename']."', '".$_REQUEST['roledesc']."')";
	}
?>