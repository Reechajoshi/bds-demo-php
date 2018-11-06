<?php include "conn.php"; ?>
<!DOCTYPE html>
<html>
    
    <head>
	    <?php include "js-css-include.php" ?>
    </head>
    <body>
        <!-- wrapper -->
        <div id="wrapper">
            <?php include('header.php'); ?>

            <section id="main">
                <div class="container_12">
                    
                        <div class="main-box">
                            
                            <!-- Media table -->
                            <div class="grid_12 boxed-table">
                                <div class="box">
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

                                    <div class="box-content no-inner-space">
                                        <table class="datatable ten-per-page">
                                            <thead>
                                                <tr>
                                                    
                                                    <th class="sorting_disabled small">Form No</th>
                                                    <th>Order ID</th>
													<th>Payment status</th>
                                                    <th class="sorting_disabled small">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            	<?php 
                                        
                                            	$membersql = mysql_query("select a.id as awardsid,b.paymentamnt,b.paymentmode,b.paymentstatus,b.orderid,b.datedetails from awards_details a,payment_status b where a.id=b.frmid");
                                            	while ($memberresult = mysql_fetch_array($membersql))
                                            		{
	                                            		echo '<tr>
                                                    
                                                    <td class="center">'.$memberresult['awardsid'].'</td>
                                                    <td>'.$memberresult['orderid'].'</td>';
													if($memberresult['frid']==0)
													{
													$paystatus="Pending";
													}
													else
													{
													$paystatus="Paid";
													}
                                                     echo '<td>'.$paystatus.'</td>';
                                                    
          
                                                    echo '
                                                    <td class="center">
                                                        <a href="payment-details.php?id='.$memberresult['awardsid'].'" class="tooltip glyph portrait-view" title="View /Edit"></a>
                                                        <a href="#" class="tooltip glyph close" title="Delete"></a>
                                                    </td>
                                                </tr>';
                                            		}
                                            	?>
                                                
                                                                                            </tbody>
                                        </table>

                                        <footer class="pane">
                                            <select>
                                                <option>Bulk action</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                                <option>Option 4</option>
                                            </select>
                                        </footer>
                                    </div>
                                </div>
                            </div>
                            <!-- /Media table -->

                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /wrapper -->

        <?php include('footer.php'); ?>
    </body>
</html>
