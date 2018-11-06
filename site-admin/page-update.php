<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update pages set page_title='".$_REQUEST['pagetitle']."', page_heading= '".$_REQUEST['pagehead']."', page_desc= '".mysql_real_escape_string($_REQUEST['descri'])."', page_intro= '".mysql_real_escape_string($_REQUEST['pageintro'])."',  page_image1='".$_REQUEST['page_image1']."' where pageid=".$_REQUEST['id']);
echo "update pages set page_title='".$_REQUEST['pagetitle']."', page_heading= '".$_REQUEST['pagehead']."', page_desc= '".mysql_real_escape_string($_REQUEST['descri'])."', page_intro= '".mysql_real_escape_string($_REQUEST['pageintro'])."',  page_image1='".$_REQUEST['page_image1']."' where pageid=".$_REQUEST['id'];

	}
else
	{
		$insertsql = mysql_query("insert into pages (page_title,page_heading,page_desc,page_image1, page_intro) values('".$_REQUEST['pagetitle']."', '".$_REQUEST['pagehead']."','".$_REQUEST['descri']."','".$_REQUEST['page_image1']."',page_intro= '".$_REQUEST['pageintro']."')");
		
	}
	
	
?>
