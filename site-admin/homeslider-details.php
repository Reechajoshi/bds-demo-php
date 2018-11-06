<?php include "conn.php"; 
if ($_REQUEST['id'])
	{
	$memdetsql = mysql_query("select * from homepage_slider where id=".$_REQUEST['id']);
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
		    		$.post("homeslider-update.php?update=1", {id:$('#id').val(), caption:$('#caption').val(),image_video:$('#image_video').val()},
								function(data) 
								{
								$('#updatebox').trigger('click'); 
								}
							);
		    			
	    		}
	   </script> 		
    <script>
	    	function insertrecord()
	    		{  
		    		$.post("homeslider-update.php?update=2", {caption:$('#caption').val(), image_video:$('#image_video').val()},
								function(data) 
								{
								$('#insertbox').trigger('click'); 
								}
							);
		    			}
	    </script>
	    <script type="text/javascript" charset="utf-8">

$().ready(function() {
    
    $('#videourl').click(function() {                        
    $('#finder_browse').dialogelfinder({      
    url : 'php/connector-homegallery.php',
    lang : 'en',
    getFileCallback: function(url) {$('#image_video').val(url);},
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
                                <h1>Edit Homepage Slider Details</h1>
                                <span class="divider"></span>
                            </header>

                            <div class="box grid_12">
                                <header>
                                    <div class="inner">
                                        <div class="left title">
                                            <h1>Homepage Slider Details</h1>
                                        </div>
                                        <div class="right">
                                            <a href="#" class="close">close</a>
                                        </div>
                                    </div>
                                </header>
                            <div id="finder_browse"></div>
                                <div class="box-content">
                                    <div class="field fullwidth">
                                    <input type="hidden" id="id" value="<?= $_REQUEST['id']; ?>" />
                                        <label for="text-input-normal">Title</label>
                                        <input type="text" id="caption" value="<?= $memdetresult['image_title']; ?>" />
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Image / Video <span> </span></label>
                                        <input type="text" id="image_video" value="<?= $memdetresult['image_url']; ?>" />
                                        <input type="submit" id="videourl" class="bt blue" value="Select Image" />
                                    </div>
                                     

                                                                      
                                        <footer class="pane">
                                            <input type="submit" onclick="<?= $func ?>" class="bt blue" value="<?= $btn ?>" />
                                        </footer>
                                        </div>
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
