<?php session_start(); ?>
<div class="headertop_desc">
			<div class="account_desc">
				<ul>
					<?php 
						if(!empty($_SESSION['id'])){
							$id=$_SESSION['id'];
							$username = $_SESSION['username'];
						echo "<li><a href=\"supplierProfile.php?id=$id\">$username</a></li>";
						echo "<li><a href=\"userLogout.php\">Logout</a></li>";
						}
						else{
							echo "<li><a href=\"Register.php\">Register</a></li>
									<li><a href=\"userLogin.php\">Login</a></li>";
						}

					?>
				</ul>
			</div>
			<div class="clear"></div>
		</div>