<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update video set title='".$_REQUEST['title']."', url= '".$_REQUEST['url']."', image_url= '".$_REQUEST['image_url']."', description= '".$_REQUEST['description']."' where id=".$_REQUEST['id']);
	}
else
	{
		$insertsql = mysql_query("insert into video set title='".$_REQUEST['title']."', url= '".$_REQUEST['url']."', image_url= '".$_REQUEST['image_url']."', description= '".$_REQUEST['description']."'");
		}
?>