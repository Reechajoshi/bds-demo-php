<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update location set locationname='".$_REQUEST['locationname']."', description= '".$_REQUEST['description']."' where id=".$_REQUEST['id']);
		echo "update location set locationname='".$_REQUEST['locationname']."', description= '".$_REQUEST['description']."' where id=".$_REQUEST['id'];
	}
else
	{
		$insertsql = mysql_query("insert into location (locationname,description) values('".$_REQUEST['locationname']."', '".$_REQUEST['description']."')");
		echo "insert into location (locationname,description) values('".$_REQUEST['locationname']."', '".$_REQUEST['description']."')";
	}
?>