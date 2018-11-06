<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update sponsor set sponsor='".$_REQUEST['sponsor']."', category= ".$_REQUEST['category'].", sub_category= '".$_REQUEST['subcatg']."', description= '".$_REQUEST['descr']."', link= '".$_REQUEST['link']."', logo= '".$_REQUEST['url2']."' where id=".$_REQUEST['spid']);
		echo "update sponsor set sponsor='".$_REQUEST['sponsor']."', category= ".$_REQUEST['category'].", sub_category= '".$_REQUEST['subcatg']."', description= '".$_REQUEST['descr']."', link= '".$_REQUEST['link']."', logo= '".$_REQUEST['url2']."' where id=".$_REQUEST['spid'];
	}
else
	{
		$insertsql = mysql_query("insert into sponsor set sponsor='".$_REQUEST['sponsor']."', category= ".$_REQUEST['category'].", sub_category= '".$_REQUEST['subcatg']."', description= '".$_REQUEST['descr']."', link= '".$_REQUEST['link']."', logo= '".$_REQUEST['url2']."' ");
		echo "insert into sponsor set sponsor='".$_REQUEST['sponsor']."', category= ".$_REQUEST['category'].", sub_category= '".$_REQUEST['subcatg']."', description= '".$_REQUEST['descr']."', link= '".$_REQUEST['link']."', logo= '".$_REQUEST['url2']."' ";
	}
?>