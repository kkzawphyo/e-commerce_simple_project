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
					<h2 class="title1">Notifications</h2>
					<div class="bs-example5 widget-shadow" data-example-id="default-media">
						<div class="panel panel-default panel-order">
  <div class="panel-body">
  		<div class="row">
			  <div class="col-md-12">
				<div class="row">
				  <div class="col-md-12">
					<span><strong>Responding your product request</strong></span><br><br>
					Quantity : 2, cost: $323.13, <a href="#" data-toggle="modal" data-target="#orderModal"><small>View detail</small></a>
				  </div>
				  <div class="col-md-12">
					sending on: 05/31/2014
				  </div>
				</div>
			  </div>
			</div>
    <div class="row">
	  <div class="col-md-12">
		<div class="row">
		  <div class="col-md-12">
			<span><strong>Request to change your student card</strong></span><br><br>
			Quantity : 12, cost: $12623.13, <a href="#" data-toggle="modal" data-target="#orderModal"><small>View detail</small></a>
		  </div>
		  <div class="col-md-12">
			sending on: 06/12/2014
		  </div>
		</div>
	  </div>
	</div>
<div class="row">
	  <div class="col-md-12">
		<div class="row">
		  <div class="col-md-12">
			<span><strong>Responding your product request</strong></span><br><br>
			Quantity : 11, cost: $1623.13, <a href="#" data-toggle="modal" data-target="#orderModal"><small>View detail</small></a>
		  </div>
		  <div class="col-md-12">
			sending on: 06/15/2014
		  </div>
		</div>
	  </div>
	</div>
    <div class="row">
		  <div class="col-md-12">
			<div class="row">
			  <div class="col-md-12">
				<span><strong>Responding your product request</strong></span><br><br>
				Quantity : 4, cost: $523.13, <a href="#" data-toggle="modal" data-target="#orderModal"><small>View detail</small></a>
			  </div>
			  <div class="col-md-12">
				sending on: 06/20/2014
			  </div>
			</div>
		  </div>
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
