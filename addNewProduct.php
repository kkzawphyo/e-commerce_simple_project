<?php  $id=$_GET['id']; ?>
<!DOCTYPE html>
<html>
  			<link rel="stylesheet" type="text/css" href="zpabootstrap/css/bootstrap.min.css" >
  			<link rel="stylesheet" type="text/css" href="zpabootstrap/css/styles.css" >  
  			<link rel="stylesheet" type="text/css" href="zpabootstrap/css/forAddproduct.css" >  
  			<link rel="stylesheet" type="text/css" href="zpabootstrap/css/bootstrap.css">
 		    <script src="zpabootstrap/js/bootstrap.js" type="text/javascript"></script>
  			<script src="zpabootstrap/js/jquery.js" type="text/javascript"></script>  
 <style>
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
      .picture-src
      {
          width: 100%;    
      }
  			 .picture-container
      {
          position: relative;
          cursor: pointer;
          text-align: center;
      }
  			 .picture
      {
          content: :margin-left;
          width: 65%;
          height: 65%;
          background-color: white;
          border: 3px solid white;
          color: #FFFFFF;
          border-radius: 10%;
          margin: 0px auto;
          overflow: hidden;
          transition: all 0.2s;
          -webkit-transition: all 0.2s;
      }
 </style>		

<body>
<nav class="navbar navbar-dark bg-dark">
<h1 style="font-family:Algerian;margin-left:2%;margin-top:1%;color:white">YCC Trading Center</h1>

</nav>


    <form action='addProcess.php?id=<?php echo $id; ?>' enctype='multipart/form-data' method='POST'>
<div id="frame" class="container"> 
	<div id="size">
	<br>
		<h1 style="font-family: Calibri">Please Add Your Product</h1>
		<br><br>
    	<div class="form-group row" >
    	<label class="col-sm-2 col-form-label col-form-label-lg">Name</label>
    	<div class="col-sm-10">
    	<input type="text" class="form-control" name='pdName'  placeholder="Enter product name" required="">
    	</div>
    	</div>
 
  		<div class="form-group row" >
    	<label  class="col-sm-2 col-form-label col-form-label-lg">Price</label>
    	<div class="col-sm-10">
      	<input type="text" class="form-control" name="pdPrice" placeholder="Enter your product price" required="">
    	</div>
  		</div>


      
      <?php      $category=array(6=>"Clothes & Dresses","Shoes & Slippers","Cosmetics","Fancy Accessories","Handmade","Others"); ?>
      <div class="form-group row">
      <label  class="col-sm-2 col-form-label col-form-label-lg">Category</label>
      <div class="col-sm-10">
      <select class="form-control"   name="pdCategory" id="pdCategory" >
         <?php $i; for($i=6;$i<12;$i++){  ?>
        <option value=<?php echo "$i"; ?>><?php echo $category[$i]; ?></option><?php } ?>
      </select>
      </div>
      </div>

<div class="form-group row">
      <label  class="col-sm-2 col-form-label col-form-label-lg">Description</label>
      <div class="col-sm-10">
      <textarea class="form-control" name="pdDescription" required=""></textarea>
      </div>
      </div><br>

           <div class="form-group row">
             <div class="col-sm-4">
  		<div class="container">
          <div class="picture-container">
              <div class="picture">
                    <img src="zpaImages/camera2.png" class="picture-src" id="wizardPicturePreview" title="">
                    <input type="file" id="wizard-picture" name="photo1" class="">
              </div>
              <h6 class="" style="color: blue;font-size: larger;font-weight: bolder;" >Photo1</h6>
          </div>
        </div>
      </div>

         <div class="col-sm-4">
          <div class="container">
           <div class="picture-container">
              <div class="picture">
                    <img src="zpaImages/camera2.png" class="picture-src" id="wizardPicturePreview1" title="">
                    <input type="file" id="wizard-picture1" name="photo2" class="">
              </div>
              <h6 class="" style="color: blue;font-size: larger;font-weight: bolder;" >Photo2</h6>
          </div>
        </div>
        </div>

           <div class="col-sm-4">
              <div class="container">
                 <div class="picture-container">
                    <div class="picture">
                       <img src="zpaImages/camera2.png" class="picture-src" id="wizardPicturePreview2" title="">
                       <input type="file" id="wizard-picture2" name="photo3" class="">
                    </div>
                       <h6 class="" style="color: blue;font-size: larger;font-weight: bolder;" >Photo3</h6>
                 </div>
              </div>
        </div>


