<title>Mamkuy - Easy Food Reservation</title>

<link rel="icon" type="image/png" href="images/logo2.png">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<?php
    session_start();
    $namauser = $_SESSION['user_system_name'];
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Invoice</h2><h3 class="pull-right">MamKuy</h3>
    		</div>
    		<hr>
    		<div class="row">
				<div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					Direct Payment
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    				<strong>Billed To:</strong><br>
    					<?php echo $namauser;?><br>
    				</address>
    			</div>
    		</div>
    		<div class="row">
			<div class="col-xs-6">
    			<address>
   				</address>
    			</div>
				<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
						<?php echo date("r")?><br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Item</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
								<?php								
								include_once "db.php";
								$total=0;

								//get username
								$sql = "SELECT * from user where name='$namauser'";
								$result = $mysqli->query($sql);
								$user = $result->fetch_object();

								$sql1 = "SELECT * from cart where username='$user->username'";
								$result1 = $mysqli->query($sql1);
								if ($result->num_rows) {
									while($post = $result1->fetch_object()){
										$total += $post->harga_produk;
										echo "
										<tr>
											<td>$post->nama_produk</td>
											<td class=\"text-center\">Rp.$post->harga_produk</td>
											<td class=\"text-center\">1</td>
											<td class=\"text-right\">Rp.$post->harga_produk</td>	
										</tr>";
									}
								}
								?>
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right"><?php echo 'Rp.',$total;?></td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Tax</strong></td>
    								<td class="no-line text-right"><?php echo 'Rp.',$total/10?></td>
    							</tr>
    							<tr>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-center"><strong>Total</strong></td>
							<td class="no-line text-right"><?php echo 'Rp.',$total+($total/10);?></td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>