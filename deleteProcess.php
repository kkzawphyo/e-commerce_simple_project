<?php 
	 include("config.php");
	  $id=$_GET['pId'];
	  $type=$_GET['type'];
            $sql = "DELETE FROM product WHERE productId=".$id;
            mysqli_query($db, $sql);
            if($type=="rent"){
            	header("Location:rentViewSupplier.php");
            }
            if($type=="second")
            {
            	header("Location:secondHandsViewSupplier.php");
            }
            if($type=="new")
            {
            	header("Location:newGoodsViewSupplier.php");
            }
            
?>