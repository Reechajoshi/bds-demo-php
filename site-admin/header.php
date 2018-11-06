

<header>
    <div class="container_12">
        <div class="grid_12">
        <!-- navigation menu -->
            <nav class="main-nav">
                <ul>
                    <li>
                        <a href="#" title="Elements"><span class="glyph archive"></span> Pages</a>
						<ul class="submenu">
							<li>
								<a href="pages.php" title="Pages">Manage Pages</a>
							</li>
						</ul>
                    </li>
                               
					<li>
						<a href="file-manager.php" title="Form">
							<span class="glyph movie"></span>
							File Manager
						</a>
					</li>
                    <li>
						<a href="#" title="Tables">
							<span class="glyph list"></span>
							Manage Homepage
						</a>
                        <ul class="submenu">
							<li>
								<a href="homeslider.php" title="Members">HomePage Slider</a>
							</li>
                            <li>
								<a href="homepage-content-details.php" title="Form">HomePage Content</a>
							</li>
                        </ul>
                    </li>
                    <li>
						<a href="equipment.php" title="List"><span class="glyph list"></span>Equipment List</a></li>

 <li><a href="download.php" title="List"><span class="glyph list"></span>Downloads</a></li>

  <li><a href="client.php" title="List"><span class="glyph list"></span>Clients</a></li>
 <li><a href="jobs.php" title="List"><span class="glyph list"></span>Jobs List</a></li>
                                <li><a href="gallery.php" title="Tables"><span class="glyph list"></span>Manage Gallery</a>
                                    <ul class="submenu">
                                    	<?php
                                    	$galpage = mysql_query("SELECT * FROM gallery group by category");
                                    	while ($galsq = mysql_fetch_array($galpage))
                                    		{
	                                    		echo '<li><a href="gallery.php?id='.$galsq['category'].'" title="">'.$galsq['category'].' </a></li>';
                                    		}
                                    	?>
										 
                                    </ul>
                                </li>
                                
                                <li><a href="logout.php" title="Logout"><span class="glyph logout"></span> Logout</a></li>
                            </ul>
                        </nav>
                        <!-- /navigation menu -->

                        <!-- bar -->
                        <ul class="bar">
                            <li class="search">
                                <div>
                                    
                                </div>
                            </li>
                            <li>
                               
                            </li>
                            <li>
                                
                            </li>
                            <li>
                                
                            </li>
                            <li>
                                <a href="#" title="edit profile" class="tooltip">
                                    <span class="glyph user"></span>
                                    <span class="text">admin</span>
                                </a>
                            </li>
                        </ul>
                    </div>                
                </div>
            </header>
            
            
            <!--             Delete -->

<!--                             Modal -->
                            <a href="#deletemodal" id="deletebox" class="modal"></a>
							<div class="box grid_8" id="deletemodal" hidden>
                        <header>
                            <div class="inner">
                                <div class="left title">
                                    <h1>Delete?</h1>
                                </div>
                                <div class="right">
                                    <a href="#" class="close">close</a>
                                </div>
                            </div>
                        </header>
                    
                        <div class="box-content">
                            <p>Are You Sure Want to Delete this?</p>
                            <footer class="pane">
                                <a href="#" class="close bt red">No</a>
                                <a href="#" onclick="deleteme()" class="bt blue">Yes</a>
                            </footer>
                        </div>
                    </div>                            
<!-- Modal                             -->
<input type="hidden" id="deltablename" />
<input type="hidden" id="delid" />
<input type="hidden" id="rolid" />
<input type="hidden" id="sesid" />
<!--             Delete -->

<!-- Insert New -->

<!--                             Modal -->
                            <a href="#insmodal" id="insertbox" class="modal"></a>
							<div class="box grid_8" id="insmodal" hidden>
                        <header>
                            <div class="inner">
                                <div class="left title">
                                    <h1>Added!</h1>
                                </div>
                                <div class="right">
                                    <a href="#" class="close">close</a>
                                </div>
                            </div>
                        </header>
                    
                        <div class="box-content">
                            <p>New Record Added!<br /> Go Back To List?</p>
                            <footer class="pane">
                                <a href="#" class="close bt red">No</a>
                                <a href="javascript:goback()" onclick="goback()" class="bt blue">Go Back</a>
                            </footer>
                        </div>
                    </div>     

<!-- Insert New -->
<!-- Update -->

<!--                             Modal -->
                            <a href="#updatemodal" id="updatebox" class="modal"></a>
							<div class="box grid_8" id="updatemodal" hidden>
                        <header>
                            <div class="inner">
                                <div class="left title">
                                    <h1>Updated!</h1>
                                </div>
                                <div class="right">
                                    <a href="#" class="close">close</a>
                                </div>
                            </div>
                        </header>
                    
                        <div class="box-content">
                            <p>Record Updated!<br /> Go Back To List?</p>
                            <footer class="pane">
                                <a href="#" class="close bt red">No</a>
                                <a href="javascript:goback()" onclick="goback()" class="bt blue">Go Back</a>
                            </footer>
                        </div>
                    </div>

<!-- Update -->
