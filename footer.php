<?php include "conn.php"; 
$footer = mysql_query("select * from homepage_content");
$footer_page = mysql_fetch_array($footer);
?>
<div class="span-24 footer">
                	<div class="span-6 notopmargin" style="padding-top:30px;">
                    	<a href="index.php"><?php echo '<img src="'.str_replace('http://bdsindia.com/','',$footer_page['logo_image']).'" title="Logo" alt="" />'; ?></a>
                    </div>
                    <div class="span-6 notopmargin">
                    	<div class="icon-white-big icon47-white left"></div>
                    	<h6><a class="about-us.php"><?php echo $footer_page['box2_title']; ?></a></h6>
                        <p class="small"><?php echo $footer_page['box2_content']; ?></p>
                    </div>
                    <div class="span-6 tweets small notopmargin">
                    	<div class="icon-white-big icon101-white left"></div>
                    	<h6>Recent tweets</h6>
                        <p class="small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    	<p class="small em">// <a href="#" class="link">28 minutes ago</a>. By <a href="#" class="link">dolor</a></p>
                    </div>
                    <div class="span-6 notopmargin last">
                    	<div class="icon-white-big icon193-white left"></div>
                        <h6><?php echo $footer_page['box4_title']; ?></h6>
                        <p class="small"><?php echo $footer_page['box4_content']; ?></p>
						<div class="span-6 notopmargin last"><span class="strong em left">Follow us on:</span></div>
                    	<div class="tweet-icon">
                            <a href="index.php" class='social' title='Twitter'><img src="images/twitter.png" alt="" width="26px" height="26px" /></a>
                        </div>
                        <div class="facebook-icon">
                            <a href="index.php" class='social' title='Facebook'><img src="images/1px.png" alt="" width="26px" height="26px" /></a>
                        </div>
                        <div class="google-icon">
                            <a href="index.php" class='social' title='Google +'><img src="images/1px.png" alt="" width="26px" height="26px" /></a>
                        </div>
                        <div class="vimeo-icon">
                            <a href="index.php" class='social' title='Vimeo'><img src="images/1px.png" alt="" width="26px" height="26px" /></a>
                        </div>
                        <div class="dribbble-icon">
                            <a href="index.php" class='social' title='Dribbble'><img src="images/1px.png" alt="" width="26px" height="26px" /></a>
                        </div>
                    </div>
                </div>

