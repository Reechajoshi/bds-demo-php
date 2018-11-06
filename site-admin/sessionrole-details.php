<?php include "conn.php"; 
if ($_REQUEST['id'])
	{
	$memdetsql = mysql_query("SELECT a.sessionid, b.roleid, c.id, a.session_topic, b.rolename, c.fullname FROM sessionrole d, session a, role b, member c where d.userid=".$_REQUEST['id']." and d.roleid=".$_REQUEST['roleid']." and d.sessionid=". $_REQUEST['sessionid']);
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
		    		$.post("sessionrole-update.php?update=1", {roleidd:$('select#roleidd').val(), sessionid:$('select#sessionid').val(),userid:$('select#userid').val(),oldroleid:<?= $_REQUEST['roleid'] ?> , oldsessionid: <?= $_REQUEST['sessionid'] ?>, olduserid: <?= $_REQUEST['id'] ?>},
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
		    		$.post("sessionrole-update.php?update=2", {roleidd:$('select#roleidd').val(), sessionid:$('select#sessionid').val(),userid:$('select#userid').val()},
								function(data) 
								{
								$('#insertbox').trigger('click'); 
								}
							);
		    			
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
                                <h1>Edit Role Details</h1>
                                <span class="divider"></span>
                            </header>

                            <div class="box grid_6">
                                <header>
                                    <div class="inner">
                                        <div class="left title">
                                            <h1>Role Details</h1>
                                        </div>
                                        <div class="right">
                                            <a href="#" class="close">close</a>
                                        </div>
                                    </div>
                                </header>
                            
                                <div class="box-content">
                                    <div class="field fullwidth">
                                    
                                    <div class="field fullwidth">
                                        <label for="select">Select Session</label>
                                        <select id="sessionid">
                                        <!--<option selected value="<?= $_REQUEST['sessionid']; ?>"><?= $memdetresult['session_topic']; ?></option>-->
                                        	<?php 
	                                        	$sessionsql = mysql_query("select sessionid, session_topic from session");
	                                        	while($sessionresult = mysql_fetch_array($sessionsql))
	                                        		{?>
		                                        		<option value="<?=$sessionresult['sessionid']; ?>" <?php if($_REQUEST['sessionid']==$sessionresult['sessionid']){echo 'selected';}?>><?=$sessionresult['session_topic']; ?></option>
	                                        		<?php
													}
                                        	?>
                                        </select>
                                        <input type="hidden" id="" />
                                    
                                    <div class="field fullwidth">
                                        <label for="select">Select Member</label>
                                        <select id="userid">
                                        <!--<option selected value="<?= $_REQUEST['id']; ?>"><?= $memdetresult['fullname']; ?></option>-->
                                        <?php 
	                                        	$memsql = mysql_query("select id, fullname from member");
	                                        	while($memresult = mysql_fetch_array($memsql))
	                                        		{?>
		                                        		<option value="<?=$memresult['id']; ?>" <?php if($_REQUEST['id']==$memresult['id']){echo 'selected';}?>><?=$memresult['fullname']; ?></option>
	                                        		<?php
													}
                                        	?>
                                        </select>
                                        <input type="hidden" id="" />
                                    </div>
                                    
                                    
                                    <div class="field fullwidth">
                                        <label for="select">Select Role</label>
                                        <select id="roleidd">
                                        <!--<option selected value="<?= $_REQUEST['roleid']; ?>"><?= $memdetresult['rolename']; ?></option>--> <?php 
	                                        	$rolesql = mysql_query("select roleid, rolename from role");
	                                        	while($roleresult = mysql_fetch_array($rolesql))
	                                        		{?>
		                                        		<option value="<?=$roleresult['roleid'];?>" <?php if($_REQUEST['roleid']==$roleresult['roleid']){echo 'selected';}?>><?=$roleresult['rolename']?></option>
	                                        		<?}
                                        	?>
                                        	</select>
                                    </div>

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
