<!DOCTYPE html>
<html>
<head>
	<title>ReviewTeamControlPanel</title>
	     <link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.css">
          <link rel="stylesheet" href="bootstrap1/css/styles.css">                  
        	<script src="bootstrap1/js/jquery.js" type="text/javascript"></script>   
        	<script src="bootstrap1/js/bootstrap.js" type="text/javascript"></script>               	
        	<style>   
          body{
            background: #f1f1f1;
            position: all;
          }   
		#newgoods{
			margin-top: 1%;
			margin-left: 2%;
		}
		#logout{
			margin-top: 1%;
			margin-left: 43%;
		}
          .container-fluid{
            background: #f1f1f1;
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
  width: 80px;
  height: 50px;
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
<style type="text/css">
  /* ----STICKY HEADER----*/
.sticky-header{
    position: fixed;
    top: 0;
    left:0px;
    width: 100%;
    z-index: 100;
}
.header-section {
    background:#FFF;
    box-shadow:  1px 1px 4px rgba(0, 0, 0, 0.21);
    -webkit-box-shadow:  1px 1px 4px rgba(0, 0, 0, 0.21);
    -moz-box-shadow:  1px 1px 4px rgba(0, 0, 0, 0.21);
    -o-box-shadow:  1px 1px 4px rgba(0, 0, 0, 0.21);
}
.header-section::after {
    clear: both;
    display: block;
    content: '';
}
</style>
</head>
<body>
	<!-- header-starts -->
    <div class="sticky-header header-section ">
      <div class="header-left">
        
        <!--toggle button start
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
            toggle button end-->
            <h1 style="font-family:Algerian;margin-left:2%;margin-top:1%">YCC Trading Center</h1>
        
      </div> 
    </div>
<div class="container-fluid">	<br><br><br><br><br>
  <div class="row">
    <div class="col"></div>
    <div class="col-11">
	<div id='cssmenu'>
          <ul>
                <li><a href='ReviewTeamControlPanel.php'><span>New Goods</span></a></li>
                <li><a href='ReviewTeamPanelSecondHand.php'><span>Second Hand</span></a></li>
                <li><a href='ReviewTeamPanelRent.php'><span>Rent</span></a></li>
                <li><a href='ReviewTeamPanelMessages.php'><span>Requested Message</span></a></li>
                <li><a href='ReviewTeamPanelRegistrationRequest.php'><span>Registration Requests</span></a></li>
                <li><a href='ReviewTeamLogin.php'><span>Logout</span></a></li>
          </ul>
    </div>
  </div>
  <div class="col"></div>
</div><br>
   <div class="row">
    <div class="col"></div>
    <div class="col-11">
      <div class="panel panel-default panel-order">
          <link rel="stylesheet" type="text/css" href="bootstrap1/css/1.css">
          <script src="bootstrap1/js/jquery.js" type="text/javascript"></script>   
          <script src="bootstrap1/js/1.js" type="text/javascript"></script>
  <div class="panel-body">
    <?php
       include("config.php");
          $showAlert="";
          if(!empty($_GET['pId']) && !empty($_GET['cancel']))
                                                  {
                                                      $id=$_GET['pId'];
                                                      $sql = "DELETE FROM product WHERE productId=".$id;
                                                      mysqli_query($db, $sql);
                                                      $showAlert="<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">That message has been canceled.<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>;";
                                                  }

                                                  if(!empty($_GET['pId']) && !empty($_GET['confirm']))
                                                  {
                                                      $id=$_GET['pId'];
                                                      $sql = "UPDATE product SET pendingStatus='True' WHERE productId=".$id;
                                                      mysqli_query($db, $sql);
                                                      $showAlert="<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">That message has been approved.<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>;";
                                                  }
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
          $sql = "SELECT productId,productName,productPrice,description,availableQty,color,model,brand,size,type,photo,photo1,photo2,productDate FROM product where pendingStatus='False' and typeId=2";
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
                              if($availableQty!="")
                              {
                                $availableQty="Available Quantity: ".$availableQty."<br><br>";
                              }
                              if($color!="")
                              {
                                $color="Color: ".$color."<br><br>";
                              }
                              if($model!="")
                              {
                                $model="Model: ".$model."<br><br>";
                              }
                              if($brand!="")
                              {
                                $brand="Brand: ".$brand."<br><br>";
                              }
                              if($size!="")
                              {
                                $size="Size: ".$size."<br><br>";
                              }
                              if($type!="")
                              {
                                $type="Type: ".$type."<br><br>";
                              }
                              echo "<div class=\"row\">
        <div class=\"col-md-12\">
        <div class=\"row\">
          <div class=\"col-md-12\">
          <div class=\"pull-right\"><a href=\"ReviewTeamControlPanel.php?pId=".$productId."&cancel=yes\"><button class=\"btn btn-danger btn-xs\">cancel</button></a><br><a href=\"ReviewTeamControlPanel.php?pId=".$productId."&confirm=yes\"><button class=\"btn btn-primary btn-xs\" style=\"margin-top:7px;\">approve</button></a></div><span><strong>Product name: ".$productName."</strong></span><br><br><span><strong>Price: ".$productPrice."</strong></span><br><br>
          Product description: ".$description."<br><br>
          ".$availableQty."
          ".$color."
          ".$model."
          ".$brand."
          ".$size."
          ".$type."
          </div>
          <div class=\"col-md-3\"><span><img src=\"".$photo."\" width=100% height=100% style=\"border-radius:20px\"></span></div>
          <div class=\"col-md-3\"><span><img src=\"".$photo1."\" width=100% height=100% style=\"border-radius:20px\"></span></div>
          <div class=\"col-md-3\"><span><img src=\"".$photo2."\" width=100% height=100% style=\"border-radius:20px\"></span></div>
          <div class=\"col-md-12\">
          order made on: ".$productDate."
          </div>
        </div>
        </div>
      </div>";
                              }
                            }
                            else{
                              echo "There is no requests.";
                            }
    ?>
      
  </div>
</div>
<div id="cancelLabel"><?php echo $showAlert; ?></div>
  </div>
  <div class="col"></div>
</div>
<hr>

<!--scrolling js-->
                <script src="bootstrap1/js/jquery.nicescroll.js"></script>
                <script src="bootstrap1/js/scripts.js"></script>
          <!--//scrolling js-->
</body>
</html>