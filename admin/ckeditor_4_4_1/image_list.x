<?php
	
	$res = $hlp->_db->db_query( 'select c_iid , c_imime , c_iname from content_images ;' );
	$sz = $hlp->_db->db_num_rows($res);
	$cnt = 0;
	
	if($sz>0)
	{
		echo("[['','']");//important to keep one empty elment ..coz if 1st image is not present then image loader will cause probs and doesnt come up
		while(($row=$hlp->_db->db_get($res)))
		{
			/* echo(',["'.$row['iname'].'", "'.$S_URI.$IMG_CGI.'?i='.base64_encode($row['iid']).'&snqx='.base64_encode($UNAME).'&fnqx='.base64_encode(basename($row['isrc'])).'"]'); */
			
			/* echo( ',["'.$row['c_iname'].'", "'.$HOST_URL.$IMG_CGI.'?c_iid='.base64_encode( $row['c_iid'] ).'"]' ); */
			echo( ',["'.$row['c_iname'].'", "'.$IMG_CGI.'?c_iid='.base64_encode( $row['c_iid'] ).'"]' );
			$cnt++;
		}
		echo("]");
	}
	else
		echo("''");
?>