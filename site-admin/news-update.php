<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update latest_update set title='".$_REQUEST['title']."', description= '".$_REQUEST['description']."', url= '".$_REQUEST['url']."' where id=".$_REQUEST['id']);
	}
else
	{
		$insertsql = mysql_query("insert into latest_update set title='".$_REQUEST['title']."', description= '".$_REQUEST['description']."', url= '".$_REQUEST['url']."'");
		echo "insert into latest_update set title='".$_REQUEST['title']."', description= '".$_REQUEST['description']."', url= '".$_REQUEST['url']."'";
		}
?>