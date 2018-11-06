<?php
include("conn.php");
/* Member */
if ($_REQUEST['tabname']=='member')
	{
		$delqry = "delete from member where id=".$_REQUEST['id'];
	}
/* Role	 */

if ($_REQUEST['tabname']=='role')
	{
		$delqry = "delete from role where roleid=".$_REQUEST['id'];
	}
/* Session */
if ($_REQUEST['tabname']=='session')
	{
		$delqry = "delete from session where sessionid=".$_REQUEST['id'];
	}
/* Session Role */
if ($_REQUEST['tabname']=='sessionrole')
	{
		$delqry = "delete from sessionrole where sessionid=".$_REQUEST['sesid'] ." and roleid = ".$_REQUEST['rolid']. " and userid= ".$_REQUEST['id'];
	}

/* Video */
if ($_REQUEST['tabname']=='video')
	{
		$delqry = "delete from video where id=".$_REQUEST['id'];
	}

/* HomeSlider */
if ($_REQUEST['tabname']=='homepage_slider')
	{
		$delqry = "delete from homepage_slider where id=".$_REQUEST['id'];
	}

/* Location */
if ($_REQUEST['tabname']=='location')
	{
		$delqry = "delete from homepage_slider where id=".$_REQUEST['id'];
	}
/* News	 */
if ($_REQUEST['tabname']=='latest_update')
	{
		$delqry = "delete from latest_update where id=".$_REQUEST['id'];
	}

	
echo($delqry);

$delresult = mysql_query($delqry);
?>