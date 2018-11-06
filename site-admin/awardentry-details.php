<?php include "conn.php"; 
if ($_REQUEST['id'])
	{
	$memdetsql = mysql_query("select * from awards_details where id=".$_REQUEST['id']);
	$memdetresult = mysql_fetch_array($memdetsql);

	}

	
?> 
<!DOCTYPE html>
<html>
    
    <head>
	    <?php include('js-css-include.php'); ?>
	    <script>
	    	function updaterecord()
	    		{  
		    		$.post("member-update.php?update=1", {id:$('#id').val(), fullname:$('#fullname').val(),email:$('#email').val(),company:$('#company').val(),designation:$('#designation').val(),address:$('#address').val(),phone:$('#phone').val(),zip:$('#zip').val(),city:$('#city').val(),country:$('#country').val(),profile:$('#profile').val(), },
								function(data) 
								{
								alert("done");
								//$("#userscore").html(data);
								}
							);
		    			
	    		}
	    	function insertrecord()
	    		{  
		    		$.post("member-update.php?update=2", {id:$('#id').val(), fullname:$('#fullname').val(),email:$('#email').val(),company:$('#company').val(),designation:$('#designation').val(),address:$('#address').val(),phone:$('#phone').val(),zip:$('#zip').val(),city:$('#city').val(),country:$('#country').val(),profile:$('#profile').val(), },
								function(data) 
								{
								alert("done");
								//$("#userscore").html(data);
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
                                <h1>View Awards Entry Details</h1>
                                <span class="divider"></span>
                            </header>

                            <div class="box grid_6">
                                <header>
                                    <div class="inner">
                                        <div class="left title">
                                            <h1>Award Details</h1>
                                        </div>
                                        <div class="right">
                                            <a href="#" class="close">close</a>
                                        </div>
                                    </div>
                                </header>
                            
                                <div class="box-content">
                                    <div class="field fullwidth">
									<label for="text-input-normal">Form No</label>
                                    <input type="text" id="id" value="<?= $_REQUEST['id']; ?>"  readonly/>
                                        <label for="text-input-normal">Category</label>
                                        <input type="text" id="fullname" value="<?= $memdetresult['category']; ?>" readonly/>
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Subcategory </label>
                                        <input type="text" id="email" value="<?= $memdetresult['subcategory']; ?>" readonly/>
                                    </div>

                                    
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Client</label>
                                        <input type="text" id="company" value="<?= $memdetresult['client']; ?>" readonly/>
                                    </div>
                                     <div class="field fullwidth">
                                        <label for="text-input-normal">Entry Title</label>
                                        <input type="text" id="designation" value="<?= $memdetresult['entry_title']; ?>" readonly/>
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Campaign Country</label>
                                        <input type="text" id="address" value="<?= $memdetresult['campaign_country']; ?>" readonly/>
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Start Date</label>
                                        <input type="text" id="phone" value="<?= $memdetresult['startdate']; ?>" readonly/>
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">End Date</label>
                                        <input type="text" id="zip" value="<?= $memdetresult['enddate']; ?>" readonly/>
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Website URL</label>
                                        <input type="text" id="city" value="<?= $memdetresult['website_url']; ?>" readonly/>
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Company Logo</label>
                                        <input type="text" id="state" value="<?= $memdetresult['company_logo']; ?>" readonly/>
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Strategy Market Place Challenge</label>
                                        <textarea readonly="" value="<?= $memdetresult['strategy_marketplace_challenge']; ?>" rows="" cols="" id="mrktchallenge" name="mrktchallenge"><?= $memdetresult['strategy_marketplace_challenge']; ?> </textarea>
                                    </div>
									 <div class="field fullwidth">
                                        <label for="text-input-normal">Target Audience</label>
                                        <input type="text" id="country" value="<?= $memdetresult['strategy_target_audience']; ?>" readonly/>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Define Target Audience</label>
                                     
									<textarea readonly="" value="<?= $memdetresult['strategy_audience_limit']; ?>" rows="" cols="" id="audience" name="mrktchallenge"><?= $memdetresult['strategy_audience_limit']; ?> </textarea>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Strategy Size Audience</label>
                                        <input type="text" id="country" value="<?= $memdetresult['strategy_size_audience']; ?>" readonly/>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Strategy Marketing</label>
                                       
										<textarea readonly="" value="<?= $memdetresult['strategy_marketing']; ?>" rows="" cols="" id="mrktchallenge" name="mrktchallenge"><?= $memdetresult['strategy_marketing']; ?> </textarea>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Strategy Marketing Tactics</label>
                                       
									<textarea readonly="" value="<?= $memdetresult['strategy_marketing_tactics']; ?>" rows="" cols="" id="mrktchallenge" name="mrktchallenge"><?= $memdetresult['strategy_marketing_tactics']; ?> </textarea>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Creative Strategy</label>
                                        
											<textarea readonly="" value="<?= $memdetresult['creative_strategy']; ?>" rows="" cols="" id="mrktchallenge" name="mrktchallenge"><?= $memdetresult['creative_strategy']; ?> </textarea>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Creative Communication Channel</label>
                                        <input type="text" id="country" value="<?= $memdetresult['creative_commn_channel']; ?>" readonly/>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Results</label>
                                      
										<textarea readonly="" value="<?= $memdetresult['results']; ?>" rows="" cols="" id="mrktchallenge" name="mrktchallenge"><?= $memdetresult['results']; ?> </textarea>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Results Rollout</label>
                                        <input type="text" id="country" value="<?= $memdetresult['results_rollout']; ?>" readonly/>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Credits Name1</label>
                                        <input type="text" id="country" value="<?= $memdetresult['credits_name1']; ?>" readonly/>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Credits Jobtitle1</label>
                                        <input type="text" id="country" value="<?= $memdetresult['credits_jobtitle1']; ?>" readonly/>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Credits Name2</label>
                                        <input type="text" id="country" value="<?= $memdetresult['credits_name2']; ?>" readonly/>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Credits Jobtitle2</label>
                                        <input type="text" id="country" value="<?= $memdetresult['credits_jobtitle2']; ?>" readonly/>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Credits Name3</label>
                                        <input type="text" id="country" value="<?= $memdetresult['credits_name3']; ?>" readonly/>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Credits Jobtitle3</label>
                                        <input type="text" id="country" value="<?= $memdetresult['credits_jobtitle3']; ?>" readonly/>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Credits Name4</label>
                                        <input type="text" id="country" value="<?= $memdetresult['credits_name4']; ?>" readonly/>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Credits Jobtitle4</label>
                                        <input type="text" id="country" value="<?= $memdetresult['credits_jobtitle4']; ?>" readonly/>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Credits Name5</label>
                                        <input type="text" id="country" value="<?= $memdetresult['credits_name5']; ?>" readonly/>
                                    </div>
									<div class="field fullwidth">
                                        <label for="text-input-normal">Credits Jobtitle5</label>
                                        <input type="text" id="country" value="<?= $memdetresult['credits_jobtitle5']; ?>" readonly/>
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
                                
                                    <div class="box-content">
									
                                        <div class="field list">
                                                    <label>Creative communication channels: </label>
                                                    <ul>
													
	<?php
	$channels = array("alternative-insert-media", "catalog", "direct-mail", "email", "mobile", "print", "search-engine-marketing", "tv", "radio", "video", "telemarketing", "web-advertising", "web-development", "social-media", "other");
		$dbchannels= explode(',',$memdetresult['creative_commn_channel']);

		foreach ($channels as $cha) {
 
     if(in_array($cha,$dbchannels)) {
	 $cha=str_replace("-"," ",$cha);
	 $cha=ucwords($cha);
	 echo $cha;
	 echo '<li><input name="channel[]" type="checkbox" value="$cha" CHECKED disabled/> <label for="ck1">'. $cha .'</label></li>';
	 }
	 }
	 ?>
                                                                                                           </ul>
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
