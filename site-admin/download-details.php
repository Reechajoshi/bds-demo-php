<?php include "conn.php"; 
if ($_REQUEST['id'])
	{
	$memdetsql = mysql_query("select * from downloads where id=".$_REQUEST['id']);
	$memdetresult = mysql_fetch_array($memdetsql);
	$func = "updaterecord()";
	$btn = "Update";
	}

	else
	{
		$pagetitle = mysql_query("select * from downloads");
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
		    		$.post("download-update.php?update=1", {id:$('#galid').val(), link:$('#url1').val(),title:$('#title').val(), category: $('#cat').val()},
								function(data) 
								{
								$('#updatebox').trigger('click');
								//$("#userscore").html(data);
								}
							);
		    			
	    		}
	    	function insertrecord()
	    		{  $('selector').elrte('updateSource');
		    		$.post("download-update.php?update=2", { link:$('#url1').val(), title:$('#title').val(), category: $('#cat').val() },
								function(data) 
								{
								$('#updatebox').trigger('click');
								//$("#userscore").html(data);
								}
							);
		    			
	    		}
	    		
	    </script>
	    <script type="text/javascript" charset="utf-8">

$().ready(function() {
    
    $('#page_image1').click(function() {                        
    $('#finder_browse').dialogelfinder({      
    url : 'php/connector-gallery.php',
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
                                             <label>Title</label>
                                         <input type="text" id="title" value="<?= $memdetresult['title']; ?>" />
					</div>


                                          <div class="field fullwidth">
					 <label>Link / PDF</label>
                                        <input type="text" id="url1" value="<?= $memdetresult['link']; ?>" />
												<input type="submit" id="page_image1" class="bt blue" value="Select PDF" />
                                    </div>

					 <label>Category</label>
					<select id="cat" name="cat">
					<option value="<?php echo $memdetresult['category']; ?>"><?php echo $memdetresult['category']; ?></option> 																
					<option value="e-brochure">e-brochure</option>
										
					<option value="Datasheets">Datasheets</option>
					
					<option value="Videos">Videos</option>
			
					<option value="White Papers">White Papers</option>
										
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

