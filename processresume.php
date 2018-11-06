<?php
include "conn.php";

$title = strip_tags($_REQUEST['title']);
$uname = strip_tags($_REQUEST['uname']);
$job = strip_tags($_REQUEST['job']);
$qualification = strip_tags($_REQUEST['qualification']);
$city = strip_tags($_REQUEST['city']);
$experience = strip_tags($_REQUEST['experience']);
$relocate = strip_tags($_REQUEST['relocate']);
$emailid = strip_tags($_REQUEST['emailid']);
$phone = strip_tags($_REQUEST['phone']);
$mobile = strip_tags($_REQUEST['mobile']);



$uploaddir = 'images/social/';
$datestamp=strtotime(date('Y-m-d H:i:s'));
	$uploadfile = $uploaddir . $datestamp."-".basename($_FILES['datafile']['name']);
 
	
	if (move_uploaded_file($_FILES['datafile']['tmp_name'], $uploadfile))
 {
$message = $uploadfile;
}

if($title!="" && $uname!="" && $emailid!="" && $mobile!="" && $job!="" & $city!="")
{
mysql_query("insert into resume(title,uname,job,qualification,experience,city,relocate,emailid,phone,mobile,resume) values('" . $title . "','" . $uname . "','". $job ."','" . $qualification. "','" . $experience . "','".$city."','".$relocate."','".$emailid."','".$phone."','".$mobile."','".$message."')");



echo "Thank you!";
}

else
{
echo "Please fill the required fields";
}

?>
