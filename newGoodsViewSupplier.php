<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php  $id=$_GET['id']; ?>
<!DOCTYPE HTML>
<html>
<head>
<title>My Account</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<!-- Bootstrap Core CSS -->
<link href="bootstrap1/css/1.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="bootstrap1/css/productList.css">
<!-- Custom CSS -->
<link href="bootstrap1/css/style.customerShop.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="bootstrap1/css/font-awesome.customerShop.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='bootstrap1/css/SidebarNav.min.customerShop.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->

<link href="bootstrap1/css/custom.customerShop.css" rel="stylesheet">
<script src="bootstrap1/js/jquery.js"></script>
<style type="text/css">
	.picture
      {
          width: 106px;
          height: 106px;
          background-color: white;
          border: 3px solid #b8c7ce;
          color: #FFFFFF;
          border-radius: 50%;
          margin: 0px auto;
          overflow: hidden;
          transition: all 0.2s;
          -webkit-transition: all 0.2s;
      }
      .nav-tabs {
  border-bottom: 1px solid #dee2e6;
}

.nav-tabs .nav-item {
  margin-bottom: -1px;
}

.nav-tabs .nav-link {
  border: 1px solid transparent;
  border-top-left-radius: 0.25rem;
  border-top-right-radius: 0.25rem;
}

.nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
  border-color: #e9ecef #e9ecef #dee2e6;
}

.nav-tabs .nav-link.disabled {
  color: #6c757d;
  background-color: transparent;
  border-color: transparent;
}

.nav-tabs .nav-link.active,
.nav-tabs .nav-item.show .nav-link {
  color: #495057;
  background-color: #fff;
  border-color: #dee2e6 #dee2e6 #fff;
}

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.tab-content > .tab-pane {
  display: none;
}

.tab-content > .active {
  display: block;
}
.fade {
  opacity: 0;
  transition: opacity 0.15s linear;
}

