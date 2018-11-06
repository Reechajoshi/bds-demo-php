<?php include "conn.php"; 
if ($_REQUEST['id'])
	{
	$memdetsql = mysql_query("select * from sponsor_category where id=".$_REQUEST['id']);
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
		    		$.post("sponsor-category-update.php?update=1", {id:$('#id').val(), catname:$('#catname').val()},
								function(data) 
								{
								$('#updatebox').trigger('click');
								}
							);
		    			
	    		}
	    	function insertrecord()
	    		{  
		    		$.post("sponsor-category-update.php?update=2", {id:$('#id').val(), catname:$('#catname').val()},
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
                                <h1>Edit Sponsor Details</h1>
                                <span class="divider"></span>
                            </header>

                            <div class="box grid_6">
                                <header>
                                    <div class="inner">
                                        <div class="left title">
                                            <h1>Sponsor Details</h1>
                                        </div>
                                        <div class="right">
                                            <a href="#" class="close">close</a>
                                        </div>
                                    </div>
                                </header>
                            
                                <div class="box-content">
                                    <input type="hidden" id="id" value=" <?= $memdetresult['id']; ?>" />
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Category Name</label>
                                        <input type="text" id="catname" value="<?= $memdetresult['sponsor_name']; ?>" />
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
