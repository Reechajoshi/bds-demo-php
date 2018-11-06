<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update equipment_list set qty='".$_REQUEST['qty']."',title= '".$_REQUEST['title']."', category='".$_REQUEST['category']."' where id=".$_REQUEST['id']);


	}
else
	{
		$insertsql = mysql_query("insert into equipment_list (qty,title,category) values('".$_REQUEST['qty']."','".$_REQUEST['title']."','". $_REQUEST['category']."')");
		
	}
?>

