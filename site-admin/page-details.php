<?php include "conn.php"; 
if ($_REQUEST['id'])
	{
	$memdetsql = mysql_query("select * from pages where pageid=".$_REQUEST['id']);
	$memdetresult = mysql_fetch_array($memdetsql);
	$func = "updaterecord()";
	$btn = "Update";
	}

	else
	{
		$pagetitle = mysql_query("select pageid,page_title,page_parent from pages");
	$pagetitleres = mysql_fetch_array($pagetitle);
		$func = "insertrecord()";
		$btn = "Add New";
	}
?> 
<!DOCTYPE html>
<html>
    
    <head>
    <meta charset="utf-8">
	    <?php include('js-css-include.php'); ?>
	    <script>
	    	function updaterecord()
	    		{  
		    		$.post("page-update.php?update=1", {id:$('#frmid').val(), pagetitle:$('#pagetitle').val(),pagehead:$('#pageheading').val(),pageintro: $('#pageintro').val(), descri:$('#descri').val(),parentpage:$('#parentpage').val(), page_image1:$('#url1').val() },
								function(data) 
								{
								$('#updatebox').trigger('click');
								//$("#userscore").html(data);
								}
							);
		    			
	    		}
	    	function insertrecord()
	    		{  $('selector').elrte('updateSource');
		    		$.post("page-update.php?update=2", { pagetitle:$('#pagetitle').val(),pagehead:$('#pageheading').val(), pageintro: $('#pageintro').val(), descri:$('#descri').val(),parentpage:$('#parentpage').val(), page_image1:$('#url1').val() },
								function(data) 
								{
								$('#updatebox').trigger('click');
								//$("#userscore").html(data);
								}
							);
		    			
	    		}
	    		
	    </script>
	    <script type="text/javascript">

$().ready(function() {
    
    $('#page_image1').click(function() {                        
    $('#finder_browse').dialogelfinder({      
    url : 'php/connector.php',
    lang : 'en',
    getFileCallback: function(url) {$('#url1').val(url);},
    commandsOptions: {
        getfile: {
          oncomplete: 'destroy' 
        }
      },
    })                
    })


		  });
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
                                        <label for="text-input-normal">Page Title</label>
                                        <input type="text" id="pagetitle" value="<?= $memdetresult['page_title']; ?>" />
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Page Heading </label>
                                        <input type="text" id="pageheading" value="<?= $memdetresult['page_heading']; ?>" />
                                    </div>
 
                                        <div class="field fullwidth">
                                    <?= (stripslashes($memdetresult['page_intro'])); ?>
                                        <label for="text-input-normal">Intro Text</label>
                                   
										<div class="box-content no-inner-space">
                                        <textarea class="editor" name="pageintro" id="pageintro"><?= (stripslashes($memdetresult['page_intro'])); ?></textarea>
                                        	</div>
                                    </div>
                                    
                                    <div class="field fullwidth">
                                    <?= (stripslashes($memdetresult['page_desc'])); ?>
                                        <label for="text-input-normal">Page Description</label>
                                   
										<div class="box-content no-inner-space">
                                        <textarea class="editor" name="descr" id="descri"><?= (stripslashes($memdetresult['page_desc'])); ?></textarea>
                                        	</div>
                                    </div>
                                    
                                    <div class="field">
                                            
                                            
                                           <label>Page Image</label>
                                         <input type="text" id="url1" value="<?= $memdetresult['page_image1']; ?>" />
												<input type="submit" id="page_image1" class="bt blue" value="Select Logo" />
                                        </div>
                                    
									
                                    <div class="field fullwidth">
                                        <label for="select">Page Parent: </label>
                                        <?php
										if($_REQUEST['id'])
										{
										
										$pagedetails=mysql_query("select page_title,pageid from pages where pageid=".$memdetresult['page_parent'] ." or pageid !=".$memdetresult['page_parent']);
										}
										else
										{
										$pagedetails=mysql_query("select page_title,pageid from pages where pageid=".$pagetitleres['page_parent'] ." or pageid !=".$pagetitleres['page_parent']);
										}
										
										?>
										<select id="parentpage" name="parentpage">
										<option value="0">None</option>
											<?php
											while($pageres=mysql_fetch_array($pagedetails))
											{
											
										
											
											if($_REQUEST['id'])
											{?>
											
											<option value="<?= $pageres['pageid']; ?>" <?php if($pageres['pageid']==$memdetresult['page_parent']){echo 'selected';}?>><?= $pageres['page_title']; ?></option>

											
											<?php
											}
												else
												{
											?>
											
											<option value="<?= $pageres['pageid']; ?>" <?php if($pageres['pageid']==$pagetitleres['page_parent']){echo 'selected';}?>><?= $pageres['page_title']; ?></option>
										<?php
												}
											}
											?>
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
