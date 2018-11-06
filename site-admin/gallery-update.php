<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update gallery set image_url='".$_REQUEST['page_image1']."',image_title= '".$_REQUEST['image_title']."',  category= '".$_REQUEST['parentpage']."' where id=".$_REQUEST['id']);
		

	}
else
	{
		$insertsql = mysql_query("insert into gallery (image_url,image_title,category) values('".$_REQUEST['page_image1']."','".$_REQUEST['image_title']."','".$_REQUEST['parentpage']."')");
		
	}
?>
