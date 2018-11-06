<?php include "conn.php"; 
if ($_REQUEST['id'])
	{
	$memdetsql = mysql_query("select * from gallery where id=".$_REQUEST['id']);
	$memdetresult = mysql_fetch_array($memdetsql);
	$func = "updaterecord()";
	$btn = "Update";
	}

	else
	{
		$pagetitle = mysql_query("select * from gallery");
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
		    		$.post("gallery-update.php?update=1", {id:$('#galid').val(), page_image1:$('#url1').val(),image_title:$('#image_title').val(),parentpage:$('#parentpage').val()},
								function(data) 
								{
								$('#updatebox').trigger('click');
								//$("#userscore").html(data);
								}
							);
		    			
	    		}
	    	function insertrecord()
	    		{  $('selector').elrte('updateSource');
		    		$.post("gallery-update.php?update=2", { page_image1:$('#url1').val(),image_title:$('#image_title').val(),parentpage:$('#parentpage').val() },
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
									
                                    <div class="field">
                                            <input type="hidden" id="galid" value="<?= $memdetresult['id']; ?>" />
                                             <label>Title</label>
                                         <input type="text" id="image_title" value="<?= $memdetresult['image_title']; ?>" />
                                           <label>Image</label>
                                         <input type="text" id="url1" value="<?= $memdetresult['image_url']; ?>" />
												<input type="submit" id="page_image1" class="bt blue" value="Select Image" />
												<img src="auto-thumb.php?src=../images/gallery/<?= $memdetresult['image_url']; ?>&h=75&w=150&zc=1" />
                                        </div>
                                        
					<div class="field fullwidth">
                                        <label for="select">Category: </label>
					<select id="parentpage" name="parentpage">
																					
					<option value="<?= $memdetresult['category']; ?>"><?= $memdetresult['category']; ?></option>
										
					<option value="Repairs and Strengthening">Repairs and Strengthening</option>
			
					<option value="Seismic Retrofitting">Seismic Retrofitting</option>
					<option value="Specialized Coatings">Specialized Coatings</option>
					<option value="Waterproofing">Waterproofing</option>
					<option value="Corrosion Mitigation">Corrosion Mitigation</option>
					<option value="Residential">Residential</option>
										
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
