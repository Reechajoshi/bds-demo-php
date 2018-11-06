<?php include "conn.php"; 
if ($_REQUEST['id'])
	{
	$memdetsql = mysql_query("select * from member where id=".$_REQUEST['id']);
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
		<script type='text/javascript'>


$(document).ready(function() {
$('#select-button99').click(function(){
	alert('sdfsd');
    var f = $('<div></div>').elfinder({
        url : 'php/connector.php',
        height: 490,
        docked: false,
        dialog: { width: 400, modal: true },
        closeOnEditorCallback: true,
        editorCallback: function(url) {
            $('#fileurl').val(url);
        }
  });
}); 
});

</script>
	   <script>
	    	function updaterecord()
	    		{  
		    		$.post("member-update.php?update=1", {id:$('#id').val(), fullname:$('#fullname').val(),email:$('#email').val(),company:$('#company').val(),designation:$('#designation').val(),address:$('#address').val(),phone:$('#phone').val(),zip:$('#zip').val(),city:$('#city').val(),country:$('#country').val(),profile:$('#profile').val(),memrole:$('#memrole').val(),url1:$('#url1').val(), url2:$('#url2').val() },
								function(data) 
								{
								$('#updatebox').trigger('click');
								}
							);
		    			
	    		}
	    	function insertrecord()
	    		{  
		    		$.post("member-update.php?update=2", {id:$('#id').val(), fullname:$('#fullname').val(),email:$('#email').val(),company:$('#company').val(),designation:$('#designation').val(),address:$('#address').val(),phone:$('#phone').val(),zip:$('#zip').val(),city:$('#city').val(),country:$('#country').val(),profile:$('#profile').val(),memrole:$('#memrole').val(), url1:$('#url1').val(), profilepic:$('#url2').val() },
								function(data) 
								{
								$('#insertbox').trigger('click');
								}
							);
		    			
	    		}
	    		function testsel() {
	    			alert($('#memrole').val());
	    		}
	    </script>
		
 <style type='text/css'>
    .button {
  width: 100px;
  position:relative;
  display: -moz-inline-stack;
  display: inline-block;
  vertical-align: top;
  zoom: 1;
  *display: inline;
  margin:0 3px 3px 0;
  padding:1px 0;
  text-align:center;
  border:1px solid #ccc;
  background-color:#eee;
  margin:.1em;
  padding:.3em .7em;
  border-radius:5px; 
  -moz-border-radius:5px; 
  -webkit-border-radius:5px;
  cursor:pointer;
}
input { line-height: 30px; width: 400px; }
  </style>
  
<script type="text/javascript" charset="utf-8">

$().ready(function() {
    
    $('#profilepic').click(function() {                        
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

		  $('#companylogo').click(function() {                        
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
                                <h1>Edit Member Details</h1>
                                <span class="divider"></span>
                            </header>

                            <div class="box grid_6">
                                <header>
                                    <div class="inner">
                                        <div class="left title">
                                            <h1>Member Details</h1>
                                        </div>
                                        <div class="right">
                                            <a href="#" class="close">close</a>
                                        </div>
                                    </div>
                                </header>
                            
                                <div class="box-content">
                                    <div class="field fullwidth">
                                    <input type="hidden" id="id" value="<?= $_REQUEST['id']; ?>" />
                                        <label for="text-input-normal">Fullname</label>
                                        <input type="text" id="fullname" value="<?= $memdetresult['fullname']; ?>" />
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Email </label>
                                        <input type="text" id="email" value="<?= $memdetresult['email']; ?>" />
                                    </div>

                                    
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Company</label>
                                        <input type="text" id="company" value="<?= $memdetresult['company']; ?>" />
                                    </div>
                                     <div class="field fullwidth">
                                        <label for="text-input-normal">Designation</label>
                                        <input type="text" id="designation" value="<?= $memdetresult['designation']; ?>" />
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Address</label>
                                        <input type="text" id="address" value="<?= $memdetresult['address']; ?>" />
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Phone</label>
                                        <input type="text" id="phone" value="<?= $memdetresult['phone']; ?>" />
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Zip</label>
                                        <input type="text" id="zip" value="<?= $memdetresult['zip']; ?>" />
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">City</label>
                                        <input type="text" id="city" value="<?= $memdetresult['city']; ?>" />
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">State</label>
                                        <input type="text" id="state" value="<?= $memdetresult['state']; ?>" />
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Country</label>
                                        <input type="text" id="country" value="<?= $memdetresult['country']; ?>" />
                                    </div>

                                 </div>
                            </div>

                            <div class="grid_6">
                                <div class="box">
                                    <header>
                                        <div class="inner">
                                            <div class="left title">
                                                <h1>Upload / Description</h1>
                                            </div>
                                            <div class="right">
                                                <a href="#" class="close">close</a>
                                            </div>
                                        </div>
                                    </header>
                                <div id="finder_browse"></div>
                                    <div class="box-content">
                                        <div class="field">
                                            
                                            
                                           <label>Company Logo </label>
                                         <input type="text" id="url1" value='"<?= $memdetresult['companylogo']; ?>' />
												<input type="submit" id="companylogo" class="bt blue" value="Select Logo" />
                                        </div>
                                       
                                        
                                        <div class="field">
                                            <label>Profile Pic </label>
											<input type="text" id="url2" value='"<?= $memdetresult['profilepic']; ?>' />
												<input type="submit" id="profilepic" class="bt blue" value="Select Picture" />

											
												

                                             <!--<select name="profilepic" id="profilepic">
												<option value="">- Select Image -</option>
												<?php
												$dirPath = dir('../files/profile-picture/');
												while (($file = $dirPath->read()) !== false)
												{
												   echo "<option value=\"profile-picture/" . trim($file) . "\">" . $file . "</option>\n";
												}
												$dirPath->close();
												?>
												</select>-->
                                        </div>
                                        <label>Profile Description </label>
                                        <div class="box-content no-inner-space">
                                         <textarea class="editor" id="profile" name="profile" value="<?= $memdetresult['profile']; ?>"><?= $memdetresult['profile']; ?></textarea>
                                        	</div>
                                       <div class="field fullwidth">
                                            <label>Select Role: </label>
                                            <select class="chosen" id="memrole" multiple>
                                            <?php $roleqry = mysql_query("select distinct c.roleid, b.rolename from sessionrole c, role b where c.roleid=b.roleid and c.userid=".$_REQUEST['id']);
            while ($roleresult = mysql_fetch_array($roleqry) )
            	{
	            	echo '<option selected value="'.$roleresult['roleid'].'">'.$roleresult['rolename'].'</option>';
            	} ?>
                                                <option value="1">Advisory</option>
                                                 <option value="2">Speaker</option>
                                                <option value="5">Jury</option>
                                                <option value="6">Moderators</option>
                                                <option value="7">Panelist</option>
                                                <option value="8">Delegate</option>
                                                <option value="9">Exibitor</option>
                                                <option value="10">User</option>
                                                <option value="11">Member</option>
                                            </select>
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
