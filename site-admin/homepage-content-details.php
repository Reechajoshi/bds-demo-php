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
	  			
		<script type="text/javascript" charset="utf-8">
function updaterecord()
	    		{  
		    		$.post("homepage-content-update.php", { holder1_title:$('#holder1_title').val(),url1:$('#url1').val(),holder1_url:$('#holder1_url').val(), holder1_content:$('#holder1_content').val(), holder2_title:$('#holder2_title').val(), url2:$('#url2').val(), holder2_url:$('#holder2_url').val(), holder2_content:$('#holder2_content').val(), holder3_title:$('#holder3_title').val(),  url3:$('#url3').val(), holder3_url:$('#holder3_url').val(), holder3_content:$('#holder3_content').val(), holder4_title:$('#holder4_title').val(), url4:$('#url4').val(), holder4_url:$('#holder4_url').val(), holder4_content:$('#holder4_content').val(), url5:$('#url5').val(), box2_title:$('#box2_title').val(), box2_content:$('#box2_content').val(), box4_title:$('#box4_title').val(), box4_content:$('#box4_content').val(), notice1:$('#notice1').val(), big1:$('#big1').val(), big2:$('#big2').val(), big3:$('#big3').val(), big4:$('#big4').val() },
		    		
								function(data) 
								{
								$('#updatebox').trigger('click');
								}
							);
		    			
	    		}

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

$('#holder1_bigimg').click(function() {                        
    $('#finder_browse').dialogelfinder({      
    url : 'php/connector.php',
    lang : 'en',
    getFileCallback: function(url) {$('#big1').val(url);},
    commandsOptions: {
        getfile: {
          oncomplete: 'destroy' 
        }
      },
    })                
    })
    
    $('#holder2_bigimg').click(function() {                        
    $('#finder_browse').dialogelfinder({      
    url : 'php/connector.php',
    lang : 'en',
    getFileCallback: function(url) {$('#big2').val(url);},
    commandsOptions: {
        getfile: {
          oncomplete: 'destroy' 
        }
      },
    })                
    })
    
    
    $('#holder3_bigimg').click(function() {                        
    $('#finder_browse').dialogelfinder({      
    url : 'php/connector.php',
    lang : 'en',
    getFileCallback: function(url) {$('#big3').val(url);},
    commandsOptions: {
        getfile: {
          oncomplete: 'destroy' 
        }
      },
    })                
    })
    
    $('#holder4_bigimg').click(function() {                        
    $('#finder_browse').dialogelfinder({      
    url : 'php/connector.php',
    lang : 'en',
    getFileCallback: function(url) {$('#big4').val(url);},
    commandsOptions: {
        getfile: {
          oncomplete: 'destroy' 
        }
      },
    })                
    })

