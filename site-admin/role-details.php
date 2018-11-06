<?php include "conn.php"; 
if ($_REQUEST['id'])
	{
	$memdetsql = mysql_query("select * from role where roleid=".$_REQUEST['id']);
	$memdetresult = mysql_fetch_array($memdetsql);
	$func = "updaterecord()";
	$btn = "Update";
	}
else
	{
		$func = "insertrecord()";
		$btn = "Add New";
	}

	
?> 
<!DOCTYPE html>
<html>
    
    <head>
	    <?php include('js-css-include.php'); ?>
	    <script>
	    	function updaterecord()
	    		{  
		    		$.post("role-update.php?update=1", {roleid:$('#roleid').val(), rolename:$('#rolename').val(),roledesc:$('#roledesc').val() },
								function(data) 
								{
								$('#updatebox').trigger('click');
								}
							);
		    			
	    		}
	    	function insertrecord()
	    		{  
		    		$.post("role-update.php?update=2", {roleid:$('#roleid').val(), rolename:$('#rolename').val(),roledesc:$('#roledesc').val()},
								function(data) 
								{
								$('#insertbox').trigger('click');
								}
							);
		    			
	    		}
	    		
	    </script>
    </head>
    <body>
        <!-- wrapper -->
        <div id="wrapper">
            <?php include('header.php'); ?>
            <section id="main">
                <div class="container_12">
                    <div id="content">
                    <!-- The modal -->
                        <div class="main-box">
                            <!-- # Form -->
                            <header class="grid_12 head">
                                <h1>Edit Role Details</h1>
                                <span class="divider"></span>
                            </header>

                            <div class="box grid_6">
                                <header>
                                    <div class="inner">
                                        <div class="left title">
                                            <h1>Role Details</h1>
                                        </div>
                                        <div class="right">
                                            <a href="#" class="close">close</a>
                                        </div>
                                    </div>
                                </header>
                            
                                <div class="box-content">
                                    <div class="field fullwidth">
                                    <input type="hidden" id="roleid" value="<?= $_REQUEST['id']; ?>" />
                                        <label for="text-input-normal">Role</label>
                                        <input type="text" id="rolename" value="<?= $memdetresult['rolename']; ?>" />
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Role Desc </label>
                                        <input type="text" id="roledesc" value="<?= $memdetresult['roledesc']; ?>" />
                                    </div>

                                    	<footer class="pane">
                                            <input type="submit" onclick="<?= $func ?>" class="bt blue" value="<?= $btn ?>" />
                                        </footer>
                                

                                 </div>
                            </div>

                    </div>
                </div>
            </section>
        </div>
        <!-- /wrapper -->

        <?php include('footer.php'); ?>
    </body>
</html>
