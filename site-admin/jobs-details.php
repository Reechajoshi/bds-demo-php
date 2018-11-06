<?php include "conn.php"; 
if ($_REQUEST['id'])
	{
	$memdetsql = mysql_query("select * from jobs where id=".$_REQUEST['id']);
	$memdetresult = mysql_fetch_array($memdetsql);
	$func = "updaterecord()";
	$btn = "Update";
	}

	else
	{
		$pagetitle = mysql_query("select * from jobs");
	$pagetitleres = mysql_fetch_array($pagetitle);
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
		    		$.post("jobs-update.php?update=1", {id:$('#galid').val(), description:$('#description').val(),client:$('#client').val(), category: $('#cat').val()},
								function(data) 
								{
								$('#updatebox').trigger('click');
								//$("#userscore").html(data);
								}
							);
		    			
	    		}
	    	function insertrecord()
	    		{  $('selector').elrte('updateSource');
		    		$.post("jobs-update.php?update=2", { description:$('#description').val(),client:$('#client').val(), category: $('#cat').val() },
								function(data) 
								{
								$('#updatebox').trigger('click');
								//$("#userscore").html(data);
								}
							);
		    			
	    		}
	    		
	    </script>
	   
    </head>
    <body style="width:100%">
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
                                <h1>View List</h1>
                                <span class="divider"></span>
                            </header>

                            <div class="box grid_12">
                                <header>
                                    <div class="inner">
                                        <div class="left title">
                                            <h1>Details</h1>
                                        </div>
                                        <div class="right">
                                            <a href="#" class="close">close</a>
                                        </div>
                                    </div>
                                </header>
                            
                                <div class="box-content">
                                    <div class="field fullwidth">
									
                                    <div class="field">
                                            <input type="hidden" id="galid" value="<?= $memdetresult['id']; ?>" />
                                             <label>Client</label>
                                         <input type="text" id="client" value="<?= $memdetresult['client']; ?>" />
</div>
                                          <div class="field fullwidth">
                                        <label for="text-input-normal">Description </label>
                                       <textarea class="editor" id="description" name="description" value="<?= $memdetresult['description']; ?>"><?= $memdetresult['description']; ?></textarea>
                                    </div>

					 <label>Category</label>
					<select id="cat" name="cat">
																					
					<option value="Completed Jobs">Completed Jobs</option>
										
					<option value="Ongoing Jobs - Repairs and Coating">Ongoing Jobs - Repairs and Coating</option>
			
					<option value="Ongoing Jobs - Construction">Ongoing Jobs - Construction</option>
										
                                        </select>
												
                                        </div>
                                        
					

                                   
                                    <div id="finder_browse"></div>
                                    <footer class="pane">
                                            <input type="submit" onclick="<?= $func ?>" class="bt blue" value="<?= $btn ?>" />
                                        </footer>
                                 </div>
                            </div>

                            
                </div>
            </section>
        </div>
        <!-- /wrapper -->

        <?php include('footer.php'); ?>
    </body>
</html>

