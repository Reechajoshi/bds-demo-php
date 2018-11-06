<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update downloads set title='".$_REQUEST['title']."', link= '".$_REQUEST['link']."', category='".$_REQUEST['category']."' where id=".$_REQUEST['id']);


	}
else
	{
		$insertsql = mysql_query("insert into downloads (title,link,category) values('".$_REQUEST['title']."','".$_REQUEST['link']."','". $_REQUEST['category']."')");
		
	}
?>

