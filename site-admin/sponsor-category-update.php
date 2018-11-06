<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update sponsor_category set sponsor_name='".$_REQUEST['catname']."' where id=".$_REQUEST['id']);
		echo "update sponsor_category set categoryname='".$_REQUEST['catname']."' where id=".$_REQUEST['id'];
	}
else
	{
		$insertsql = mysql_query("insert into sponsor_category (sponsor_name) values('".$_REQUEST['catname']."')");
		echo "insert into sponsor_category (categoryname) values('".$_REQUEST['catname']."')";
	}
?>