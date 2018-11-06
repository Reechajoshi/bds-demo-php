<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update clients set image_url='".$_REQUEST['page_image1']."',client= '".$_REQUEST['client']."' where id=".$_REQUEST['id']);
		

	}
else
	{
		$insertsql = mysql_query("insert into clients (image_url,client) values('".$_REQUEST['page_image1']."','".$_REQUEST['client']."')");
		
	}
?>
