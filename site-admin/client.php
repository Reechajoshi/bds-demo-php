<?php include "conn.php"; ?>
<!DOCTYPE html>
<html>
    
    <head>
	<?php	
if(isset($_REQUEST['frid']))
{
	$mid=$_REQUEST['frid'];
	mysql_query("delete from clients where id=".$mid);

	
	
	

	mysql_query("commit");
}
?>
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
	    <?php include "js-css-include.php" ?>
	    <script>
	    	function addmember() 
	    		{ 
		    		window.location = "client-details.php";
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
                                                <h1>List of clients</h1>
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
                                                   
                                                    <th class="sorting_disabled small">ID</th>
                                                    <th>Client</th>
                                                   <th>Image</th>
                                                    <th class="sorting_disabled small">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php 
                                        if($_REQUEST['id'])
					{
						$membersql = mysql_query("select * from clients where id='".$_REQUEST['id']."'");
					}
						else
						{
                                            	$membersql = mysql_query("select * from clients");
						}
                                            	while ($memberresult = mysql_fetch_array($membersql))
                                            		{
	                                            		echo '<tr>
                                                    
                                                    <td class="center">'.$memberresult['id'].'</td>
                                                    <td>'.$memberresult['client'].'</td>
							<td><a href="client-details.php?id='.$memberresult['id'].'"><img src="auto-thumb.php?src='.str_replace("http://bdsindia.com/","../",$memberresult['image_url']).'&h=75&w=150&zc=1" /></a></td>';
                                                            
                                                    echo '
                                                    <td class="center">
                                                        <a href="client-details.php?id='.$memberresult['id'].'" class="tooltip glyph portrait-view" title="Edit"></a>
                                                        <a href="client.php?frid='.$memberresult['id'].'" onclick="return checkdel();" class="tooltip glyph close" title="Delete"></a>
                                                    </td>
                                                </tr>';
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
