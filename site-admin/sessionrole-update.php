<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update sessionrole set roleid=".$_REQUEST['roleidd'].", sessionid= ".$_REQUEST['sessionid'].", userid = ".$_REQUEST['userid']." where roleid=".$_REQUEST['oldroleid']." and userid=".$_REQUEST['olduserid']." and sessionid=".$_REQUEST['oldsessionid']);
		echo "update sessionrole set roleid='".$_REQUEST['roleidd']."', sessionid= '".$_REQUEST['sessionid']."', userid = '".$_REQUEST['userid']."' where roleid=".$_REQUEST['oldroleid']." and userid=".$_REQUEST['olduserid']." and sessionid=".$_REQUEST['oldsessionid'];
	}
else
	{
		$insertsql = mysql_query("insert into sessionrole set roleid=".$_REQUEST['roleidd'].", sessionid= ".$_REQUEST['sessionid'].", userid = ".$_REQUEST['userid']."");
	}
?>