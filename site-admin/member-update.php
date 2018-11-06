<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update member set fullname='".$_REQUEST['fullname']."', email= '".$_REQUEST['email']."', company= '".$_REQUEST['company']."' , designation= '".$_REQUEST['designation']."', address= '".$_REQUEST['address']."', phone= '".$_REQUEST['phone']."', zip= '".$_REQUEST['zip']."', city= '".$_REQUEST['city']."', state= '".$_REQUEST['state']."', country= '".$_REQUEST['country']."', profile= '".$_REQUEST['profile']."',companylogo='". $_REQUEST['url1'] ."',profilepic='". $_REQUEST['url2'] ."' where id=".$_REQUEST['id']);
		$roledeletesql = mysql_query("delete from sessionrole where userid=".$_REQUEST['id'] ." and sessionid=0");
		$rolevar = $_REQUEST['memrole'];
		$cnt = count($rolevar);
		for ($i=0; $i<$cnt ; $i++)
			{
				$roleinsertsql = mysql_query("insert into sessionrole set userid=".$_REQUEST['id'] . " , roleid=".$rolevar[$i] . " , sessionid=0");
				
			}
		
		
	}
else
	{
		$insertsql = mysql_query("insert into member (fullname,email,company,designation,address,phone,zip,city,state,country,profile,companylogo,profilepic) values('".$_REQUEST['fullname']."', '".$_REQUEST['email']."','".$_REQUEST['company']."','".$_REQUEST['designation']."','".$_REQUEST['address']."','".$_REQUEST['phone']."','".$_REQUEST['zip']."', '".$_REQUEST['city']."','".$_REQUEST['state']."','".$_REQUEST['country']."','".$_REQUEST['profile']."','". $_REQUEST['url1'] ."','". $_REQUEST['url2'] ."')");

		echo "insert into member (fullname,email,company,designation,address,phone,zip,city,state,country,profile,companylogo,profilepic) values('".$_REQUEST['fullname']."', '".$_REQUEST['email']."','".$_REQUEST['company']."','".$_REQUEST['designation']."','".$_REQUEST['address']."','".$_REQUEST['phone']."','".$_REQUEST['zip']."', '".$_REQUEST['city']."','".$_REQUEST['state']."','".$_REQUEST['country']."','".$_REQUEST['profile']."','". $_REQUEST['url1'] ."','". $_REQUEST['url2'] ."')";
	}
	
	$recid= mysql_insert_id();
	$rolevar = $_REQUEST['memrole'];
		$cnt = count($rolevar);
		for ($i=0; $i<$cnt ; $i++)
			{
				$roleinsertsql = mysql_query("insert into sessionrole set userid=".$recid . " , roleid=".$rolevar[$i] . " , sessionid=0");
			}
?>