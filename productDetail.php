<?php  $id=$_GET['id']; ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<script src="bootstrap1/js/jquery.min.js"></script> 
<link href="bootstrap1/css/styleForProductDetail.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="bootstrap1/css/fasthover.css" rel="stylesheet" type="text/css" media="all" />
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
                        <a href="supplierProfile.php">
                          <i class="fa fa-suitcase"></i> <span>Profile</span>
                        </a>
                    </li>
            <li class="treeview">
                        <a href="newGoodsViewSupplier.php">
                          <i class="fa fa-cubes" aria-hidden="true"></i> <span>New Goods</span>
                        </a>
                    </li>     
                    <li class="treeview">
                        <a href="secondHandsViewSupplier.php">
                          <i class="fa fa-cubes" aria-hidden="true"></i> <span>Second Hands</span>
                        </a>
                    </li> 
                    <li class="treeview">
                        <a href="rentViewSupplier.php">
                          <i class="fa fa-cubes" aria-hidden="true"></i> <span>Rent</span>
                        </a>
                    </li> 
                    <li class="treeview">
                        <a href="NotificationViewSupplier.php">
                          <i class="fa fa-bell" aria-hidden="true"></i><span>Notifications</span>
                          <span class="label label-primary pull-right">new</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
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
          <h2 class="title1">Product Detail</h2>
        </div>
        <?php 
         include("config.php");
        $productId="";
        $productName="";
        $productPrice="";
        $description="";
        $availableQty="";
        $color="";
        $model="";
        $brand="";
        $size="";
        $type="";
        $photo="";
        $photo1="";
        $photo2="";
        $productDate="";
                 if(!empty($_GET['pId']))
                  {
                    $productId=$_GET['pId'];
                    $sql = "SELECT productId,productName,productPrice,description,availableQty,color,model,brand,size,type,photo,photo1,photo2,productDate FROM product where productId=".$productId;
                    $result = mysqli_query($db,$sql);
                     if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                               $productId=$row['productId'];
                              $productName=$row['productName'];
                              $productPrice=$row['productPrice'];
                              $description=$row['description'];
                              $availableQty=$row['availableQty'];
                              $color=$row['color'];
                              $model=$row['model'];
                              $brand=$row['brand'];
                              $size=$row['size'];
                              $type=$row['type'];
                              $photo=$row['photo'];
                              $photo1=$row['photo1'];
                              $photo2=$row['photo2'];
                              $productDate=$row['productDate'];
                              if ($availableQty!="") {
                                $availableQty="<div class=\"simpleCart_shelfItem\"><p>Available Quantity: ".$availableQty."</p><div class=\"clearfix\"></div></div>";
                              }
                              if ($color!="") {
                                $color="<div class=\"simpleCart_shelfItem\"><p>Color: ".$color."</p><div class=\"clearfix\"></div></div>";
                              }
                              if ($model!="") {
                                $model="<div class=\"simpleCart_shelfItem\"><p>model: ".$model."</p><div class=\"clearfix\"></div></div>";
                              }
                              if ($brand!="") {
                                $brand="<div class=\"simpleCart_shelfItem\"><p>Brand: ".$brand."</p><div class=\"clearfix\"></div></div>";
                              }
                              if ($size!="") {
                                $size="<div class=\"simpleCart_shelfItem\"><p>Size: ".$size."</p><div class=\"clearfix\"></div></div>";
                              }
                              if ($type!="") {
                                $type="<div class=\"simpleCart_shelfItem\"><p>Type: ".$type."</p><div class=\"clearfix\"></div></div>";
                              }
                              echo "<div style=\"background-color:white;box-shadow: 1px 1px 3px 1px #888888;\">
              <div class=\"single\">
    <div class=\"container\">
      <div class=\"col-md-4 single-left\">
        <div class=\"flexslider\">
          <ul class=\"slides\">
            <li data-thumb=\"".$photo."\">
              <div class=\"thumb-image\"> <img src=\"".$photo."\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"> </div>
            </li>
            <li data-thumb=\"".$photo1."\">
               <div class=\"thumb-image\"> <img src=\"".$photo1."\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"> </div>
            </li>
            <li data-thumb=\"".$photo2."\">
               <div class=\"thumb-image\"> <img src=\"".$photo2."\" data-imagezoom=\"true\" class=\"img-responsive\" alt=\"\"> </div>
            </li>
          </ul>
        </div>
        <!-- flexslider -->
          <script defer src=\"bootstrap1/js/jquery.flexslider.js\"></script>
          <link rel=\"stylesheet\" href=\"bootstrap1/css/flexslider.css\" type=\"text/css\" media=\"screen\" />
          <script>
          // Can also be used with $(document).ready()
          $(window).load(function() {
            $('.flexslider').flexslider({
            animation: \"slide\",
            controlNav: \"thumbnails\"
            });
          });
          </script>
          <script src=\"bootstrap1/js/imagezoom.js\"></script>
      </div>
      <div class=\"col-md-8 single-right\">
        <h3>".$productName."</h3>
        <div class=\"description\">          
          <h5>Description</h5>
          <p>".$description."</p>          
        </div>
        <div class=\"simpleCart_shelfItem\"><p>Price: $".$productPrice."</p><div class=\"clearfix\"></div></div>
        ".$availableQty."
        ".$color."
        ".$model."
        ".$brand."
        ".$size."
        ".$type."
        <div class=\"simpleCart_shelfItem\"> 
            <a href=\"newGoodsViewSupplier.php?id=".$id."\"><button type=\"submit\" class=\"w3ls-cart\">Back</button></a>
        </div> 
      </div>
      <div class=\"clearfix\"> </div>
    </div>
  </div>
            </div>";
                            }
                        }
                        else{
                          echo "Something wrong";
                        }
                  }
         ?>

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