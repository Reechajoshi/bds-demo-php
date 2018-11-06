<?php include "conn.php"; ?>
<!DOCTYPE html>
<html>
    
    <head>

	<?php	
if(isset($_REQUEST['frid']))
{
	$mid=$_REQUEST['frid'];
	mysql_query("delete from session where sessionid=".$mid);

	
	
	

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
		    		window.location = "session-details.php";
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
                                                <h1>List of Sessions</h1>
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
                                                    <th>Topic</th>
                                                    <th class="small">Description</th>
                                                    <th >Date</th>
                                                    <th>Time</th>
                                                    <th class="sorting_disabled small">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php 
                                        
                                            	$membersql = mysql_query("select sessionid,session_topic, session_desc, session_date, start_time, end_time from session");
                                            	while ($memberresult = mysql_fetch_array($membersql))
                                            		{
	                                            		echo '<tr>
                                                    <td class="center"><a href="session-details.php?id='.$memberresult['sessionid'].'">'.$memberresult['session_topic'].'</a></td>
                                                    <td><a href="session-details.php?id='.$memberresult['sessionid'].'">'.$memberresult['session_desc'].'</a></td>
                                                    <td class="center">'.$memberresult['session_date'].' </td><td class="center">'.$memberresult['start_time'].' - '.$memberresult['end_time'].'</td>
                                                    <td class="center">
                                                        <a href="session-details.php?id='.$memberresult['sessionid'].'" class="tooltip glyph portrait-view" title="Edit"></a>
                                                        <a href="session.php?frid='.$memberresult['sessionid'].'" onclick="return checkdel();" class="tooltip glyph close" title="Delete"></a>
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
