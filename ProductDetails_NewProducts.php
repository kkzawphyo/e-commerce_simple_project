<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php session_start(); ?>
<!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="customerDesign/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="customerDesign/css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="customerDesign/js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="customerDesign/js/move-top.js"></script>
<script type="text/javascript" src="customerDesign/js/easing.js"></script>
<script type="text/javascript" src="customerDesign/js/startstop-slider.js"></script>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Day 002 - Product Card</title>
  <link rel="stylesheet" href="customerDesign/style.css">
<title>Free Home Shoppe Website Template | Delivery :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="customerDesign/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="customerDesign/js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="customerDesign/js/move-top.js"></script>
<script type="text/javascript" src="customerDesign/js/easing.js"></script>
<script type="text/javascript" src="customerDesign/js/jquery.accordion.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#posts").accordion({ 
			header: "div.tab", 
			alwaysOpen: false,
			autoheight: false
		});
	});
</script>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electronic Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Custom Theme files -->
<link href="customerDesign/css1/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="customerDesign/css1/style.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="customerDesign/css1/fasthover.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="customerDesign/css1/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="customerDesign/js1/jquery.min.js"></script> 
<!-- //js -->  
<!-- web fonts --> 
<link href='//fonts.googleapis.com/css?family=Glegoo:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //web fonts --> 
<!-- for bootstrap working -->
<script type="text/javascript" src="customerDesign/js1/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- start-smooth-scrolling -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- //end-smooth-scrolling --> 
</head> 
<body>

	
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="account_desc">
				<?php 
						if(!empty($_SESSION['id'])){
							$id=$_SESSION['id'];
							$username = $_SESSION['username'];
						echo "<li><a href=\"supplierProfile.php?id=$id\">$username</a></li>";
						echo "<li><a href=\"userLogout.php\">Logout</a></li>";
						}
						else{
							echo "<li><a href=\"Register.php\">Register</a></li>
									<li><a href=\"userLogin.php\">Login</a></li>";
						}

					?>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="index.php"><img src="images/YccTradingCenter.png" alt="" /></a>
			</div>
			  <div class="cart">
			  	  <p><span>Sell</span> and <span>Rent</span> your products today.
			  </div>
			 
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li><a href="index.php">Home</a></li>
			    	<li class="active"><a href="New Products.php">New Products</a></li>
			    	<li><a href="SecondHand Products.php">Second-Hand Products</a></li>
			    	<li><a href="Rent Service.php">Rent Service</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	
	     	<div class="clear"></div>
	     </div>	     	
   </div>
    </div>

 </div>
 </div>
 <div class="wrap">
  <div class="product" >
  <div class="header">
    <center>Product Details</center>
  </div><!-- header modal -->
	<!-- //breadcrumbs -->  
	<!-- single -->
	<div class="single">
		<div class="container">
			<div class="col-md-4 single-left">
				<div class="flexslider">
					<ul class="slides">

						<?php
							$pid=$_GET['pid'];
							
							require_once("dbstuff.inc");
							$cnx = mysqli_connect($host,$user,$password,$dbname);
							$query = "SELECT * FROM product WHERE pendingStatus='True' and productId=$pid";
							$result = mysqli_query($cnx,$query);
							$row = mysqli_fetch_assoc($result);
							extract($row);

						?>
						<li data-thumb="<?php echo $photo; ?>">
							<div class="thumb-image"> <img src="<?php echo $photo; ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
						</li>
						<li data-thumb="<?php echo $photo1; ?>">
							 <div class="thumb-image"> <img src="<?php echo $photo1; ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
						</li>
						<li data-thumb="<?php echo $photo2; ?>">
						   <div class="thumb-image"> <img src="<?php echo $photo2; ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
						</li> 
					</ul>
				</div>
				<!-- flexslider -->
					<script defer src="customerDesign/js1/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="customerDesign/css1/flexslider.css" type="text/css" media="screen" />
					<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
				<!-- flexslider -->
				<!-- zooming-effect -->
					<script src="customerDesign/js1/imagezoom.js"></script>
				<!-- //zooming-effect -->
			</div>
		<div class="col-md-8 single-right">
		<?php 
    require_once("dbstuff.inc");

     $cid=$_GET['cid'];
     $pid=$_GET['pid'];
    $cnx = mysqli_connect($host,$user,$password,$dbname) or die("Couldn't connect to server");
    $query = "SELECT * FROM product WHERE pendingStatus='True' and productId=$pid";
      $result = mysqli_query($cnx,$query) or die("Query not successful!");
                 
      $row=mysqli_fetch_assoc($result);
      extract($row);
      $query1= "SELECT TYPE_Name FROM product_type WHERE TYPE_ID=$typeId";
      $result1= mysqli_query($cnx,$query1) or die("Query not successful!");
      $row1=mysqli_fetch_assoc($result1);
      extract($row1);

      $query2= "SELECT phone_no FROM register WHERE id=$cId";
      $result2= mysqli_query($cnx,$query2) or die("Query not successful!");
      $row2=mysqli_fetch_assoc($result2);
      extract($row2);
     $Color=null;
      if(!@$color==null)
      {
              $Color="Color_";
      }
    $Model=null;
      if(!@$model==null)
      {
              $Model="Model_";
      }
    $Size=null;
      if(!@$size==null)
      {
              $Size="size_";
      }
    $Brand=null;
      if(!@$brand==null)
      {
              $Brand="Brand_";
      } 
    $Type=null;
      if(!@$type==null)
      {
              $Type="Type_";
      }
  echo" 

<p class='position'>$description</p>
    <br>
      <p style='color:red;'>In stock. 
     </p>
     <br>
      <p>
        <span class='fa fa-star yellow'></span>
        <span class='fa fa-star yellow'></span>
        <span class='fa fa-star yellow'></span>
        <span class='fa fa-star yellow'></span>
        <span class='fa fa-star'></span>
      </p><br>
       <br>
      OverView
  </div>
  <table>
      <tr><td>Price</td>   <td><b><span class='fa fa-angle-left angle'></span><span id='qt'>  $productPrice </span><span class='fa fa-angle-right angle'></span></b></td></tr><br>
   <tr><td>Avaliable Quantity</td> <td><b><span class='fa fa-angle-left angle'></span><span id='qt'> $availableQty  </span><span class='fa fa-angle-right angle'></span></b></td></tr>
      <br>
<tr><td>Product Type:</td><td>$TYPE_Name</td></tr>
<br>
<tr><td>Phone_no:</td><td>$phone_no</td></tr><br>
<tr><td>$Color </td><td>$color</td></tr>
<br>
<tr><td>$Model </td><td>$model</td></tr>
<br>
<tr><td>$Size</td><td> $size</td></tr>
<br>
<tr><td>$Brand</td><td> $brand</td></tr>
<br>
<tr><td>$Type</td><td>$type</td></tr>
</table>
<br>
<br>
<br>
<br>
<br>
 <a href='viewSupplier.php?cid=$cid'><button  class='button'><span class='fa fa-hand-pointer-o'></span>Go to Supplier</button></a>
     </div>
       
  </div>";
?>
				
	</div> <!-- //cart-js --> 
</body>
</html>