<div id="frame" class="container"> 
	  <div class="form-group row" >
		<label  class="col-sm-2 col-form-label col-form-label-lg">Availiable Quantity</label>
		<div class="col-sm-10">
			<input type="text" class="form-control" name="pdQuantity" placeholder="Enter your product availiable quantity"style="margin-top:18px" required="">
		</div>
      </div>
	  
  	  <div class="form-group row">
           <div class="col-sm-4">
            <br>
  		      <h5>Optional Attributes</h5>
			<br>
          </div>
       </div>


             <div class="form-group row" >
      <label  class="col-sm-2 col-form-label col-form-label-lg">Color</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="pdColor" placeholder="Enter your product color">
      </div>
      </div>      

      <div class="form-group row" >
      <label  class="col-sm-2 col-form-label col-form-label-lg">Brand</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="pdBrand" placeholder="Enter your product Brand">
      </div>
      </div>

      <div class="form-group row" >
      <label  class="col-sm-2 col-form-label col-form-label-lg">Type</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="pdType" placeholder="Enter your product type">
      </div>
      </div>

      <div class="form-group row" >
      <label  class="col-sm-2 col-form-label col-form-label-lg">Size</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="pdSize" placeholder="Enter your product Size">
      </div>
      </div>

      <div class="form-group row" >
      <label  class="col-sm-2 col-form-label col-form-label-lg">Model</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="pdModel" placeholder="Enter your product Model">
      </div>
      </div>
              

    <div id="responce"><br></div>
          <div class="row">
                 <div class="col-10"></div>
                    <div class="col-2">
                      <button  class="btn btn-primary" type="submit" >POST</button></form>
                    </div>
              </div>   
         </div>
   </div> <br>

</div>
 
  

   			   
		   
           <script>
                  var comboName =1;
                  var textName = 1;
                  var buttonName=1;
                  var count=1;
                  var parentId=0;
                  var childId=10;
              
                   function addInput()
                 {
                    var catList=new Array('Color','Brand','Type','Availiable Quantity','Model','Size');
            	  if(count <6)
            	   {      
                    
            	         document.getElementById('responce').innerHTML+='<div id="'+parentId+'"><div id="'+childId+'"class="row"><div class="col-4"><select class="form-control" style="margin-top:10px"  name="combo'+count+'" value="1" ><option name='+catList[0]+'>'+catList[0]+'</option><option name='+catList[1]+'>'+catList[1]+'</option><option name='+catList[2]+'>'+catList[2]+'</option><option name='+catList[3]+'>'+catList[3]+'</option><option name='+catList[4]+'>'+catList[4]+'</option><option name='+catList[5]+'>'+catList[5]+'</option></select></div><div class="col-4"><input class="form-control" style="margin-top:10px" type="text"   placeholder="Enter Description" name="text'+count+'"></div><div class="col-1"><Button class="btn btn-primary" style="margin-top:5px ; margin-left:2px " type="button" id="a"  onclick="removeElement(\''+parentId+'\',\''+childId+'\')"  >X</Button></div></div></div>';  
                            count++;
                            parentId++;
                            childId++;
            	   }
                
           }
                    
                function removeElement(parentDiv, childDiv){    
                      count --;
                      var child = document.getElementById(childDiv);
                      var parent = document.getElementById(parentDiv);
                       parent.removeChild(child);   
    }


             
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

          function readURL2(input) 
          {
                if (input.files && input.files[0]) 
                {
                      var reader = new FileReader();
                      reader.onload = function (e) 
                       {
                              $('#wizardPicturePreview2').attr('src',e.target.result).fadeIn('slow');
                        }
                        reader.readAsDataURL(input.files[0]);
                }
          }
          $(document).ready(function()
          {
                $("#wizard-picture2").change(function()
                {
                    readURL2(this);
                });
          });
           </script>
           
         </form>
</body>
</html>
 