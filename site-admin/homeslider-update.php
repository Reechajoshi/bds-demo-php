<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update homepage_slider set image_title='".$_REQUEST['caption']."', image_url= '".$_REQUEST['image_video']."' where id=".$_REQUEST['id']);
echo "update homepage_slider set image_title='".$_REQUEST['caption']."', image_url= '".$_REQUEST['image_video']."' where id=".$_REQUEST['id'];
	}
else
	{
		$insertsql = mysql_query("insert into homepage_slider set image_title='".$_REQUEST['caption']."', image_url= '".$_REQUEST['image_video']."'");
		}
?>