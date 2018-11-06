<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update proj_category set category='".$_REQUEST['title']."' where id=".$_REQUEST['id']);
		
	}
else
	{
		$insertsql = mysql_query("insert into proj_category (category) values('".$_REQUEST['title']."')");
		
	}
?>