$('#logo_image').click(function() {                        
    $('#finder_browse').dialogelfinder({      
    url : 'php/connector.php',
    lang : 'en',
    getFileCallback: function(url) {$('#url5').val(url);},
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
            <?php include "header.php"; ?>
            <section id="main">
                <div class="container_12">
                    <div id="content">
                    <!-- The modal -->
                        <div class="main-box">
                            <!-- # Form -->
                            <header class="grid_12 head">
                                <h1>Edit Homepage Details</h1>
                                <span class="divider"></span>
                            </header>

                            <div class="box grid_12">
                                <header>
                                    <div class="inner">
                                        <div class="left title">
                                            <h1>Homepage Details</h1>
                                        </div>
                                        <div class="right">
                                            <a href="#" class="close">close</a>
                                        </div>
                                    </div>
                                </header>
                            
                                <div class="box-content">

				<div class="field fullwidth">
                                <label for="text-input-normal">Description </label>
                                <textarea class="editor" id="notice1" name="notice1" value="<?= $memdetresult['notice1']; ?>"><?= $memdetresult['notice1']; ?></textarea>
                                </div>
                                    
                                    
				<div class="field fullwidth">
                                <label for="text-input-normal">Holder1 Title</label>
                                <input type="text" id="holder1_title" value="<?= $memdetresult['holder1_title']; ?>" />
                               </div>

                               <div class="field">
                                <label>Holder1 Image</label>
                               <input type="text" id="url1" value="<?= $memdetresult['holder1_image']; ?>" />
				<input type="submit" id="holder1_image" class="bt blue" value="Select Image" />
                                </div>

				 <div class="field">
                                <label>Holder1 Big Image</label>
                               <input type="text" id="big1" value="<?= $memdetresult['holder1_bigimg']; ?>" />
				<input type="submit" id="holder1_bigimg" class="bt blue" value="Select Image" />
                                </div>

                                 <div class="field fullwidth">
                                    <label for="text-input-normal">Holder1 URL</label>
                                 <input type="text" id="holder1_url" value="<?= $memdetresult['holder1_url']; ?>" />
                               </div>
                                    
				<div class="field fullwidth">
                                        <label for="text-input-normal">Holder 1 Content </label>
                                       <textarea class="editor" id="holder1_content" name="holder1_content" value="<?= $memdetresult['holder1_content']; ?>"><?= $memdetresult['holder1_content']; ?></textarea>
                                    </div>

                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Holder2 Title</label>
                                        <input type="text" id="holder2_title" value="<?= $memdetresult['holder2_title']; ?>" />
                                    </div>


                                    <div class="field">
                                           <label>Holder2 Image</label>
                                         <input type="text" id="url2" value="<?= $memdetresult['holder2_image']; ?>" />
				<input type="submit" id="holder2_image" class="bt blue" value="Select Image" />
                                        </div>


				 <div class="field">
                                           <label>Holder2 Big Image</label>
                                         <input type="text" id="big2" value="<?= $memdetresult['holder2_bigimg']; ?>" />
				<input type="submit" id="holder2_bigimg" class="bt blue" value="Select Image" />
                                        </div>

                                        <div class="field fullwidth">
                                        <label for="text-input-normal">Holder2 URL</label>
                                        <input type="text" id="holder2_url" value="<?= $memdetresult['holder2_url']; ?>" />
                                    </div>

					<div class="field fullwidth">
                                        <label for="text-input-normal">Holder 2 Content </label>
                                       <textarea class="editor" id="holder2_content" name="holder2_content" value="<?= $memdetresult['holder2_content']; ?>"><?= $memdetresult['holder2_content']; ?></textarea>
                                    </div>

                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Holder3 Title</label>
                                        <input type="text" id="holder3_title" value="<?= $memdetresult['holder3_title']; ?>" />
                                    </div>

                                    <div class="field">
                                           <label>Holder3 Image</label>
                                         <input type="text" id="url3" value="<?= $memdetresult['holder3_image']; ?>" />
				<input type="submit" id="holder3_image" class="bt blue" value="Select Image" />
                                        </div>

				 <div class="field">
                                           <label>Holder3 Big Image</label>
                                         <input type="text" id="big3" value="<?= $memdetresult['holder3_bigimg']; ?>" />
				<input type="submit" id="holder3_bigimg" class="bt blue" value="Select Image" />
                                        </div>

                                        <div class="field fullwidth">
                                        <label for="text-input-normal">Holder3 URL</label>
                                        <input type="text" id="holder3_url" value="<?= $memdetresult['holder3_url']; ?>" />
                                    </div>

				<div class="field fullwidth">
                                        <label for="text-input-normal">Holder 3 Content </label>
                                       <textarea class="editor" id="holder3_content" name="holder3_content" value="<?= $memdetresult['holder3_content']; ?>"><?= $memdetresult['holder3_content']; ?></textarea>
                                    </div>

                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Holder4 Title</label>
                                        <input type="text" id="holder4_title" value="<?= $memdetresult['holder4_title']; ?>" />
                                    </div>

                                    <div class="field">
                                            <label>Holder4 Image</label>
                                         <input type="text" id="url4" value="<?= $memdetresult['holder4_image']; ?>" />
				<input type="submit" id="holder4_image" class="bt blue" value="Select Image" />
                                        </div>
				
					 <div class="field">
                                            <label>Holder4 Big Image</label>
                                         <input type="text" id="big4" value="<?= $memdetresult['holder4_bigimg']; ?>" />
				<input type="submit" id="holder4_bigimg" class="bt blue" value="Select Image" />
                                        </div>

                                        
                                        <div class="field fullwidth">
                                        <label for="text-input-normal">Holder4 URL</label>
                                        <input type="text" id="holder4_url" value="<?= $memdetresult['holder4_url']; ?>" />
                                    </div>
                                        
					<div class="field fullwidth">
                                        <label for="text-input-normal">Holder 4 Content </label>
                                       <textarea class="editor" id="holder4_content" name="holder4_content" value="<?= $memdetresult['holder4_content']; ?>"><?= $memdetresult['holder4_content']; ?></textarea>
                                    </div>

                                    <div class="field">
                                            <label>Logo Image</label>
                                         <input type="text" id="url5" value="<?= $memdetresult['logo_image']; ?>" />
				<input type="submit" id="logo_image" class="bt blue" value="Select Logo" />
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
                                        <label for="text-input-normal">Contact us </label>
                                        <input type="text" id="box4_title" value="<?= $memdetresult['box4_title']; ?>" />
                                    </div>

					<div class="field fullwidth">
                                        <label for="text-input-normal">Box4 Description </label>
                                       <textarea class="editor" id="box4_content" name="box4_content" value="<?= $memdetresult['box4_content']; ?>"><?php echo $memdetresult['box4_content']; ?></textarea>
                                    </div>

                                   
  				<div id="finder_browse"></div>
									 
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
