
<!------ Include the above in your HEAD tag ---------->
<html>
<!--
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
-->
<head>
 <link rel="stylesheet" type="text/css" href="customerDesign/1.css">
          <script src="customerDesign/1.js" type="text/javascript"></script>

<style type="text/css">
	.panel-order {
	/* used to change default values without adding additional class */
}
.panel-order .row {
	border-bottom: 1px solid #ccc;
}
.panel-order .row:last-child {
	border: 0px;
}
.panel-order .row .col-md-1  {
	text-align: center;
	padding-top: 15px;
}
.panel-order .row .col-md-1 img {
	width: 50px;
	max-height: 50px;
}
.panel-order .row .row {
	border-bottom: 0;
}
.panel-order .row .col-md-11 {
	border-left: 1px solid #ccc;
}
.panel-order .row .row .col-md-12 {
	padding-top: 7px;
	padding-bottom: 7px; 
}
.panel-order .row .row .col-md-12:last-child {
	font-size: 11px; 
	color: #555;  
	background: #efefef;
}
.panel-order .btn-group {
	margin: 0px;
	padding: 0px;
}
.panel-order .panel-body {
	padding-top: 0px;
	padding-bottom: 0px;
}
.panel-order .panel-deading {
	margin-bottom: 0;
}
</style>
 <link rel="stylesheet" href="customerDesign/style1.css">
</head>
<body>
    <div class="row-profile">
    	<?php 
    	          $cid=$_GET['cid'];
		require_once("dbstuff.inc");
		
		$cnx = mysqli_connect($host,$user,$password,$dbname) or die("Couldn't connect to server");
		$query = "SELECT * FROM register WHERE id=$cid";
    	$result = mysqli_query($cnx,$query) or die("Query not successful!");
    	
    	$row=mysqli_fetch_assoc($result);
  	

    		extract($row);
		echo"<div class='col-md-3'>
			<div class='profile-sidebar'>
				<div>
				<a href=\"index.php\"><u><h5 style=\"text-align: center;color:#b8c7ce\">Back to Home</h5></u></a>
				</div>
				<div class='profile-userpic'>
					<img src='customerDesign/Images/profile.png' class='img-responsive' alt=''>
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class='profile-usertitle'>
					<div class='profile-usertitle-name'>
						$name
					</div>
					<div class='profile-usertitle-job'>
						Retailer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class='profile-usermenu'>
					<ul class='nav'>
						<li class='active'>
							
	
							   OverView
						</li><br>
						<li class='active'>
							<i class='glyphicon glyphicon-home'></i>
							$address
						</li>
						<br>
						<li class='active'>
							
							<i class='glyphicon glyphicon-envelope'></i>
							$email
						</li><br>
						
						<li class='active'>
							
							<i class='	glyphicon glyphicon-earphone'></i>
					$phone_no
						</li>
					
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>";
		?>
		<div class="col-md-9" style="overflow-y: scroll;">
            <div class="panel panel-default panel-order">
  <div class="panel-body">
  	<?php 
		include("dbstuff.inc");
		$cnx = mysqli_connect($host,$user,$password,$dbname) or die("Couldn't connect to server");
		
		$query = "SELECT * FROM product WHERE pendingStatus='True'";
    	$result = mysqli_query($cnx,$query) or die("Query not successful!");
    	
  	
    	while($row=mysqli_fetch_assoc($result)){

    		extract($row);
        		$formatPrice = number_format($productPrice,0);		
  		  echo "<div class='row'>
			  <div class='col-md-1'><img src='$photo' class='media-object'></div>
			  <div class='col-md-11'>
				<div class='row'>
				  <div class='col-md-12'>
					<span><strong>$productName</strong></span> <span class='label label-info'>group name</span><br>
					Quantity : $availableQty, cost: $formatPrice <a href='ProductDetails_Home.php?pid=$productId&cid=$cId'><small>See product detail</small></a>
				  </div>
				  <div class='col-md-12'>
					order made on: $productDate
				  </div>
				</div>
			  </div> 
			</div>";
		}
			?>
</div>
<script src="customerDesign/js/jquery.nicescroll.js"></script>
<script src="customerDesign/js/scripts.js"></script>
</body>
</html>