<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update accredition set pdf='".$_REQUEST['pdf']."',title= '".$_REQUEST['title']."' where id=".$_REQUEST['id']);
echo "update accredition set pdf='".$_REQUEST['pdf']."',title= '".$_REQUEST['title']." where id=".$_REQUEST['id'];
		

	}
else
	{
		$insertsql = mysql_query("insert into accredition (pdf,title) values('".$_REQUEST['pdf']."','".$_REQUEST['title']."')");
		
	}
?>

