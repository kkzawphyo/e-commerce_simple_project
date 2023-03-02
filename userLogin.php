<?php
session_start();

ob_start();
?>
<?php
            include("config.php");
            $msg = '';
            
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
                    $myusername = mysqli_real_escape_string($db,$_POST['username']);
                    $mypassword = mysqli_real_escape_string($db,$_POST['password']);
                    $sql = "SELECT id,pendingStatus FROM register WHERE name = '$myusername' and password = '$mypassword'";
                    $result = mysqli_query($db,$sql);
                    $id="";
                    $pendingStatus="";
                          
                    $count = mysqli_num_rows($result);
                   while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                      $id=$row['id'];
                      $pendingStatus=$row['pendingStatus'];
                   }

               if ($count == 1) {
                if($pendingStatus=="False"){
                  $msg="Your account is in pending state.";
                }
                else{
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = $myusername;
                  $_SESSION['id'] = $id;
                  header("Location:index.php");
                }                  
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
<html>
<head>
    <title>Welcome</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">        
        <script src="js/jquery.js" type="text/javascript"></script>   
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <link href="css/forReviewTeamLogin1.css" rel="stylesheet">
        <style type="text/css">
                        body{
                            background: #e6e6e6;
                        }
                    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
      <h1 style="font-family:Algerian;margin-left:2%;margin-top:1%;color:white">YCC Trading Center</h1>
    </nav>
    <hr>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-3">
            <div class="form-login">
                    <form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "post">
                            <h4>Welcome</h4>
                            <input type="text" id="userName" name="username" class="form-control input-sm chat-input" placeholder="username" required="" />
                            </br>
                            <input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="password" required="" />
                            </br>
                            <div class="wrapper">
                                        <span class="group-btn">     
                                        <button class="btn btn-primary btn-md" type="submit" name="login">login </button>
                                        </span>
                            </div>                            
                    </form>
                    <label class = "form-signin-heading" style="color:red"><?php echo $msg; ?></label>
            </div>        
        </div>
    </div>
</div>
</body>
</html>