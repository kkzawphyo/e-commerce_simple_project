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
                        <div class="panel panel-default panel-order">
                                    <link rel="stylesheet" type="text/css" href="bootstrap1/css/1.css">
                                    <script src="bootstrap1/js/jquery.js" type="text/javascript"></script>   
                                    <script src="bootstrap1/js/1.js" type="text/javascript"></script>
                                <div class="panel-body">
                                    <?php 
                                                  include("config.php");
                                                  $showAlert="";
                                                  if(!empty($_GET['id']) && !empty($_GET['cancel']))
                                                  {
                                                      $id=$_GET['id'];
                                                      $sql = "DELETE FROM requestedmessage WHERE id=".$id;
                                                      mysqli_query($db, $sql);
                                                      $showAlert="<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">That message has been canceled.<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>;";
                                                  }

                                                  if(!empty($_GET['id']) && !empty($_GET['approve']))
                                                  {
                                                      $id=$_GET['id'];
                                                      $sql = "UPDATE requestedmessage SET pendingStatus='True' WHERE id=".$id;
                                                      mysqli_query($db, $sql);
                                                      $showAlert="<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">That message has been approved.<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button></div>;";
                                                  }
                                                  $id="";
                                                  $message="";
                                                  $date="";
                                                  $sql = "SELECT id,message,date FROM requestedmessage where pendingStatus='False'";
                                                  mysqli_set_charset($db,"utf8");
                                                  $result = mysqli_query($db,$sql);
                                                  if (mysqli_num_rows($result) > 0) {
                                                      while($row = mysqli_fetch_assoc($result)) {
                                                            $id=$row['id'];
                                                            $message=$row['message'];
                                                            $date=$row['date'];
                                                            echo "<div class=\"row\" id=\"".$id."\">
                                                                          <div class=\"col-md-12\">
                                                                                <div class=\"row\">
                                                                                        <div class=\"col-md-12\">
                                                                                              <div class=\"pull-right\">
                                                                                                    <a href=\"ReviewTeamPanelMessages.php?id=".$id."&cancel=Yes\">
                                                                                                            <button class=\"btn btn-danger btn-xs\">cancel</button>
                                                                                                    </a>
                                                                                                    <br>
                                                                                                    <a href=\"ReviewTeamPanelMessages.php?id=".$id."&approve=Yes\">
                                                                                                              <button class=\"btn btn-primary btn-xs\" style=\"margin-top:7px;\">approve</button>
                                                                                                    </a>
                                                                                              </div>
                                                                                              <span><strong>".$message."</strong></span><br>
                                                                                        </div>
                                                                                        <div class=\"col-md-12\">
                                                                                        request made on: ".$date."
                                                                                        </div>
                                                                                </div>
                                                                          </div>
                                                                    </div>";
                                                      }
                                                  } else {
                                                      echo "There is no Requests";
                                                  }
                                    ?> 
                                </div>
                        </div>
                        <div id="cancelLabel"><?php echo $showAlert; ?></div>
              </div>
              <div class="col"></div>
        </div>

<!--scrolling js-->
                <script src="bootstrap1/js/jquery.nicescroll.js"></script>
                <script src="bootstrap1/js/scripts.js"></script>
<!--//scrolling js-->
</body>
</html>