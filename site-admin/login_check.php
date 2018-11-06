<?php
ob_start();
session_start();
include_once "conn.php";

if(isset($_POST['usrname']))
{
   // user id -- textfield2222
   // password -- textfield22222
   
    $loginid=$_POST['usrname'];
	$password=$_POST['pwd'];
	//echo $loginid;
	//echo $password;
	$sql_logincheck="select * from admin_info where user_id='$loginid' AND admin_password='$password'";
	//echo $sql_logincheck;
	$rs_logincheck=mysql_query($sql_logincheck);
	$data_logincheck=mysql_fetch_array($rs_logincheck);
	if($data_logincheck)
	{
	  //echo "hello";
   		$_SESSION['admin_id']=$data_logincheck['user_id'];
		//echo $_SESSION['admin_id'];

         		 header("location:homeslider.php");
		       
		//echo "Login Correct";
		
	}
	else
	{
   		header("location:index.php?msg=error");
   		
		//echo "eeror";
	}

}
mysql_close($link);
?>
