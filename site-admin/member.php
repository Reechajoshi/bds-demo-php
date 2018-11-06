<?php include "conn.php"; ?>
<!DOCTYPE html>
<html>
    
    <head>
	<?php	
if(isset($_REQUEST['frid']))
{
	$mid=$_REQUEST['frid'];
	mysql_query("delete from member where id=".$mid);

	
	
	

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
		    		window.location = "member-details.php";
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
                                                <h1>List of Members</h1>
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
                                                    <th class="sorting_disabled small">Profile Pic</th>
                                                    <th>Fullname</th>
                                                    <th class="small">Designation</th>
                                                    <th>Role</th>
                                                    <th class="sorting_disabled small">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php 
	                                            	if ($_REQUEST['id']!=0)
	                                            	{
		                                            $membersql = mysql_query("SELECT distinct a.id,a.fullname, a.designation, a.companylogo, a.profilepic, a.sort FROM member a, sessionrole c WHERE a.id=c.userid and c.roleid=".$_REQUEST['id']." order by a.sort");
	                                            	}
	                                            else
	                                            	{
                                            	$membersql = mysql_query("select id,fullname, profilepic, designation, companylogo from member order by fullname");							}
                                            	
                                            	while ($memberresult = mysql_fetch_array($membersql))
                                            		{
	                                            		echo '<tr>
                                                    <td class="checkbox"><input type="checkbox" /></td>
                                                    <td class="center"><img src="auto-thumb.php?src='.$memberresult['profilepic'].'&h=40&w=40&zc=1" width="40" height="40" alt="thumb" /></td>
                                                    <td><a href="member-details.php?id='.$memberresult['id'].'">'.$memberresult['fullname'].'</a></td>
                                                    <td class="center">'.$memberresult['designation'].'</td>
                                                    <td>';
                                                    $roleqry = mysql_query("select distinct c.roleid, b.rolename from sessionrole c, role b where c.roleid=b.roleid and c.userid=".$memberresult['id']);
            $comma="";
            while ($roleresult = mysql_fetch_array($roleqry) )
            	{
	            	echo $comma.$roleresult['rolename'];
	            	$comma=", ";
            	}
          
                                                    echo '</td>
                                                    <td class="center">
                                                        <a href="member-details.php?id='.$memberresult['id'].'" class="tooltip glyph portrait-view" title="Edit"></a>
                                                        <a href="member.php?frid='.$memberresult['id'].'" onclick="return checkdel();" class="tooltip glyph close" title="Delete"></a>
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
