<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html  lang="en">
	<head>
		 <meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <title>Registering</title>
		 <link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.css"> 
          <link href="bootstrap1/css/forRegister.css" rel="stylesheet">
          <script src="bootstrap1/js/jquery.js" type="text/javascript"></script>   
          <script src="bootstrap1/js/bootstrap.js" type="text/javascript"></script>

          <style type="text/css">
              body
              {
                    background: #f1f1f1;
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
          width: 55%;
          height: 60%;
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
          width: 55%;
          height: 60%;
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
            <a class="navbar-brand" href="#"><h2 style="font-family:Algerian;margin-left:2%;margin-top:1%;color: black">YCC Trading Center</h2></a>        
      </div> 
    </div>    
                <br> <br> <br><br> <br> <br> 
                <?php
            include("config.php");
            $msg = '';
            
            
            if (isset($_POST['register']) && !empty($_POST['userName']) 
               && !empty($_POST['userPassword']) && !empty($_POST['confrimPassword']) && !empty($_POST['Email']) && !empty($_POST['userPhoneNumber']) && !empty($_POST['userYear']) && !empty($_POST['userMajor']) && !empty($_POST['userRoll']) && !empty($_POST['userAddress'])) {

                    $userName= mysqli_real_escape_string($db,$_POST['userName']);
                    $userPassword= mysqli_real_escape_string($db,$_POST['userPassword']);
                    $Email= mysqli_real_escape_string($db,$_POST['Email']);
                    $userPhoneNumber= mysqli_real_escape_string($db,$_POST['userPhoneNumber']);
                    $userYear= mysqli_real_escape_string($db,$_POST['userYear']);
                    $userMajor= mysqli_real_escape_string($db,$_POST['userMajor']);
                    $userRoll= mysqli_real_escape_string($db,$_POST['userRoll']);
                    $userAddress= mysqli_real_escape_string($db,$_POST['userAddress']);

                    $result = mysqli_query($db,"SELECT MAX(id) FROM register");
                    $row = mysqli_fetch_row($result);
                    $highest_id = $row[0];
                    $highest_id=$highest_id+1;
                    $path = $_FILES['userFrontPic']['name'];
                    $ext = pathinfo($path, PATHINFO_EXTENSION);
                    $destination='C:\xampp\htdocs\Project\registerPhotos'."\\".$highest_id."front.".$ext;
                    $frontPhoto='registerPhotos/'.$highest_id."front.".$ext;
                    $temp_file=$_FILES['userFrontPic']['tmp_name'];
                    move_uploaded_file($temp_file,$destination);

                    $path1 = $_FILES['userBackPic']['name'];
                    $ext1 = pathinfo($path, PATHINFO_EXTENSION);
                    $destination1='C:\xampp\htdocs\Project\registerPhotos'."\\".$highest_id."back.".$ext1;
                    $backPhoto='registerPhotos/'.$highest_id."back.".$ext1;
                    $temp_file1=$_FILES['userBackPic']['tmp_name'];
                    move_uploaded_file($temp_file1,$destination1); 

                    $today=date("Y-m-d");
                    $sql = "INSERT INTO register(name,password,email,phone_no,year,major,roll_no,address,frontPhoto,backPhoto,pendingStatus,date) VALUES ('".$userName."', '".$userPassword."', '".$Email."','".$userPhoneNumber."','".$userYear."','".$userMajor."','".$userRoll."','".$userAddress."','".$frontPhoto."','".$backPhoto."','False','".$today."')";      
                    if (mysqli_query($db,$sql)) 
                    {
                        header("Location:index.php");
                    } 
                    else
                    {
                      echo "no";
                    }      
            }
            else {
              
            }
         ?> 
		<div class="container">            
               <div class="row justify-content-md-center">
       				<div class="col-md-6">
            				<div class="form-login">
            					<form id="registration" enctype="multipart/form-data" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
            					     <h4>Welcome from YCC Trading Center</h4><hr>
                                            <div class="row">
                                                <div class="col-5">
                                                    <h5 style="padding-top: 5%;font-family: Calibri">Username:</h5>
                                                </div>
                                                <div class="col-7">
           					                    <input type="text" id="userName" name="userName" class="form-control input-sm chat-input" required=""/>
                                                </div>
                                            </div>
            					           </br>
                                            <div class="row">
                                                <div class="col-5">
                                                     <h5 style="padding-top: 5%;font-family: Calibri">Password:</h5>
                                                </div>
                                                <div class="col-7">
            					                   <input type="password" id="userPassword" name="userPassword" class="form-control input-sm chat-input" required="" onkeyup="clearing()" />
                                                </div>
                                            </div>
            					           </br>
                                            <div class="row">
                                                <div class="col-5">
                                                      <h5 style="padding-top: 5%;font-family: Calibri">Confirm Password:</h5>
                                                </div> 
                                                <div class="col-7">
            					                   <input type="password" id="userConfirmPassword" name="confrimPassword" class="form-control input-sm chat-input" onblur="check()" onfocus="fuck()"/>
                                                </div>
                                                <div class="col-5">                                                  
                                                </div>
                                                <div class="col-7" style="color:red" id="passMiss">
                                                </div>
                                            </div>
            					           </br>
                                            <div class="row">
                                                <div class="col-5">
                                                      <h5 style="padding-top: 5%;font-family: Calibri">Email:</h5>
                                                </div>
                                                <div class="col-7">
            					                     <input type="email" id="userEmail" name="Email" class="form-control input-sm chat-input" required="" />
                                                </div>
                                            </div>
            					           <br>
                                            <div class="row">
                                                <div class="col-5">
                                                     <h5 style="padding-top: 5%;font-family: Calibri">Phone Number:</h5>
                                                </div>
                                                <div class="col-7">
            					                   <input type="PhoneNumber" id="userPhoneNumber" name="userPhoneNumber" class="form-control input-sm chat-input" required="" />
                                                </div>
                                            </div>
            					           <br>
                                            <br>
                                            <div class="row">
                                                  <div class="col-6">                                                           
            					                        <div class="picture-container">
                                                              <div class="picture">
                                                                   <img src="hakImages/upload.png" class="picture-src" id="wizardPicturePreview" title="">
                                                                    <input type="file" id="wizard-picture" name="userFrontPic" class="" accept=".png, .jpg, .jpeg">
                                                              </div>
                                                              <h6 class="">Choose Front view of Student Card</h6>
                                                         </div>
                                                  </div>
                                                  <div class="col-6">
            					                         <div class="picture-container">
                                                                   <div class="picture1">
                                                                            <img src="hakImages/upload.png" class="picture-src" id="wizardPicturePreview1" title="">
                                                                            <input type="file" id="wizard-picture1" name="userBackPic" class="" accept=".png, .jpg, .jpeg">
                                                                   </div>
                                                                   <h6 class="">Choose Back view of Student Card</h6>
                                                         </div>
                                                  </div>
                                                  <div class="col-6" id="errorFor1" style="color: red;text-align: center;"><?php echo $msg; ?>
                                                  </div>
                                                  <div class="col-6" id="errorFor2" style="color: red;text-align: center;"><?php echo $msg; ?>
                                                  </div>
                                  </div>
						      <br>
            					<div class="row">
                    					     <div class="col-md-5">
                        						<select id="country" class="form-control" name="userYear" required="">
                            							<option value="">Year</option>
                            							<option value="First Year">First Year</option>
                            							<option value="Second Year">Second Year</option>
                            							<option value="Third Year">Third Year</option>
                            							<option value="Fourth Year">Fourth Year</option>
                                                          <option value="Fifth Year">Fifth Year</option>
                            							<option value="Final Year">Final Year</option>                        
                        						</select>
                        					</div>               
                        					<div class="col-md-4">
                         						<select id="country" class="form-control" name="userMajor" required="">
                            							<option value="">Major</option>
						                            	<option value="ICT">ICT</option>
						                           	<option value="ECE">ECE</option>
						                            	<option value="PRE">PRE</option>
						                            	<option value="AME">AME</option>
						                            	<option value="IST">IST</option>				                         
						                            	<option value="CE">CE</option>
                        						</select>
							               </div>	
							               <div class="col-md-3">
								                   <input type="text" id="userName" name="userRoll" class="form-control" placeholder="Roll-no" required=""/>
							               </div>
						     </div>
						     <br>
                                  <br>
                                  <div class="row">
                                      <div class="col-3">
                                                         <h5 style="padding-top: 5%;font-family: Calibri">Address:</h5>
                                      </div>
                                      <div class="col-9">
						                    <textarea class="form-control" id="userAddress" name="userAddress" rows="2" placeholder="Address" required=""></textarea>
                                      </div>
                                  </div>                    				
            					</br>                                      
            					     <div class="wrapper">
            						      <span class="group-btn">    
                						        <!--<a href="#" class="btn btn-primary btn-md" onclick="myFunction()">Register</a>-->
                						        <button type="submit" name="register" class="btn btn-primary btn-lg btn-block" id="Register">Register</button>			
                						</span>                                      
            					     </div>
            					</form>
       					</div>        
        				</div>
    			</div>
		</div>
<script type="text/javascript">
            function Upload() 
            {
                var fileUpload = document.getElementById("wizard-picture"); 
                var fileUploadgg = document.getElementById("wizard-picture1");
                var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.jpeg)$");
                if (regex.test(fileUpload.value.toLowerCase()) && regex.test(fileUploadgg.value.toLowerCase())) 
                {                       
                      document.getElementById('errorFor1').innerHTML="";
                      document.getElementById("Register").disabled = false;
                } 
                else if(regex.test(fileUpload.value.toLowerCase())){
                      document.getElementById('errorFor1').innerHTML="";
                }
                else 
                {
                      document.getElementById('errorFor1').innerHTML="Please select a valid Image file.";
                      document.getElementById("Register").disabled = true;
                      return false;
                }
            }
            $(document).ready(function()
          {
                $("#wizard-picture").change(function()
                {
                    Upload();
                });
          });

            function Upload1() 
            {
                var fileUpload = document.getElementById("wizard-picture1"); 
                var fileUploadgg = document.getElementById("wizard-picture"); 
                var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.jpeg)$");
                if (regex.test(fileUpload.value.toLowerCase()) && regex.test(fileUploadgg.value.toLowerCase())) 
                { 
                  document.getElementById('errorFor2').innerHTML="";
                  document.getElementById("Register").disabled = false;
                } 
                else if(regex.test(fileUpload.value.toLowerCase())){
                      document.getElementById('errorFor2').innerHTML="";
                }
                else 
                {
                      document.getElementById('errorFor2').innerHTML="Please select a valid Image file.";
                      document.getElementById("Register").disabled = true;
                      return false;
                }
            }
            $(document).ready(function()
          {
                $("#wizard-picture1").change(function()
                {
                    Upload1();
                });
          });
