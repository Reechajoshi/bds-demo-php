<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update jobs set client='".$_REQUEST['client']."',description= '".$_REQUEST['description']."', category='".$_REQUEST['category']."' where id=".$_REQUEST['id']);


	}
else
	{
		$insertsql = mysql_query("insert into jobs (description,client,category) values('".$_REQUEST['description']."','".$_REQUEST['client']."','". $_REQUEST['category']."')");
		
	}
?>

