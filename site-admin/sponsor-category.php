<?php include "conn.php"; ?>
<!DOCTYPE html>
<html>
    
    <head>
	<?php	
if(isset($_REQUEST['frid']))
{
	$mid=$_REQUEST['frid'];
	mysql_query("delete from sponsor_category where id=".$mid);

	
	
	

	mysql_query("commit");
}
?>
	    <?php include "js-css-include.php" ?>
	    <script>
	    	function addmember() 
	    		{ 
		    		window.location = "sponsor-category-details.php";
	    		}
	    </script>
		<script language="javascript">


function checkdel()
{
	var checkdel=confirm("Are you sure to delete?");
	if(!checkdel)
	{
	  return false;
	}
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
                                                <h1>List of Role</h1>
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
                                                    <th class="sorting_disabled small">id</th>
                                                    <th>Sponsor Name</th>
                                                    <th class="sorting_disabled small">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php 
                                        
                                            	$membersql = mysql_query("select * from sponsor_category");
                                            	while ($memberresult = mysql_fetch_array($membersql))
                                            		{
	                                            		echo '<tr><td class="center"><a href="sponsor-category-details.php?id='.$memberresult['id'].'">'.$memberresult['id'].'</td>
                                                    <td><a href="sponsor-category-details.php?id='.$memberresult['id'].'">'.$memberresult['sponsor_name'].'</a></td>
                                                    <td class="center">
                                                        <a href="sponsor-category-details.php?id='.$memberresult['id'].'" class="tooltip glyph portrait-view" title="Edit"></a>
                                                        <a href="sponsor-category.php?frid='.$memberresult['id'].'" onclick="return checkdel();" class="tooltip glyph close" title="Delete"></a>
                                                    </td>
                                                </tr>';
                                            		}
                                            	?>
                                                
                                                                                            </tbody>
                                        </table>

                                        <footer class="pane">
                                        	<input type="submit" onclick="addmember()" class="bt blue" value="Add New" />
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
