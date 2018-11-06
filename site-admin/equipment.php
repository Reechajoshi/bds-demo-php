<?php include "conn.php"; ?>
<!DOCTYPE html>
<html>
    
    <head>
	<?php	
if(isset($_REQUEST['frid']))
{
	$mid=$_REQUEST['frid'];
	mysql_query("delete from equipment_list where id=".$mid);

	
	
	

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
		    		window.location = "equipment-details.php";
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
                                                <h1>List of Equipment</h1>
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
                                                    <th>Equipment</th>
                                                   <th>Quantity</th>
                                                    <th class="sorting_disabled small">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php 
                                        if($_REQUEST['id'])
					{
						$membersql = mysql_query("select * from equipment_list where id='".$_REQUEST['id']."'");
					}
						else
						{
                                            	$membersql = mysql_query("select * from equipment_list");
						}
                                            	while ($memberresult = mysql_fetch_array($membersql))
                                            		{
	                                            		echo '<tr>
                                                    
                                                    <td class="center">'.$memberresult['id'].'</td>
                                                    <td><a href="equipment-details.php?id='.$memberresult['id'].'">'.$memberresult['title'].'</td><td>'.$memberresult['qty'].'</td>';
                                                            
                                                    echo '
                                                    <td class="center">
                                                        <a href="equipment-details.php?id='.$memberresult['id'].'" class="tooltip glyph portrait-view" title="Edit"></a>
                                                        <a href="equipment.php?frid='.$memberresult['id'].'" onclick="return checkdel();" class="tooltip glyph close" title="Delete"></a>
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
