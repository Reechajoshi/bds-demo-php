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
                                                <h1>Sort Jury</h1>
                                            </div>
                                            <div class="right">
                                                <a href="#" class="close">close</a>
                                            </div>
                                        </div>
                                    </header>

                                    <div class="box-content no-inner-space">
	                                    	<ul id="sortme">
		                                    	<?php
			                                    	// Connecting to Database
			                                    	include "conn.php";


			                                    	// Getting menu items from DB
			                                    	$result = mysql_query("SELECT distinct a.id,a.fullname, a.designation, a.companylogo, a.profilepic, a.sort FROM member a, sessionrole c WHERE a.id=c.userid and c.roleid=5 order by a.sort_jury") or die(mysql_error());
			                                    	while($row = mysql_fetch_array($result)) {
				                                    	echo '<li id="menu_' . $row['id'] . '" class="sortli">' . $row['fullname'] . "</li>\n";
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
