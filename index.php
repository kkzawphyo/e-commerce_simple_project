<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 

	
	
	
	//get productCategory
	$productCategory="";
	if(isset($_POST['productCategory'])){
		$productCategory = $_POST['productCategory'];
	}
	else{
		$productCategory=0;
	}

	//get keyword
	$keyWord ="";	
	if(isset($_GET['keyWord'])){
		$keyWord=$_GET['keyWord'];
	}


	
	$currentPage=1;
	
	if(isset($_GET['currentPage'])){
		$currentPage=$_GET['currentPage'];
	}

	if (isset($_POST['sent']) && $_POST['sent'] =="yes" ) {
			

			if(isset($_POST['search']) && trim($_POST['search'])!=''){
				
					$keyWord = $_POST['search'];
						
						extract($_POST);
						require_once("Home.php");
			} 
			else{
				require_once("Home.php");
			}
		
		
		
	}
else{
	require_once("Home.php");

}
	
 ?>
