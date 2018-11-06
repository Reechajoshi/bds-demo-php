<?php include "conn.php"; ?>
<!DOCTYPE html>
<html>
    
    <head>
	    <?php include "js-css-include.php" ?>
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
                                                <h1>Award Entries</h1>
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
                                                    <th class="check-all checkbox"><input type="checkbox" /></th>
                                                    <th class="sorting_disabled small">Company Name</th>
                                                    <th>Entry Title</th>
                                                    <th class="sorting_disabled small">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php 
                                        
                                            	$membersql = mysql_query("SELECT a.id AS uid,a.fullname,a.company, b.id AS frid, b.entry_title
								FROM member a, awards_details b, awards_merger c
								WHERE a.id = c.usrid
								AND b.id = c.frmid
								group by b.id");
                                            	while ($memberresult = mysql_fetch_array($membersql))
                                            		{
	                                            		echo '<tr>
                                                    <td class="checkbox"><input type="checkbox" /></td>
                                                    <td class="center">'.$memberresult['company'].'</td>
                                                    <td><a href="awardentry-details.php?id='.$memberresult['frid'].'">'.$memberresult['entry_title'].'</a></td>
                                                                                                     ';
                                                    
          
                                                    echo '
                                                    <td class="center">
                                                        <a href="awardentry-details.php?id='.$memberresult['frid'].'" class="tooltip glyph portrait-view" title="View"></a>
                                                        <a href="#" class="tooltip glyph close" title="Delete"></a>
                                                    </td>
                                                </tr>';
                                            		}
                                            	?>
                                                
                                                                                            </tbody>
                                        </table>

                                        <footer class="pane">
                                            <select>
                                                <option>Bulk action</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                            </select>
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
