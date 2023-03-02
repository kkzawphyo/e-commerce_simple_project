<?php 
	$searchWord="";
	if(isset($_GET['keyWord'])){
		$searchWord = $keyWord;
	}
	else if (isset($_POST['sent']) && $_POST['sent'] == 'yes') {
			$searchWord = $keyWord;
	}
 ?>

<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li class="active"><a href="index.php">Home</a></li>
			    	<li><a href="New Products.php">New Products</a></li>
			    	<li><a href="SecondHand Products.php">Second-Hand Products</a></li>
			    	<li><a href="Rent Service.php">Rent Service</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>

	     	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
	     		

	     	<div class="custom-select" style="width:180px;">
				  
	     		
				  <select name="productCategory" >

				  	<?php  require_once("Home_productCategory.php") ?>
				  
				  </select>
				
			</div>
			<div class="search_box">

	     		
	     			<input type="hidden" name="sent" value="yes" />
	     			<input type="text" name="search" placeholder="Search" <?php echo "value=\"$searchWord\";" ?>  onblur="if (this.value == '') {this.placeholder = 'Search';}" /><input type="submit" value="" />
	     		
	     	</div>


		
	     	


	     	</form>
	     	<div class="clear"></div>
	     </div>	  