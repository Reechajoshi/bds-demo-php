<?php include "conn.php"; 

	$memdetsql = mysql_query("select * from homepage_content where id=1");
	$memdetresult = mysql_fetch_array($memdetsql);
	$func = "updaterecord()";
	$btn = "Update";
	

	
?> 
<!DOCTYPE html>
<html>
    
    <head>
	    <?php include('js-css-include.php'); ?>
	    <script>
	    	function updaterecord()
	    		{  
		    		$.post("homepage-content-update.php?update=1", {holder1_title:$('#holder1_title').val(), url1:$('#url1').val(),holder1_url:$('#holder1_url').val(),holder2_title:$('#holder2_title').val(), url2:$('#url2').val(),holder2_url:$('#holder2_url').val(),holder3_title:$('#holder3_title').val(), url3:$('#url3').val(),holder3_url:$('#holder3_url').val(),holder4_title:$('#holder4_title').val(), url4:$('#url4').val(),holder4_url:$('#holder4_url').val(),box1_title:$('#box1_title').val(), box1_content:$('#box1_content').val(),box2_title:$('#box2_title').val(), box2_content:$('#box2_content').val(),box3_title:$('#box3_title').val(), box3_content:$('#box3_content').val(),box4_title:$('#box4_title').val(), box4_content:$('#box4_content').val()},
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
		    		$.post("homepage-content-update.php?update=2", {holder1_title:$('#holder1_title').val(), url1:$('#url1').val(),holder1_url:$('#holder1_url').val(),holder2_title:$('#holder2_title').val(), url2:$('#url2').val(),holder2_url:$('#holder2_url').val(),holder3_title:$('#holder3_title').val(), url3:$('#url3').val(),holder3_url:$('#holder3_url').val(),holder4_title:$('#holder4_title').val(), url4:$('#url4').val(),holder4_url:$('#holder4_url').val(),box1_title:$('#box1_title').val(), box1_content:$('#box1_content').val(),box2_title:$('#box2_title').val(), box2_content:$('#box2_content').val(),box3_title:$('#box3_title').val(), box3_content:$('#box3_content').val(),box4_title:$('#box4_title').val(), box4_content:$('#box4_content').val()},
								function(data) 
								{
								$('#insertbox').trigger('click');
								}
							);
		    			
	    		}
	    		
	    </script>
		<script type="text/javascript" charset="utf-8">

$().ready(function() {
    
    $('#holder1_image').click(function() {                        
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
    
    $('#holder2_image').click(function() {                        
    $('#finder_browse').dialogelfinder({      
    url : 'php/connector.php',
    lang : 'en',
    getFileCallback: function(url) {$('#url2').val(url);},
    commandsOptions: {
        getfile: {
          oncomplete: 'destroy' 
        }
      },
    })                
    })
    
    
    $('#holder3_image').click(function() {                        
    $('#finder_browse').dialogelfinder({      
    url : 'php/connector.php',
    lang : 'en',
    getFileCallback: function(url) {$('#url3').val(url);},
    commandsOptions: {
        getfile: {
          oncomplete: 'destroy' 
        }
      },
    })                
    })
    
    $('#holder4_image').click(function() {                        
    $('#finder_browse').dialogelfinder({      
    url : 'php/connector.php',
    lang : 'en',
    getFileCallback: function(url) {$('#url4').val(url);},
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
                                <h1>Edit Sponsor Details</h1>
                                <span class="divider"></span>
                            </header>

                            <div class="box grid_12">
                                <header>
                                    <div class="inner">
                                        <div class="left title">
                                            <h1>Sponosr Details</h1>
                                        </div>
                                        <div class="right">
                                            <a href="#" class="close">close</a>
                                        </div>
                                    </div>
                                </header>
                            
                                <div class="box-content">
                                    
                                    
									<div class="field fullwidth">
                                        <label for="text-input-normal">Holder1 Title</label>
                                        <input type="text" id="holder1_title" value="<?= $memdetresult['holder1_title']; ?>" />
                                    </div>
                                    <div class="field">
                                            
                                            
                                           <label>Holder1 Image</label>
                                         <input type="text" id="url1" value="<?= $memdetresult['holder1_image']; ?>" />
												<input type="submit" id="holder_image1" class="bt blue" value="Select Logo" />
                                        </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Holder1 URL</label>
                                        <input type="text" id="holder1_url" value="<?= $memdetresult['holder1_url']; ?>" />
                                    </div>
                                    
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Holder2 Link</label>
                                        <input type="text" id="holder2_title" value="<?= $memdetresult['holder2_title']; ?>" />
                                    </div>
                                    <div class="field">
                                            
                                            
                                           <label>Holder2 Image</label>
                                         <input type="text" id="url2" value="<?= $memdetresult['holder2_image']; ?>" />
												<input type="submit" id="holder_image2" class="bt blue" value="Select Logo" />
                                        </div>
                                        <div class="field fullwidth">
                                        <label for="text-input-normal">Holder2 URL</label>
                                        <input type="text" id="holder2_url" value="<?= $memdetresult['holder2_url']; ?>" />
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Holder3 Title</label>
                                        <input type="text" id="holder3_title" value="<?= $memdetresult['holder3_title']; ?>" />
                                    </div>
                                    <div class="field">
                                            
                                            
                                           <label>Holder3 Image</label>
                                         <input type="text" id="url3" value="<?= $memdetresult['holder3_image']; ?>" />
												<input type="submit" id="holder_image3" class="bt blue" value="Select Logo" />
                                        </div>
                                        <div class="field fullwidth">
                                        <label for="text-input-normal">Holder3 URL</label>
                                        <input type="text" id="holder3_url" value="<?= $memdetresult['holder3_url']; ?>" />
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Holder4 Title</label>
                                        <input type="text" id="holder4_title" value="<?= $memdetresult['holder4_title']; ?>" />
                                    </div>
                                    <div class="field">
                                            
                                            
                                           <label>Holder4 Image</label>
                                         <input type="text" id="url4" value="<?= $memdetresult['holder4_image']; ?>" />
												<input type="submit" id="holder_image4" class="bt blue" value="Select Logo" />
                                        </div>
                                        
                                        <div class="field fullwidth">
                                        <label for="text-input-normal">Holder4 URL</label>
                                        <input type="text" id="holder4_url" value="<?= $memdetresult['holder4_url']; ?>" />
                                    </div>
                                        
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Box1 Title </label>
                                        <input type="text" id="box1_title" value="<?= $memdetresult['box1_title']; ?>" />
                                    </div>
                                    
                                    
									<div class="field fullwidth">
                                        <label for="text-input-normal">Box1 Description </label>
                                       <textarea class="editor" id="box1_content" name="box1_content" value="<?= $memdetresult['box1_content']; ?>"><?= $memdetresult['box1_content']; ?></textarea>
                                    </div>

									
  
  
  									<div class="field fullwidth">
                                        <label for="text-input-normal">Box2 Title </label>
                                        <input type="text" id="box2_title" value="<?= $memdetresult['box2_title']; ?>" />
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Box2 Description </label>
                                       <textarea class="editor" id="box2_content" name="box2_content" value="<?= $memdetresult['box2_content']; ?>"><?= $memdetresult['box2_content']; ?></textarea>
                                    </div>

									
  
  									
  									<div class="field fullwidth">
                                        <label for="text-input-normal">Box3 Title </label>
                                        <input type="text" id="box3_title" value="<?= $memdetresult['box3_title']; ?>" />
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Box3 Description </label>
                                       <textarea class="editor" id="box1_content" name="box1_content" value="<?= $memdetresult['box3_content']; ?>"><?= $memdetresult['box3_content']; ?></textarea>
                                    </div>

									
  
  									
  									
  									<div class="field fullwidth">
                                        <label for="text-input-normal">Box4 Title </label>
                                        <input type="text" id="box4_title" value="<?= $memdetresult['box4_title']; ?>" />
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Box4 Description </label>
                                       <textarea class="editor" id="box4_content" name="box4_content" value="<?= $memdetresult['box4_content']; ?>"><?= $memdetresult['box4_content']; ?></textarea>
                                    </div>

									
  <div id="finder_browse"></div>
									 
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
