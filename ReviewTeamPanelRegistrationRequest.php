<!DOCTYPE html>
<html>
<head>
  <title>ReviewTeamControlPanel</title>
       <link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.css">
          <link rel="stylesheet" href="bootstrap1/css/styles.css">                  
          <script src="bootstrap1/js/jquery.js" type="text/javascript"></script>   
          <script src="bootstrap1/js/bootstrap.js" type="text/javascript"></script>                 
          <style>   
              body
              {
                    background: #f1f1f1;
                    position: all;
              }   
              #newgoods
              {
                    margin-top: 1%;
                    margin-left: 2%;
              }
              #logout
              {
                    margin-top: 1%;
                    margin-left: 43%;
              }
              .container-fluid
              {
                    background: #f1f1f1;
              }
          </style>
          <style type="text/css">
              .panel-order 
              {
                  /* used to change default values without adding additional class */
              }
              .panel-order .row 
              {
                    border-bottom: 1px solid #ccc;
              }
              .panel-order .row:last-child 
              {
                    border: 0px;
              }
              .panel-order .row .col-md-1  
              {
                    text-align: center;
                    padding-top: 15px;
              }
              .panel-order .row .col-md-1 img 
              {
                    width: 80px;
                    height: 50px;
              }
              .panel-order .row .row 
              {
                    border-bottom: 0;
              }
              .panel-order .row .col-md-11 
              {
                    border-left: 1px solid #ccc;
              }
              .panel-order .row .row .col-md-12 
              {
                    padding-top: 7px;
                    padding-bottom: 7px; 
              }
              .panel-order .row .row .col-md-12:last-child 
              {
                    font-size: 11px; 
                    color: #555;  
                    background: #efefef;
              }
              .panel-order .btn-group 
              {
                    margin: 0px;
                    padding: 0px;
              }
              .panel-order .panel-body 
              {
                    padding-top: 0px;
                    padding-bottom: 0px;
              }
              .panel-order .panel-deading 
              {
                    margin-bottom: 0;
              }
          </style>
          <style type="text/css">
              .sticky-header
              {
                    position: fixed;
                    top: 0;
                    left:0px;
                    width: 100%;
                    z-index: 100;
              }
              .header-section 
              {
                    background:#FFF;
                    box-shadow:  1px 1px 4px rgba(0, 0, 0, 0.21);
                    -webkit-box-shadow:  1px 1px 4px rgba(0, 0, 0, 0.21);
                    -moz-box-shadow:  1px 1px 4px rgba(0, 0, 0, 0.21);
                    -o-box-shadow:  1px 1px 4px rgba(0, 0, 0, 0.21);
              }
              .header-section::after 
              {
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
<div class="container-fluid"> <br><br><br><br><br>
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
                      <?php 
                            include("config.php");
                           $showAlert="" ;
                           if(!empty($_GET['id']) && !empty($_GET['cancel']) && !empty($_GET['frontPhoto']) && !empty($_GET['backPhoto']))
                                                  {
                                                      $id=$_GET['id'];
                                                      $frontPhoto=$_GET['frontPhoto'];
                                                      $backPhoto=$_GET['backPhoto'];
                                                      $sql = "DELETE FROM register WHERE id=".$id;
                                                      mysqli_query($db, $sql);
                                                      $showAlert="<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">Registration has been canceled.<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>;";
                                                      unlink($frontPhoto);
                                                      unlink($backPhoto);
                                                  }

                                                  if(!empty($_GET['id']) && !empty($_GET['confirm']))
                                                  {
                                                      $id=$_GET['id'];
                                                      $sql = "UPDATE register SET pendingStatus='True' WHERE id=".$id;
                                                      mysqli_query($db, $sql);
                                                      $showAlert="<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">Registration has been confirmed.<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>;";
                                                  }
                      ?>
                        <div id="cancelLabel"><?php echo $showAlert; ?></div>
                        <div class="panel panel-default panel-order">
                                    <link rel="stylesheet" type="text/css" href="bootstrap1/css/1.css">
                                    <script src="bootstrap1/js/jquery.js" type="text/javascript"></script>   
                                    <script src="bootstrap1/js/1.js" type="text/javascript"></script>
                                <div class="panel-body">
                                    <?php 
                                                 
                                                  $id="";
                                                  $name="";
                                                  $email="";
                                                  $password="";
                                                  $phone_no="";
                                                  $year="";
                                                  $major="";
                                                  $roll_no="";
                                                  $frontPhoto="";
                                                  $backPhoto="";
                                                  $address="";
                                                  $date="";
                                                  $sql = "SELECT id,name,password,email,phone_no,year,major,roll_no,frontPhoto,backPhoto,address,date FROM register where pendingStatus='False'";
                                                  mysqli_set_charset($db,"utf8");
                                                  $result = mysqli_query($db,$sql);
                                                  if (mysqli_num_rows($result) > 0) {
                                                      while($row = mysqli_fetch_assoc($result)) {
                                                            $id=$row['id'];
                                                            $name=$row['name'];
                                                            $password=$row['password'];
                                                            $email=$row['email'];
                                                            $phone_no=$row['phone_no'];
                                                            $year=$row['year'];
                                                            $major=$row['major'];
                                                            $roll_no=$row['roll_no'];
                                                            $frontPhoto=$row['frontPhoto'];
                                                            $backPhoto=$row['backPhoto'];
                                                            $address=$row['address'];
                                                            $date=$row['date'];
                                                            echo "<div class=\"row\" style=\"background:#cce6ff\">
                                                                          <div class=\"col-md-12\">
                                                                                <div class=\"row\">
                                                                                        <div class=\"col-md-2\">
                                                                                              <br><h4><span>Name:</span></h4>
                                                                                        </div>
                                                                                        <div class=\"col-md-10\">
                                                                                              <br><h5><span>".$name."</span></h5>
                                                                                        </div>
                                                                                        <div class=\"col-md-2\">
                                                                                              <h4><span>Password:</span></h4>
                                                                                        </div>
                                                                                        <div class=\"col-md-10\">
                                                                                              <h5><span>".$password."</span></h5>
                                                                                        </div>
                                                                                        <div class=\"col-md-2\">
                                                                                              <h4><span>Email:</span></h4>
                                                                                        </div>
                                                                                        <div class=\"col-md-10\">
                                                                                              <h5><span>".$email."</span></h5>
                                                                                        </div>
                                                                                        <div class=\"col-md-2\">
                                                                                              <h4><span>Phone Number:</span></h4>
                                                                                        </div>
                                                                                        <div class=\"col-md-10\">
                                                                                              <h5><span>".$phone_no."</span></h5>
                                                                                        </div>
                                                                                        <div class=\"col-md-2\">
                                                                                              <h4><span>Student Number:</span></h4>
                                                                                        </div>
                                                                                        <div class=\"col-md-10\">
                                                                                              <h5><span>".$roll_no."".$major."/".$year."</span></h5>
                                                                                        </div>
                                                                                        <div class=\"col-md-2\">
                                                                                              <h4><span>Address:</span></h4>
                                                                                        </div>
                                                                                        <div class=\"col-md-10\">
                                                                                              <h5><span>".$address."</span></h5>
                                                                                        </div>
                                                                                        <div class=\"col-md-12\">
                                                                                              <h4><span>Student Card:</span></h4>
                                                                                        </div>
                                                                                        <div class=\"col-md-2\">
                                                                                              <h4><span><img src=\"".$frontPhoto."\" width=100% height=100% style=\"border-radius:20px\"></span></h4>
                                                                                        </div>
                                                                                        <div class=\"col-md-2\">
                                                                                              <h4><span><img src=\"".$backPhoto."\" width=100% height=100% style=\"border-radius:20px\"></span></h4>
                                                                                        </div>
                                                                                        <div class=\"col-md-8\">
                                                                                        </div>
                                                                                        <div class=\"col-md-8\">
                                                                                        </div>
                                                                                        <div class=\"col-md-12\">
                                                                                          <a href=\"ReviewTeamPanelRegistrationRequest.php?id=".$id."&cancel=Yes&frontPhoto=".$frontPhoto."&backPhoto=".$backPhoto."\">
                                                                                             <button class=\"btn btn-danger btn-xs\" style=\"margin-top:7px;\">Cancel</button>
                                                                                          </a>
                                                                                          <a href=\"ReviewTeamPanelRegistrationRequest.php?id=".$id."&confirm=Yes\">
                                                                                             <button class=\"btn btn-primary btn-xs\" style=\"margin-top:7px;\">Confirm</button>
                                                                                          </a>
                                                                                        </div>
                                                                                        <div class=\"col-md-12\">
                                                                                        request made on: ".$date."
                                                                                        </div>
                                                                                </div>
                                                                          </div>
                                                                    </div>";
                                                      }
                                                  } else {
                                                      echo "There is no requests.";
                                                  }
                                    ?> 
                                </div>
                        </div>
              </div>
              <div class="col"></div>
        </div>

<!--scrolling js-->
                <script src="bootstrap1/js/jquery.nicescroll.js"></script>
                <script src="bootstrap1/js/scripts.js"></script>
<!--//scrolling js-->
</body>
</html>