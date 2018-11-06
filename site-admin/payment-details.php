<?php include "conn.php"; 
if ($_REQUEST['id'])
	{
	$memdetsql = mysql_query("select a.id as awardsid,b.paymentamnt,b.paymentmode,b.paymentstatus,b.orderid,b.datedetails from awards_details a,payment_status b where a.id=b.frmid and a.id=".$_REQUEST['id']);
	$memdetresult = mysql_fetch_array($memdetsql);
	$func = "updaterecord()";
	$btn = "Update";
	}

	
?> 
<!DOCTYPE html>
<html>
    
    <head>
	    <?php include('js-css-include.php'); ?>
	    <script>
	    	function updaterecord()
	    		{  
		    		$.post("paystatus-update.php?update=1", {id:$('#id').val(), paystatus:$('#paystatus').val(), },
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
                                <h1>View Payment Details</h1>
                                <span class="divider"></span>
                            </header>

                            <div class="box grid_6">
                                <header>
                                    <div class="inner">
                                        <div class="left title">
                                            <h1>Payment Details</h1>
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
                                        <label for="text-input-normal">Payment Amount</label>
                                        <input type="text" id="fullname" value="<?= $memdetresult['paymentamnt']; ?>" readonly/>
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Payment Mode </label>
                                        <input type="text" id="email" value="<?= $memdetresult['paymentmode']; ?>" readonly/>
                                    </div>

                                    
                                    <div class="field fullwidth">
                                        <label for="text-input-normal">Order ID</label>
                                        <input type="text" id="company" value="<?= $memdetresult['orderid']; ?>" readonly/>
                                    </div>
                                     <div class="field fullwidth">
                                        <label for="text-input-normal">Date Details</label>
                                        <input type="text" id="designation" value="<?= $memdetresult['datedetails']; ?>" readonly/>
                                    </div>
                                    <div class="field fullwidth">
                                        <label for="select">Payment Status: </label>
                                        <select id="paystatus" name="paystatus">
										<?php 
										if ($memdetresult['paymentstatus']==0)
										{
										$vstatus="Pending";?>
										<option value="0" selected><?php echo $vstatus;?></option>
										<option value="1">Paid</option>
										<?}
										else
										{
										$vstatus="Paid";
										?>
											<option value="1" selected><?php echo $vstatus;?></option>
										<option value="0">Pending</option>
										<?php
										
										}
										?>
                                            
                                        </select>
                                    </div>
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
