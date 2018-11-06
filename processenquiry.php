<?php
include "conn.php";

$title = strip_tags($_REQUEST['title']);
$uname = strip_tags($_REQUEST['uname']);
$company = strip_tags($_REQUEST['company']);
$jobtitle = strip_tags($_REQUEST['jobtitle']);
$address = strip_tags($_REQUEST['address']);
$city = strip_tags($_REQUEST['city']);
$pincode = strip_tags($_REQUEST['pincode']);
$state = strip_tags($_REQUEST['state']);
$emailid = strip_tags($_REQUEST['emailid']);
$country = strip_tags($_REQUEST['country']);
$phone = strip_tags($_REQUEST['phone']);
$mobile = strip_tags($_REQUEST['mobile']);
$message = strip_tags($_REQUEST['message']);


if($title!="" && $uname!="" && $emailid!="" && $mobile!="")
{
mysql_query("insert into enquiry(title,uname,company,jobtitle,address,city,pincode,state,emailid,country,phone,mobile,message) values('" . $title . "','" . $uname . "','". $company ."','" . $jobtitle. "','" . $address . "','".$city."','".$pincode."','".$state."','".$emailid."','".$country."','".$phone."','".$mobile."','".$message."')");


//$insertid = mysql_insert_id();
//echo $insertid;

//require_once('class.phpmailer.php');
//$mail = new PHPMailer(true);

//$body             = "";


//$address = $vemail;
//$name = $vname;

//$mail->IsSMTP();
//$mail->SMTPAuth = true;
//$mail->Host = "smtp.sendgrid.net";
//$mail->Port = 25;
//$mail->Username = "indiancag";
//$mail->Password = "sendcag2013#";

//$mail->IsSendmail(); 

//$mail->SetFrom('noreply@indiancag.org', 'Samvaad');
//$mail->Subject = "Thank you for becoming an Ambassador";
//$mail->AddAddress($address, $name);
//$mail->MsgHTML($body);
//$mail->IsHTML(true); 


//if($mail->Send()) {
  //echo "Message sent!";
//} else {
  //echo "Mailer Error: " . $mail->ErrorInfo;
//}
echo "Thank you!";
}
else
{
echo "Please fill the required fields";
}

?>
