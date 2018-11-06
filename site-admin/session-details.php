<?php include "conn.php"; 
if ($_REQUEST['id'])
	{
	$memdetsql = mysql_query("select * from session where sessionid=".$_REQUEST['id']);
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
		    		$.post("session-update.php?update=1", {id:$('#id').val(), session_topic:$('#session_topic').val(),track:$('select#track').val(),session_date:$('select#session_date').val(),start_time:$('#starttime').val(),end_time:$('#endtime').val(),location:$('select#location').val(),session_desc:$('#session_desc').val()},
								function(data) 
								{
								$('#updatebox').trigger('click');
								}
							);
		    			
	    		}
	    	function insertrecord()
	    		{  
		    		$.post("session-update.php?update=2", {session_topic:$('#session_topic').val(),track:$('select#track').val(),session_date:$('select#session_date').val(),start_time:$('#starttime').val(),end_time:$('#endtime').val(),location:$('select#location').val(),session_desc:$('#session_desc').val()},
								function(data) 
								{
								$('#insertbox').trigger('click'); 
								}
							);
		    			
	    		}
	    	function getdropval()
	    		{
		    		alert($('select#session_date').val());
	    		}
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
                                <h1>Edit Session Details</h1>
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
                            
                                <div class="box-content">
                                    <div class="field fullwidth">
                                    <input type="hidden" id="id" value="<?= $_REQUEST['id']; ?>" />
                                        <label for="text-input-normal">Session Topic</label>
                                        <input type="text" id="session_topic" value="<?= $memdetresult['session_topic']; ?>" />
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="select">Select Track</label>
                                        <select id="track">
                                        	<option selected><?= $memdetresult['track']; ?></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                        <input type="hidden" id="" />
                                    </div>
                                     <div class="field fullwidth">
                                        <label for="select">Select Date</label>
                                        <select id="session_date">
                                        <option selected><?= $memdetresult['session_date']; ?></option>
                                            <option value="Aug 1">Aug 1</option>
                                            <option value="Aug 2">Aug 2</option>
                                            <option value="Aug 3">Aug 3</option>
                                            <option value="Aug 4">Aug 4</option>
                                        </select>
                                        <input type="hidden" id="" />
                                    </div>
                                    
                                    <div class="field">
                                            <label for="datetimepicker">Start DateTime </label>
                                            <input type="text" class="datetimepicker" id="starttime" data-icon="clock" value="<?= $memdetresult['start_time']; ?>" />
                                        </div>
                                        
                                        <div class="field">
                                            <label for="datetimepicker">End DateTime </label>
                                            <input type="text" class="datetimepicker" id="endtime" data-icon="clock" value="<?= $memdetresult['end_time']; ?>"  />
                                        </div>
                                        
                                        
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Location</label>
                                        <select id="location">
                                            <?php $locationsql= mysql_query("select id,locationname from location where id=".$memdetresult['location'] );
                                            $locationresult = mysql_fetch_array($locationsql);
                                             ?>
                                             <option selected value="<?= $locationresult['id'] ?>"><?= $locationresult['locationname']; ?></option>
                                             <?php $locationsql1= mysql_query("select * from location");
                                            while ($locationresult1 = mysql_fetch_array($locationsql1))
                                            	{
	                                        		echo '<option value="'.$locationresult1['id'].'">'.$locationresult1['locationname'].'</option>';         	
                                            	}
                                             ?>
                                            
                                        </select>
                                     </div>
                                 </div>
                            </div>

                            <div class="grid_6">
                                <div class="box">
                                    <header>
                                        <div class="inner">
                                            <div class="left title">
                                                <h1></h1>
                                            </div>
                                            <div class="right">
                                                <a href="#" class="close">close</a>
                                            </div>
                                        </div>
                                    </header>
                                
                                    <div class="box-content">
                                        
                                        <label>Session Description </label>
                                        <div class="box-content no-inner-space">
                                        <textarea class="editor" id="session_desc"><?= $memdetresult['session_desc']; ?></textarea>
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
