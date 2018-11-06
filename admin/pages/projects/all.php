<?php
	
	$project_details = $hlp->get_project_details();
	
	
	echo( '<div class="gencon icheight txt buttonmenuwithbg">' );
	
	echo( '</div>' );
	
	echo('<div class="txtheadwithbg">Current Projects</div>');
	
	if( count( $project_details ) > 0 )
	{
		for( $i = 0; $i < count( $project_details[ 'p_id' ] ); $i++ )
		{
			echo('<div class="gencon bviewdash " style="white-space:nowrap;width:100%;padding-top:10px;" >');
			echo('<table border=0 width=100% style="background-color:#f8f8f8;" >');
			
			echo( '<tr style="width:100%;">
					<td align=left valign=top id=txt style="width:70% ;min-width:200px;" >' );
						
			echo( '<div class=" gensideblock" id=txt style = "width:70%;min-width:200px;padding-right:10px;white-space:normal;color:#10647e;" >' );
			echo( $project_details[ 'p_title' ][ $i ] );
			echo('</div>');
			echo('</td>');
			
			echo('<td style="width:5%;">');	
			echo( $hlp->getLinkAncHtml( 'aeditm',60,'asb ','#','tt="Edit: '.$project_details[ 'p_title' ][ $i ].'";addDynTabEx("TAB_PROJECTS","Edit Project","'.$project_details[ 'p_title' ][ $i ].'",tt,"'.$me.'?b=project_new&p_id='.$project_details[ 'p_id' ][ $i ].'",true);',17,'images/ic/new_ic/edit.png', "Edit", "Edit" ) ) ; 
			echo('</td>');	
			
			echo('</tr>');
			echo('</table>');
			echo('</div>') ;
		}
	}
	
?>