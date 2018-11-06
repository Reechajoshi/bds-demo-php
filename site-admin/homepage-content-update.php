<?php
include('conn.php');

		$updatesql = mysql_query("update homepage_content set holder1_title='".$_REQUEST['holder1_title']."', holder1_image= '".$_REQUEST['url1']."', holder1_url= '".$_REQUEST['holder1_url']."',holder1_content= '".$_REQUEST['holder1_content']."', holder2_title='".$_REQUEST['holder2_title']."', holder2_image= '".$_REQUEST['url2']."', holder2_url= '".$_REQUEST['holder2_url']."',holder2_content= '".$_REQUEST['holder2_content']."', holder3_title='".$_REQUEST['holder3_title']."', holder3_image= '".$_REQUEST['url3']."', holder3_url= '".$_REQUEST['holder3_url']."',holder3_content= '".$_REQUEST['holder3_content']."', holder4_title='".$_REQUEST['holder4_title']."', holder4_image= '".$_REQUEST['url4']."', holder4_url= '".$_REQUEST['holder4_url']."',holder4_content= '".$_REQUEST['holder4_content']."',logo_image= '".$_REQUEST['url5']."', box2_title = '".$_REQUEST['box2_title']."', box2_content= '".$_REQUEST['box2_content']."',box4_title = '".$_REQUEST['box4_title']."', box4_content= '".$_REQUEST['box4_content']."', notice1='".$_REQUEST['notice1']."', holder1_bigimg= '".$_REQUEST['big1']."', holder2_bigimg= '".$_REQUEST['big2']."', holder3_bigimg= '".$_REQUEST['big3']."', holder4_bigimg= '".$_REQUEST['big4']."' where id=1");


?>
