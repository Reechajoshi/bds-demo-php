<?php include "conn.php"; 
if ($_REQUEST['id'])
	{
	$memdetsql = mysql_query("select * from cw_dlgte_reg where pageid=".$_REQUEST['id']);
	$memdetresult = mysql_fetch_array($memdetsql);
	$func = "updaterecord()";
	$btn = "Update";
	}

	
?> 
<!DOCTYPE html>
<html>
    
    <head>
	    <?php include('js-css-include.php'); ?>
	    <script>
	    	function updaterecord()
	    		{  
		    		$.post("page-update.php?update=1", {id:$('#frmid').val(), pagetitle:$('#pagetitle').val(),pagehead:$('#pageheading').val(),pagemeta:$('#pagemeta').val(),descri:$('#descri').val(),parentpage:$('#parentpage').val(),  },
								function(data) 
								{
								$('#updatebox').trigger('click');
								//$("#userscore").html(data);
								}
							);
		    			
	    		}
	    	function insertrecord()
	    		{  $('selector').elrte('updateSource');
		    		$.post("page-update.php?update=2", { pagetitle:$('#pagetitle').val(),pagehead:$('#pageheading').val(),pagemeta:$('#pagemeta').val(),descri:$('#descri').val(),parentpage:$('#parentpage').val(), },
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
                                <h1>View Page Details</h1>
                                <span class="divider"></span>
                            </header>

                            <div class="box grid_12">
                                <header>
                                    <div class="inner">
                                        <div class="left title">
                                            <h1>Page Details</h1>
                                        </div>
                                        <div class="right">
                                            <a href="#" class="close">close</a>
                                        </div>
                                    </div>
                                </header>
                            
                                <div class="box-content">
                                    <div class="field fullwidth">
									<input type="hidden" id="frmid" name="frmid" value="<?= $_REQUEST['id'];?>" />
                                        <label for="text-input-normal">First Name</label>
                                        <input type="text" id="pagetitle" value="<?= $memdetresult['Name']; ?>" />
                                    </div>
									<div class="field fullwidth">
									
                                        <label for="text-input-normal">Last Name</label>
                                        <input type="text" id="pagetitle" value="<?= $memdetresult['Last_Name']; ?>" />
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Company </label>
                                        <input type="text" id="pageheading" value="<?= $memdetresult['Company']; ?>" />
                                    </div>
									 <div class="field fullwidth">
                                        <label for="text-input-normal">Address </label>
                                        <input type="text" id="pageheading" value="<?= $memdetresult['Address']; ?>" />
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">City </label>
                                        <input type="text" id="pageheading" value="<?= $memdetresult['City']; ?>" />
                                    </div>
									  <div class="field fullwidth">
                                        <label for="text-input-normal">State </label>
                                        <input type="text" id="pageheading" value="<?= $memdetresult['State']; ?>" />
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Postal Code </label>
                                        <input type="text" id="pageheading" value="<?= $memdetresult['Postal_Code']; ?>" />
                                    </div>
										<div class="field fullwidth">
                                        <label for="text-input-normal">Phone </label>
                                        <input type="text" id="pageheading" value="<?= $memdetresult['Phone']; ?>" />
                                    </div>
										<div class="field fullwidth">
                                        <label for="text-input-normal">Fax </label>
                                        <input type="text" id="pageheading" value="<?= $memdetresult['Fax']; ?>" />
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Email </label>
                                        <input type="text" id="pageheading" value="<?= $memdetresult['Email']; ?>" />
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Country </label>
                                        <input type="text" id="pageheading" value="<?= $memdetresult['Country']; ?>" />
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