</script>
<script type="text/javascript">
      var check = function() {
      var fileUpload = document.getElementById("wizard-picture1"); 
      var fileUploadgg = document.getElementById("wizard-picture"); 
  if (document.getElementById('userPassword').value == document.getElementById('userConfirmPassword').value) {
    document.getElementById('passMiss').innerHTML = '';   
  } else{
    document.getElementById('passMiss').innerHTML = 'These passwords don\'t match. Try again?.';
  }
}

function clearing()
{
   document.getElementById('userConfirmPassword').value = '';
    document.getElementById('passMiss').innerHTML = '';
    if(document.getElementById('userConfirmPassword').value==""){
    }
}

function fuck()
{
    document.getElementById('passMiss').innerHTML = '';
}

$('#registration').submit(function() {
  if(document.getElementById('userPassword').value != document.getElementById('userConfirmPassword').value)
  {
    document.getElementById('passMiss').innerHTML = 'These passwords don\'t match. Try again?.';
    return false;
  }  
  else if(document.getElementById('wizard-picture').value==""){
    document.getElementById('errorFor1').innerHTML="Please select a valid Image file.";
    return false;
  }
  else if(document.getElementById('wizard-picture1').value==""){
    document.getElementById('errorFor2').innerHTML="Please select a valid Image file.";
    return false;
  }
  else{
    return true;
  }
});
</script>
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
		<!--scrolling js-->
                <script src="bootstrap1/js/jquery.nicescroll.js"></script>
                <script src="bootstrap1/js/scripts.js"></script>
          <!--//scrolling js-->
</body>
</html>