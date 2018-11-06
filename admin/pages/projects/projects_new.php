<?php
	
	$p_id = $_GET[ 'p_id' ];
	
	if( isset( $_GET[ 'ac' ] ) && $_GET[ 'ac' ] == 'save' )
	{
		$p_html = $_POST[ 'bds_editor' ];
		if( $hlp->save_project_details( $p_id, $p_html ) )
			$hlp->echo_ok( "Information saved" );
		else
			$hlp->echo_err( "Error saving Project information" );
	}
	
	$p_details = $hlp->get_project_details( $p_id );
	
	echo( '<form method="post" action="'.$me.'?b=project_new&p_id='.$p_id.'&ac=save" enctype="multipart/form-data">
	
		<div > <!-- wrapper div starts -->
		<div class="gencon icheight txt buttonmenuwithbg" >
			<button type=submit  style="width:100px;height:40px;background:transparent;border:none;cursor:pointer;border-right:1px solid grey;border-right-style:dashed;" title="Save" >
			<img src="images/ic/new_ic/save_blue.png"><br />Save</button>
		</div>
		
		<div style="padding-left:10px;">
			<div style="padding-top:10px;padding-bottom:10px;width:800px;" class=bviewcell >
				<div style="padding-top:3px;">
					<textarea name=bds_editor id=bds_editor style="width:1000px;height:600px;" rows=10 cols=20">'.$p_details[ 'p_html' ][ 0 ].'</textarea>
				</div>
			
			</div> <!-- main style div ends -->
		</div>
		
	</div> <!- Wrapper div ends -->
	
	</form><!-- end of form -->' );
	
?>