<?php
include('conn.php');
if ($_REQUEST['update']==1)
	{
		$updatesql = mysql_query("update payment_status set paymentstatus=". $_REQUEST['paystatus'] ." where id=".$_REQUEST['id'].);
	}

?>