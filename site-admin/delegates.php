<?php include "conn.php"; ?>
<!DOCTYPE html>
<html>
    
    <head>
	    <?php include "js-css-include.php" ?>
	    <script>
	    	function addmember() 
	    		{ 
		    		window.location = "page-details.php";
	    		}
	    </script>
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
                                                <h1>List of Pages</h1>
                                            </div>
                                            <div class="right">
                                                <a href="#" class="close">close</a>
                                            </div>
                                        </div>
                                    </header>

                                    <div class="box-content no-inner-space">
                                        <table class="datatable ten-per-page">
                                            <thead>
                                                <tr>
                                                   
                                                    <th class="sorting_disabled small">Page ID</th>
                                                    <th>Name</th>
                                                   <th>Company Name</th>
                                                    <th class="sorting_disabled small">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php 
                                        
                                            	$membersql = mysql_query("select Name,Last_Name,Company from  cw_dlgte_reg order by id");
                                            	$i=1;
												while ($memberresult = mysql_fetch_array($membersql))
                                            		{
	                                            		echo '<tr>
                                                    
                                                    <td class="center">'.$i.'</td>
                                                    <td><a href="delegate-details.php?id='.$memberresult['id'].'">'.$memberresult['Name'].' '.$memberresult['Last_Name'].'</a></td>
													 <td><a href="delegate-details.php?id='.$memberresult['id'].'">'.$memberresult['Name'].' '.$memberresult['Company'].'</a></td>
													
													';
                                                   
                                                            
                                                    echo '
                                                    <td class="center">
                                                        <a href="delegate-details.php?id='.$memberresult['id'].'" class="tooltip glyph portrait-view" title="View"></a>
                                                        <a href="#" class="tooltip glyph close" title="Delete"></a>
                                                    </td>
                                                </tr>';
                                            		$i++;
													}
                                            	?>
                                                
                                                                                            </tbody>
                                        </table>

                                        <footer class="pane">
                                        	<input type="submit" onclick="addmember()" class="bt blue" value="Add New" />

                                            <!--
<select>
                                                <option>Bulk action</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                            </select>
-->
                                        </footer>
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
