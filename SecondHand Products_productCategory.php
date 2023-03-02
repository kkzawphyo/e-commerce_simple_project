<?php
	require_once("dbstuff.inc");
	$cnx = mysqli_connect($host,$user,$password,$dbname) or die("Couldn't connect to server");
	$query = "Select * FROM main_category WHERE ProductType=1";
	$result = mysqli_query($cnx,$query);
	$defaultCategory = 0;

	echo "<option value=$defaultCategory>Select Category</option>";
	echo "<option value=$defaultCategory";
	if($productCategory==0){
		echo "selected=\"selected\">All</option>";
	}
	echo  ">All</option>";
	while($row=mysqli_fetch_assoc($result)){
		extract($row);
	echo "<option value=$Main_Id";
	if($productCategory==$Main_Id){
		echo "selected=\"selected\">$Main_Name</option>";
	}
	else{
		echo ">$Main_Name</option>";
	}
}

?>

