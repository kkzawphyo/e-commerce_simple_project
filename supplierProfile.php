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
<link href="bootstrap1/css/bootstrap.customerShop.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="bootstrap1/css/style.customerShop.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS -->
<link href="bootstrap1/css/font-awesome.customerShop.css" rel="stylesheet">
<!-- //font-awesome icons CSS -->

 <!-- side nav css file -->
 <link href='bootstrap1/css/SidebarNav.min.customerShop.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->

<link href="bootstrap1/css/custom.customerShop.css" rel="stylesheet">
<link href="bootstrap1/css/forSupplierProfile.css" rel="stylesheet">
<script src="bootstrap1/js/jquery.js"></script>
<style type="text/css">
	.ProfilePicture
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
</style>
<style>
      .picture-container
      {
          position: relative;
          cursor: pointer;
          text-align: center;
      }
      .picture
      {
          width: 40%;
          height: 45%;
          background-color: white;
          border: 3px solid white;
          color: #FFFFFF;
          border-radius: 10%;
          margin: 0px auto;
          overflow: hidden;
          transition: all 0.2s;
          -webkit-transition: all 0.2s;
      }
      .picture1
      {
          width: 40%;
          height: 45%;
          background-color: white;
          border: 3px solid white;
          color: #FFFFFF;
          border-radius: 10%;
          margin: 0px auto;
          overflow: hidden;
          transition: all 0.2s;
          -webkit-transition: all 0.2s;
      }
      .picture:hover
      {
          border-color: #cccccc;
      }
      .picture1:hover
      {
          border-color: #cccccc;
      }
      .content.ct-wizard-green .picture:hover
      {
          border-color: #05ae0e;
      }
      .content.ct-wizard-blue .picture:hover
      {
          border-color: #3472f7;
      }
      .content.ct-wizard-orange .picture:hover
      {
          border-color: #ff9500;
      }
      .content.ct-wizard-red .picture:hover
      {
          border-color: #ff3b30;
      }
      .picture input[type="file"] 
      {
          cursor: pointer;
          display: block;
          height: 100%;
          left: 0;
          opacity: 0 !important;
          position: absolute;
          top: 0;
          width: 100%;
      }
      .picture1 input[type="file"] 
      {
          cursor: pointer;
          display: block;
          height: 100%;
          left: 0;
          opacity: 0 !important;
          position: absolute;
          top: 0;
          width: 100%;
      }
      .picture-src
      {
          width: 100%;    
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
            	<div class="ProfilePicture">
                    	<img src="hakImages/profile.png" class="picture-src" style="height:106px;width:106px">  
             	</div>
             	<br>
          </div>
          <?php  $id=$_GET['id']; ?>
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
                <i class="fa fa-cubes" aria-hidden="true"></i>
                <span>Second Hands</span>
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
          <?php 
              include("config.php");
              $error="";
              $error1="";
              $showAlert="";
              $currentPassword="";
              $name="";
              $password="";
              $newPassword="";
              $confirmPassword="";
              $email="";
              $phone_no="";
              $year="";
              $major="";
              $roll_no="";
              $address="";
              $frontPhoto="";
              $backPhoto="";
                                                  if(isset($_POST['save']))
                                                  {
                                                      $name = mysqli_real_escape_string($db,$_POST['userName']);
                                                      $currentPassword=mysqli_real_escape_string($db,$_POST['currentPassword']);
                                                      $newPassword=mysqli_real_escape_string($db,$_POST['newPassword']);
                                                      $confirmPassword=mysqli_real_escape_string($db,$_POST['confirmPassword']);
                                                      $email=mysqli_real_escape_string($db,$_POST['email']);
                                                      $phone_no=mysqli_real_escape_string($db,$_POST['phoneNumber']);
                                                      $address=mysqli_real_escape_string($db,$_POST['address']);

                                                      $sql = "SELECT password FROM register where id=".$id;
                                                      $result = mysqli_query($db,$sql);
                                                      if (mysqli_num_rows($result) > 0) {
                                                          while($row = mysqli_fetch_assoc($result)) {
                                                                $password=$row['password'];
                                                          }
                                                      }

                                                      if ($currentPassword!=$password) {
                                                          
                                                          $error1="Password is wrong.";
                                                      }
                                                      elseif ($newPassword!=$confirmPassword) {
                                                          $error="Password do not match.";
                                                      }
                                                      else
                                                      {
                                                            $sql = "UPDATE register SET name='".$name."',password='".$newPassword."',email='".$email."',phone_no='".$phone_no."',address='".$address."',pendingStatus='True' WHERE id=".$id;
                                                            mysqli_query($db,$sql);
                                                            $showAlert="<div class=\"alert alert-success\" role=\"alert\">Well done! You successfully read this important alert message. </div>";
                                                      }                                                      
                                                  }
              $sql = "SELECT name,password,email,phone_no,year,major,roll_no,address,frontPhoto,backPhoto FROM register where id=".$id;
              $result = mysqli_query($db,$sql);
              if (mysqli_num_rows($result) > 0) {
                  // output data of each row
                  while($row = mysqli_fetch_assoc($result)) {
                        $name=$row['name'];
                        $password=$row['password'];
                        $email=$row['email'];
                        $phone_no=$row['phone_no'];
                        $year=$row['year'];
                        $major=$row['major'];
                        $roll_no=$row['roll_no'];
                        $address=$row['address'];
                        $frontPhoto=$row['frontPhoto'];
                        $backPhoto=$row['backPhoto'];
                  }
              } else {
                  echo "There is no data.";
              }
          ?>

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<center>
					<img src="hakImages/profile.png" class="picture-src" style="height:106px;width:106px;border-radius: 10%"> 	
				</center>
				<div class="forms">          
          <div class="row"> 
            <div class="form-three widget-shadow">
              <div><?php echo $showAlert; ?></div>
          <h2 class="title1">Personal Information</h2>
              <div class=" panel-body-inputin">
                <form id="supplier1" class="form-horizontal" action = "supplierProfile.php?id=<?php echo $id; ?>" method = "post">
                  <div class="form-group">
                    <label class="col-md-2 control-label">Current Password</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-key" aria-hidden="true"></i>
                        </span>
                        <input type="password" name="currentPassword" class="form-control1" placeholder="Current Password" required="">
                      </div>
                    </div>
                    <div class="col-md-2" style="color:red" id="passMiss"><?php echo $error1; ?></div>
                  </div>                  
                  <div class="form-group">
                    <label class="col-md-2 control-label">New Password</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-key" aria-hidden="true"></i>
                        </span>
                        <input type="password" name="newPassword" class="form-control1" placeholder="New Password" required="">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">Confrim Password</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-key" aria-hidden="true"></i>
                        </span>
                        <input type="password" name="confirmPassword" class="form-control1" placeholder="New Password" required="">
                      </div>
                    </div>
                    <div class="col-md-2" style="color:red" id="passMiss"><?php echo $error; ?></div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">Name</label>
                    <div class="col-md-8">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                        <input type="text" class="form-control1" name="userName" placeholder="Name" required="" value=<?php echo $name ?>>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">Email Address</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <i class="fa fa-envelope-o"></i>
                        </span>
                        <input type="email" name="email" class="form-control1" placeholder="Email Address" required="" value=<?php echo $email ?>>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">Phone Number</label>
                    <div class="col-md-8">
                      <div class="input-group">             
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-phone-alt"></span>
                        </span>
                        <input type="text" name="phoneNumber" class="form-control1" placeholder="PhoneNumber" required="" value=<?php echo $phone_no ?>>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                        <label class="col-md-2 control-label">Address</label>
                            <div class="col-md-8">
                                <textarea class="form-control" name="address" id="userAddress" rows="2" placeholder="Address" required=""><?php echo $address; ?></textarea>
                            </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label"></label>
                                   <div class="col-md-3">
                                    <select id="country" class="form-control" disabled="">
                                          <option value="">Year</option>
                                          <option <?php if ($year=="First Year") echo "selected"; ?> value="First Year">First Year</option>
                                          <option <?php if ($year=="Second Year") echo "selected"; ?> value="Second Year">Second Year</option>
                                          <option <?php if ($year=="Third Year") echo "selected"; ?> value="Third Year">Third Year</option>
                                          <option <?php if ($year=="Fourth Year") echo "selected"; ?> value="Fourth Year">Fourth Year</option>
                                          <option <?php if ($year=="Final Year") echo "selected"; ?> value="Final Year">Final Year</option>                        
                                    </select>
                                  </div>               
                                  <div class="col-md-3">
                                    <select id="country" class="form-control" disabled="">
                                          <option value="">Major</option>
                                          <option <?php if($major=='ICT') echo "selected"; ?> value="ICT">ICT</option>
                                          <option <?php if($major=='ECE') echo "selected"; ?> value="ECE">ECE</option>
                                          <option <?php if($major=='PRE') echo "selected"; ?> value="PRE">PRE</option>
                                          <option <?php if($major=='AME') echo "selected"; ?> value="AME">AME</option>
                                          <option <?php if($major=='IST') echo "selected"; ?> value="IST">IST</option>                                 
                                          <option <?php if($major=='CE') echo "selected"; ?> value="CE">CE</option>
                                    </select>
                             </div> 
                             <div class="col-md-2">
                                   <input type="text" id="userName" class="form-control" placeholder="Roll-no" required="" value=<?php echo $roll_no ?> disabled="">
                             </div>
                 </div><br>
                 <div class="form-group">
                        <label class="col-md-1 control-label"></label>
                              <div class="col-md-4">                                                           
                                      <div class="picture-container">
                                                <div class="picture">
                                                        <img src=<?php echo $frontPhoto; ?> class="picture-src" id="wizardPicturePreview" title="">
                                                        <input type="file" id="wizard-picture" class="" accept=".png, .jpg, .jpeg" disabled="">
                                                </div>
                                                <label class="control-label">Change front view of student card</label>
                                      </div>
                              </div>
                              <div class="col-md-4">
                                      <div class="picture-container">
                                                <div class="picture1">
                                                        <img src=<?php echo $backPhoto; ?> class="picture-src" id="wizardPicturePreview1" title="">
                                                        <input type="file" id="wizard-picture1" class="" accept=".png, .jpg, .jpeg" disabled="">
                                                </div>
                                                <label class="control-label">Change back view of student card</label>
                                      </div>
                              </div>
                  </div><br>
                  <br>             
                  <div class="form-group">
                    <label class="col-md-9 control-label"></label>
                    <div class="col-md-1">
                            <button type="submit" name="save" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> save</button>
                    </div>
                  </div>
                </form>
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
   <script src="bootstrap1/js/bootstrap.customerShop.js"> </script>
   <script>
          $(document).ready(function()
          {
                $("#wizard-picture").change(function()
                {
                    readURL(this);
                });
          });
          function readURL(input) 
          {
                if (input.files && input.files[0]) 
                {
                      var reader = new FileReader();
                      reader.onload = function (e) 
                       {
                              $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
                        }
                        reader.readAsDataURL(input.files[0]);
                }
          }
          function readURL1(input) 
          {
                if (input.files && input.files[0]) 
                {
                      var reader = new FileReader();
                      reader.onload = function (e) 
                       {
                              $('#wizardPicturePreview1').attr('src',e.target.result).fadeIn('slow');
                        }
                        reader.readAsDataURL(input.files[0]);
                }
          }
          $(document).ready(function()
          {
                $("#wizard-picture1").change(function()
                {
                    readURL1(this);
                });
          });
    </script>
   
</body>
</html>