<?php include "conn.php"; 
if ($_REQUEST['id'])
	{
	$memdetsql = mysql_query("select * from video where id=".$_REQUEST['id']);
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
		    		$.post("video-update.php?update=1", {id:$('#id').val(), title:$('#title').val(),url:$('#url').val(),image_url:$('#image_url').val(), description:$('#description').val()},
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
		    		$.post("video-update.php?update=2", {title:$('#title').val(),url:$('#url').val(),image_url:$('#image_url').val(), description:$('#description').val()},
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
    url : 'php/connector.php',
    lang : 'en',
    getFileCallback: function(url) {$('#url').val(url);},
    commandsOptions: {
        getfile: {
          oncomplete: 'destroy' 
        }
      },
    })                
    })
    
    $('#imageurl').click(function() {                        
    $('#finder_browse').dialogelfinder({      
    url : 'php/connector.php',
    lang : 'en',
    getFileCallback: function(url) {$('#image_url').val(url);},
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
                                <h1>Edit Video Details</h1>
                                <span class="divider"></span>
                            </header>

                            <div class="box grid_6">
                                <header>
                                    <div class="inner">
                                        <div class="left title">
                                            <h1>Session Details</h1>
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
                                        <input type="text" id="title" value="<?= $memdetresult['title']; ?>" />
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Video URL</label>
                                        <input type="text" id="url" value='<?= $memdetresult['url']; ?>' />
                                        <input type="submit" id="videourl" class="bt blue" value="Select Video" />
                                    </div>
                                     <div class="field fullwidth">
                                        <label for="text-input-normal">Image URL</label>
                                        <input type="text" id="image_url" value="<?= $memdetresult['image_url']; ?>" />
                                        <input type="submit" id="imageurl" class="bt blue" value="Select Image" />
                                    </div>
                                      <div class="field fullwidth">
                                        <label for="text-input-normal">Description</label>
                                        <input type="text" id="description" value="<?= $memdetresult['description']; ?>" />
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
