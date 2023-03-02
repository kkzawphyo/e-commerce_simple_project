<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="bootstrap1/css/bootstrap.css">
  <script src="bootstrap1/js/bootstrap.js" type="text/javascript"></script>
  <script src="bootstrap1/js/jquery.js" type="text/javascript"></script>   
  <style>
      .picture-container
      {
          position: relative;
          cursor: pointer;
          text-align: center;
      }
      .picture
      {
          width: 15%;
          height: 22%;
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
          width: 15%;
          height: 22%;
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
<body>
    <div class="container">
          <div class="picture-container">
              <div class="picture">
                    <img src="hakImages/upload.png" class="picture-src" id="wizardPicturePreview" title="">
                    <input type="file" id="wizard-picture" class="">
              </div>
              <h6 class="">Choose Front view of Student Card</h6>
          </div>
          <hr>
          <div class="picture-container">
              <div class="picture1">
                    <img src="hakImages/upload.png" class="picture-src" id="wizardPicturePreview1" title="">
                    <input type="file" id="wizard-picture1" class="">
              </div>
              <h6 class="">Choose Back view of Student Card</h6>
          </div>
    </div>
    <script>          
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
          $(document).ready(function()
          {
                $("#wizard-picture").change(function()
                {
                    readURL(this);
                });
          });
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