.fade.show {
  opacity: 1;
}
</style>
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<!--left-fixed -navigation-->
			<aside class="sidebar-left">
      			<nav class="navbar navbar-inverse">
          		<div class="navbar-header">            
            			<br>
          			<a href="index.php"><u><h5 style="text-align: center;color:#b8c7ce">Back to Home</h5></u></a>
          			<br>
            			<div class="picture">
                    			<img src="hakImages/profile.png" class="picture-src" id="wizardPicturePreview" style="height:106px;width:106px">  
             			</div>
             			<br>
          		</div>
          	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            		<ul class="sidebar-menu">
              			<li class="header" style="background-color: black;color: black">I</li>
             			<li class="treeview">
                				<a href="supplierProfile.php?id=<?php echo $id; ?>">
                					<i class="fa fa-suitcase"></i> <span>Profile</span>
                				</a>
              			</li>
	     			<li class="treeview">
                				<a href="newGoodsViewSupplier.php?id=<?php echo $id; ?>">
                					<i class="fa fa-cubes" aria-hidden="true"></i> <span>New Goods</span>
                				</a>
              			</li>		  
              			<li class="treeview">
                				<a href="secondHandsViewSupplier.php?id=<?php echo $id; ?>">
                					<i class="fa fa-cubes" aria-hidden="true"></i> <span>Second Hands</span>
                				</a>
              			</li> 
              			<li class="treeview">
                				<a href="rentViewSupplier.php?id=<?php echo $id; ?>">
                					<i class="fa fa-cubes" aria-hidden="true"></i> <span>Rent</span>
                				</a>
              			</li> 
              			<li class="treeview">
                				<a href="NotificationViewSupplier.php?id=<?php echo $id; ?>">
                					<i class="fa fa-bell" aria-hidden="true"></i><span>Notifications</span>
                					<span class="label label-primary pull-right">new</span>
                				</a>
              			</li>
              			<li class="treeview">
                				<a href="userLogout.php">
                					<i class="fa fa-sign-out"></i><span>Logout</span>
                				</a>
              			</li>                                  
            		</ul>
          	</div>
          <!-- /.navbar-collapse -->
      </nav>
    </aside>
	</div>
		<!--left-fixed -navigation-->
		
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				
				<!--toggle button start
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				    toggle button end-->
				    <h1 style="font-family:Algerian;margin-left:2%;margin-top:1%">YCC Trading Center</h1><br>
				
			</div>
			<div class="header-right">					
				<div class="clearfix"> </div>				
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="media">
					<h2 class="title1">New Goods</h2>
				</div>
					<div class="bs-example5 widget-shadow" data-example-id="default-media">		<?php 
							if(isset($_GET['status']))
							{
								if($_GET['status']=="success")
								{
									echo "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
  Product adding is successful.
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>";							}
elseif ($_GET['status']=="fail") {
	echo "<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">
  Product adding is fail.
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>
</div>";
}
							}
					 	?>			
						<div class="row">
							<div class="col-md-10">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
  								<li class="nav-item">
    									<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Products</a>
  								</li>
  								<li class="nav-item">
    									<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Pending Products</a>
  								</li>
								</ul>
							</div>
							<div class="col-md-2">
								<a href="addNewProduct.php?id=<?php echo $id; ?>">
								<button type="button" class="btn btn-primary"><i class="fa fa-plus-circle" aria-hidden="true"></i>Add Product</button>
								</a>
							</div>	
						</div>
						<div class="tab-content" id="myTabContent">
  							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  								<div class="container">

  			<?php 
  				include("config.php");
  				$productId="";

  				$productName="";
  				$productPrice="";
  				$photo="";
  				$sql = "SELECT productId,productName,productPrice,description,photo FROM product where pendingStatus='True' and typeId=2 and cId=$id";
			              $result = mysqli_query($db,$sql);
			              if (mysqli_num_rows($result) > 0) {
			                  // output data of each row
			                  while($row = mysqli_fetch_assoc($result)) {
			                  	     $productId=$row['productId'];
			                        $productName=$row['productName'];
			                        $productPrice=$row['productPrice'];
			                        $photo=$row['photo'];
			                        echo "<div class=\"col-xs-12 col-md-5\">
<!-- First product box start here-->
	<div class=\"prod-info-main prod-wrap clearfix\">
		<div class=\"row\">
				<div class=\"col-md-5 col-sm-12 col-xs-12\">
					<div class=\"product-image\"> 
						<img src=\"".$photo."\" alt=\"194x228\" class=\"img-responsive\"> 
					</div>
				</div>
				<div class=\"col-md-7 col-sm-12 col-xs-12\">
				<div class=\"product-deatil\">
						<h3 class=\"name\">
							".$productName."
						</h3>
						<p class=\"price-container\">
							<span>$".$productPrice."</span>
						</p>
						<span class=\"tag1\"></span> 
				</div>
				<div class=\"product-info smart-form\">
					<div class=\"row\">
						<div class=\"col-md-12\">
						<br>
                            <a href=\"productDetail.php?pId=".$productId."&id=".$id."\" class=\"btn btn-info\">More info</a>
						</div>
						<div class=\"col-md-12\">
							<br>
							<a href=\"deleteProcess.php?pId=".$productId."&type=new\" class=\"btn btn-danger\">Delete Product</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->
</div>";
			                  }
			              } else {
			                  echo "There is no data.";
			              }
  			?>
</div>
  							</div>
  							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  								<div class="container">
  									<?php 
  				$productId="";
  				$productName="";
  				$productPrice="";
  				$photo="";
  				$sql = "SELECT productId,productName,productPrice,description,photo FROM product where pendingStatus='False' and typeId=2 and cId=$id";
			              $result = mysqli_query($db,$sql);
			              if (mysqli_num_rows($result) > 0) {
			                  // output data of each row
			                  while($row = mysqli_fetch_assoc($result)) {
			                  	     $productId=$row['productId'];
			                        $productName=$row['productName'];
			                        $productPrice=$row['productPrice'];
			                        $photo=$row['photo'];
			                        echo "<div class=\"col-xs-12 col-md-5\">
<!-- First product box start here-->
	<div class=\"prod-info-main prod-wrap clearfix\">
		<div class=\"row\">
				<div class=\"col-md-5 col-sm-12 col-xs-12\">
					<div class=\"product-image\"> 
						<img src=\"".$photo."\" alt=\"194x228\" class=\"img-responsive\"> 
					</div>
				</div>
				<div class=\"col-md-7 col-sm-12 col-xs-12\">
				<div class=\"product-deatil\">
						<h3 class=\"name\">
							".$productName."
						</h3>
						<p class=\"price-container\">
							<span>$".$productPrice."</span>
						</p>
						<span class=\"tag1\"></span> 
				</div>
				<div class=\"product-info smart-form\">
					<div class=\"row\">
						<div class=\"col-md-12\">
						<br>
                            <a href=\"productDetail.php?pId=".$productId."\" class=\"btn btn-info\">More info</a>
						</div>
						<div class=\"col-md-12\">
							<br>
							<a href=\"deleteProcess.php?pId=".$productId."&type=new\" class=\"btn btn-danger\">Delete Product</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end product -->
</div>";
			                  }
			              } else {
			                  echo "There is no data.";
			              }
  			?>
</div>
  							</div>
						</div>					
					</div>					 
				</div>
			</div>
		</div>
		<!--footer-->
		<div class="footer">
		   <p>2018 YCC Trading Center. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">htet aung khant</a></p>
	   </div>
        <!--//footer-->
	</div>	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="bootstrap1/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
	
	<!--scrolling js-->
	<script src="bootstrap1/js/jquery.nicescroll.js"></script>
	<script src="bootstrap1/js/scripts.js"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="bootstrap1/js/bootstrap.js"> </script>
   
</body>
</html>