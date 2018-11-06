<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update session set session_topic='".$_REQUEST['session_topic']."', track= '".$_REQUEST['track']."', session_date= '".$_REQUEST['session_date']."' , start_time= '".$_REQUEST['start_time']."', end_time= '".$_REQUEST['end_time']."', location= '".$_REQUEST['location']."', session_desc= '".$_REQUEST['session_desc']."' where sessionid=".$_REQUEST['id']);
		
		echo "update session set session_topic='".$_REQUEST['session_topic']."', track= '".$_REQUEST['track']."', session_date= '".$_REQUEST['session_date']."' , start_time= '".$_REQUEST['start_time']."', end_time= '".$_REQUEST['end_time']."', location= '".$_REQUEST['location']."', session_desc= '".$_REQUEST['session_desc']."' where sessionid=".$_REQUEST['id'];
	}
else
	{
		$insertsql = mysql_query("insert into session (session_topic,track,session_date,start_time,end_time,location,session_desc) values('".$_REQUEST['session_topic']."', '".$_REQUEST['track']."','".$_REQUEST['session_date']."','".str_replace("/","-",$_REQUEST['start_time'])."','".str_replace("/","-",$_REQUEST['end_time'])."','".$_REQUEST['location']."','".$_REQUEST['session_desc']."')");
	echo "insert into session (session_topic,track,session_date,start_time,end_time,location,session_desc) values('".$_REQUEST['session_topic']."', '".$_REQUEST['track']."','".$_REQUEST['session_date']."','".str_replace("/","-",$_REQUEST['start_time'])."','".str_replace("/","-",$_REQUEST['end_time'])."','".$_REQUEST['location']."','".$_REQUEST['session_desc']."')";
	}
?>