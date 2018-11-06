<?php 
include "conn.php";

require( 'admin/conf/admin-vars.php' );
require( 'admin/helper/class.helper.php' ) ;

$hlp = new chlp();

$p_id = $_GET[ 'p_id' ];

$project_details = $hlp->get_project_details( $p_id );

$project_name_arr = array( 1 => "Completed Jobs List", 2 => "Ongoing Jobs Repairs & Coatings", 3 => "Ongoing Jobs Construction", 4 => "Project Gallery" );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>BDS INDIA</title>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/colorpicker.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/nivo-default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/slides.min.jquery.js"></script>
<script type="text/javascript" src="js/nivo-slider/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/superfish-menu/hoverIntent.js"></script>
<script type="text/javascript" src="js/superfish-menu/superfish.js"></script>
<script type="text/javascript" src="js/scrolltop/scrolltopcontrol.js"></script>
<script type="text/javascript" src="js/prettyPhoto/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.featureList-1.0.0.js"></script>
<script type="text/javascript" src="js/swfobject/swfobject.js"></script>
<script type="text/javascript" src="js/easing/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.iconmenu.js"></script>
<script type="text/javascript" src="js/kwicks/jquery.kwicks-1.5.1.pack.js"></script>
<script type="text/javascript" src="js/mosaic/mosaic.1.0.1.js"></script>
<script type="text/javascript" src="js/jquery.tipsy.js"></script>
<script type="text/javascript" src="js/jquery.quicksand.js"></script>
<script type="text/javascript" src="js/jquery.tablesorter.js"></script>
<link rel="stylesheet" href="css/nivo-default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" />
<script type="text/javascript">var runFancy = true;</script>
<!--[if IE]>
<script type="text/javascript">
    runFancy = false;
</script>
<![endif]-->
<script type="text/javascript" src="js/gs.js"></script><!--GOOGLE FONTS-->
<link href='http://fonts.googleapis.com/css?family=Shanti' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic|Open+Sans:300,400,400italic,600' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Mako' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis+Light' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Crushed' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Puritan' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Anonymous+Pro' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=OFL+Sorts+Mill+Goudy+TT' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Nobile' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Molengo' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Allerta' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Metrophobic' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=News+Cycle' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Special+Elite' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Kreon' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Orbitron' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Radley' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Bentham' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css' />
<!--/GOOGLE FONTS-->
</head>
<body>
<!-- MAIN WRAPPER -->
<div class="main-wrapper"> 
  <!-- MAIN CONTAINER -->
  <div class="container"> 
    <!-- HEADER -->
    
    <?php include"header.php"; ?>
    <div class="span-24 separator"></div>
    <!-- END HEADER --> 
    <!-- WELCOME AREA -->
    <div class="span-24 slider-area-inner">
      <h1 class="colored left">Projects</h1>
      <p class="descr">: BDS Projects India Private Limited (BDS) is India's leading Engineering and Contracting Solutions Provider</p>
    </div>
    <div class="span-24 separator-inner"></div>
    <!-- END WELCOME AREA --> 
    <!-- SUBPAGE CONTENT -->
	
	<?php 
		
		// IF PROJECT GALLERY IS CLICKED
		if( $p_id == 4 )
		{
		// START OF PROJECT GALLERY
	?>
	<!-- START OF PROJECT GALLERY -->
		<div class="span-16">
            <h3>Project Gallery</h3>
        </div>    
            
        <div class="span-24">
			<div class="left filter-title">
                <ul id="proj_gallery">
					<?php
						
						$project_gallery_arr = $hlp->get_project_gallery( 'images/project-gallery/*' );
						$gallery_name = ( ( isset( $_GET[ 'gallery_name' ] ) ) ? ( $_GET[ 'gallery_name' ] ) : ( $project_gallery_arr[ 0 ] ) );
						foreach( $project_gallery_arr as $project_gallery )
						{
							echo( '<li '.( ( $gallery_name == $project_gallery ) ? ( 'class="current"' ) : ( '' ) ).'><a href="project_details.php?p_id=4&gallery_name='.$project_gallery.'" >'.$project_gallery.'</a></li>' );
						}
					?>
                </ul>
            </div>
        </div>
		
		<!-- frame 1 -->
        <div id="frame1" style="display:block">
            <ul class="span-24">
			<?php 
				$gallery_img_dir = "images/project-gallery/".$gallery_name."/*";
				$hlp->get_files_from_dir( $gallery_img_dir, $file_full_list, false );
				
				foreach( $file_full_list as $proj_gallery_img )
				{
					echo( '<li class="development">' );
					echo( '<div class="span-6">' );
					echo( '<div class="item"><a href="'.str_replace('http://bdsindia.com/','',$proj_gallery_img).'" class="item-preview spec-border-ie" rel="prettyPhoto" title=""><img class="img-preview spec-border"  src="auto-thumb.php?src='.str_replace('http://bdsindia.com/','',$proj_gallery_img).'&h=150&w=205&zc=1" alt=" "/></a></div>' );
					echo( '</div>' );
					echo( '</li>' );
				}
			?>
            </ul>
        </div> <!--Frame 1 End-->
	<!-- END OF PROJECT GALLERY -->
	<?php
		// END OF PROJECT GALLERY
		}
		else // IF PROJECT DETAILS IS CLICKED
		{
		// START OF PROJECT DETAILS
	?>
	
	<!-- START OF PROJECT DETAILS -->
	
	<div class="span-16">
		<h3><?php echo( $project_details[ 'p_title' ][ 0 ] ); ?></h3>
      
		<div class="span-16">
			<div class="section">
				<ul class="tabs">
					<li class="current">Construction</li>
				</ul>
				<div class="box visible">
					<?php echo( $project_details[ 'p_html' ][ 0 ] ); ?>
				</div>
			</div>
		</div>
    </div>
	
    <div class="span-8 notopmargin last">
		<div class="span-8 last side-bar">
			<h5>Search something?</h5>
			<form action="" method="post" id="search-form">
				<input type="text" name="search" value="Search..." onfocus="if(this.value=='Search...') this.value=''" onblur="if(this.value=='') this.value='Search...'" />
			</form>
		</div>
		<div class="span-8 last side-bar">
			<ul class="navigation-sidebar">
				<?php
					foreach( $project_name_arr as $proj_key => $proj_val )
					{
						echo( '<li '.( ( $p_id == $proj_key ) ? ( 'class="current"' ) : ( '' ) ).'><a href="project_details.php?p_id='.$proj_key.'">'.$proj_val.'</a></li>' );
					}
				?>
			</ul>
		</div>
    </div>
	
	<!-- END OF PROJECT DETAILS -->
	<?php
		// END OF PROJECT DETAILS
		}
	?>
   
    <!-- END SUBPAGE CONTENT --> 
    
	
    <!-- FOOTER -->
    <div class="span-24 separator-double"></div>
    <!-- FOOTER -->
    
    <?php include"footer.php"; ?>
  </div>
  <div class="clear"></div>
</div>
<!-- END FOOTER --> 
<!-- END MAIN WRAPPER -->
<?php include"copyright.php"; ?>
</body>
</html>
