<?php include "conn.php"; 
if ($_REQUEST['id'])
	{
	$memdetsql = mysql_query("select * from location where id=".$_REQUEST['id']);
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
		    		$.post("location-update.php?update=1", {id:$('#id').val(), locationname:$('#locationname').val(),description:$('#description').val() },
								function(data) 
								{
								$('#updatebox').trigger('click');
								}
							);
		    			
	    		}
	    	function insertrecord()
	    		{  
		    		$.post("location-update.php?update=2", {id:$('#id').val(), locationname:$('#locationname').val(),description:$('#description').val()},
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
                                <h1>Edit Location Details</h1>
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
                                    <input type="hidden" id="id" value="<?= $_REQUEST['id']; ?>" />
                                        <label for="text-input-normal">Location Name</label>
                                        <input type="text" id="locationname" value="<?= $memdetresult['locationname']; ?>" />
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Location Description </label>
                                        <input type="text" id="description" value="<?= $memdetresult['description']; ?>" />
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
