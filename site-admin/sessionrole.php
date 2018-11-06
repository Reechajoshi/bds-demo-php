<?php include "conn.php"; ?>
<!DOCTYPE html>
<html>
    
    <head>
	<?php	
if(isset($_REQUEST['id']) && isset($_REQUEST['sessionid']) && isset($_REQUEST['roleid']))
{
	$mid=$_REQUEST['id'];
	$sid=$_REQUEST['sessionid'];
	$rid=$_REQUEST['roleid'];
	mysql_query("delete from sessionrole where userid=".$mid." and roleid=".$rid." and sessionid=".$sid);

	
	
	

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
		    		window.location = "sessionrole-details.php";
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
                                                <h1>List of Role / Member / Session</h1>
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
                                                    <th>Session Topic</th>
                                                    <th>Member Name</th>
                                                    <th>Member Role</th>
                                                    <th class="sorting_disabled small">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php 
                                        
                                            	$membersql = mysql_query("SELECT a.sessionid, b.roleid, c.id, a.session_topic, b.rolename, c.fullname FROM sessionrole d, session a, role b, member c where d.userid=c.id and d.roleid=b.roleid and d.sessionid= a.sessionid");
                                            	while ($memberresult = mysql_fetch_array($membersql))
                                            		{
	                                            		echo '<tr><td class="center"><a href="sessionrole-details.php?id='.$memberresult['id'].'&sessionid='.$memberresult['sessionid'].'&roleid='.$memberresult['roleid'].'">'.$memberresult['session_topic'].'</td>
                                                    <td><a href="sessionrole-details.php?id='.$memberresult['id'].'&sessionid='.$memberresult['sessionid'].'&roleid='.$memberresult['roleid'].'">'.$memberresult['rolename'].'</a></td>
                                                    <td><a href="sessionrole-details.php?id='.$memberresult['id'].'&sessionid='.$memberresult['sessionid'].'&roleid='.$memberresult['roleid'].'">'.$memberresult['fullname'].'</a></td>
                                                    <td class="center">
                                                        <a href="sessionrole-details.php?id='.$memberresult['id'].'&sessionid='.$memberresult['sessionid'].'&roleid='.$memberresult['roleid'].'" class="tooltip glyph portrait-view" title="Edit"></a>
                                                        <a href="sessionrole.php?id='.$memberresult['id'].'&sessionid='.$memberresult['sessionid'].'&roleid='.$memberresult['roleid'].'" onclick="return checkdel();" class="tooltip glyph close" title="Delete"></a>
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
