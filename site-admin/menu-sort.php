<?php include "conn.php"; ?>
<!DOCTYPE html>
<html>
    
    <head>
	    <?php include "js-css-include.php" ?>
	    <style>
	    	.sortli
	     {
  background: #E5E5E5;
  background: linear-gradient(top, #ffffff, #e5e5e5);
  padding: 10px;
  font-size: 11px;
  border-right: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  vertical-align: middle;
  text-align: left;
  padding-top: 5px;
  text-shadow: 0 1px 0 #ffffff;
}

	    </style>
    </head>
    <body>
        <!-- wrapper -->
        <div id="wrapper">
            <?php include('header.php'); ?>

            <section id="main">
                <div class="container_12">
                    
                        <div class="main-box">
                            
                            <!-- Media table -->
                            <div class="grid_12 boxed-table">
                                <div class="box">
                                    <header>
                                        <div class="inner">
                                            <div class="left title">
                                                <h1>Sort Speakers</h1>
                                            </div>
                                            <div class="right">
                                                <a href="#" class="close">close</a>
                                            </div>
                                        </div>
                                    </header>

                                    <div class="box-content no-inner-space">
	                                    	<ul id="sortmainmenu">
		                                    	<?php
			                                    	// Getting menu items from DB
			                                    	$result = mysql_query("SELECT pageid, page_title,page_parent FROM `pages` ORDER BY `page_sort` ASC") or die(mysql_error());
			                                    	while($row = mysql_fetch_array($result)) {
			                                    		if ($row['page_parent']!=0)
				                                    	echo '<li id="menu_' . $row['pageid'] . '" class="sortli" style="padding-left:30px">- ' . $row['page_title'] . "</li>\n";							
				                                    	else
				                                    	echo '<li id="menu_' . $row['pageid'] . '" class="sortli">' . $row['page_title'] . "</li>\n";							
				                                    	
				                                    	}
				                                    	?>
				                                    	</ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Media table -->

                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /wrapper -->

        <?php include('footer.php'); ?>
    </body>
</html>
