
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Astronomy Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="wrapper clearfix">
			<div id="logo">
				<a href="index.php"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="blog.php">Dịch vụ</a>
				</li>
				<li>
					<a href="gallery.php">Lịch đặt</a>
				</li>
				<li class="selected">
					<a href="contact.php">Contact Us</a>
				</li>
				<?php
				session_start();
				include("control.php");
				$get_data=new data();
				if (empty($_SESSION['user'])){
					?>
					<li>	
						<a href="login.php">Login</a>
					</li>
					<?php
				}
				else{
					$select_user =$get_data -> select_user($_SESSION['user']);
					foreach($select_user as $se_username)
					{	
						$user_login = $se_username['user'];
						$img = $se_username['file'];
						$_SESSION["file"]=$se_username['file'];
					?>
					<li >
						<a  href="user.php"><?php echo $_SESSION['user'] ?>
					</li>
					<li  style="margin:0px -17px;">
						<img src="img/<?php echo $_SESSION['file']?>" width="35px" height="35px"  style="border-radius:50%"  alt="">
					</li>
					<li>
						<a href='logout.php'>Logout<a> </a>
					</li>
					<?php
					}
					$select_admin =$get_data -> select_admin($_SESSION['user']);
					foreach($select_admin as $se_admin)
					{
						$user_login = $se_admin['user'];
						$_SESSION["file"]= $se_admin['file'];
					?>
						<li >
							<a  href="admin.php"><?php echo $_SESSION['user'] ?>
						</li>
						<li  style="margin:0px -17px;">
							<img src="img/<?php echo $_SESSION['file']?>" width="35px" height="35px"  style="border-radius:50%"  alt="">
						</li>
						<li>
							<a href='logout.php'>Logout<a> </a>
						</li>
					<?php
					}
				}
				?>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div id="contact" class="wrapper clearfix">
			<div id="sidebar">
				<ul>
					<li>
						<a href="blog.php"><img src="images/earth-small.jpg" alt="Img" height="154" width="213"></a>
					</li>
					<li>
						<a href="blog.php"><img src="images/spaceshuttle-closeup.jpg" alt="Img" height="154" width="213"></a>
					</li>
				</ul>
				<div class="click-here">
					<h1>Register Now!</h1>
					<a href="index.php" class="btn1">Click Here!</a>
				</div>
			</div>
			<div class="main">
				<h1>Contact Us</h1>
				<form  method="post">
					<ul>
						<li>
							<input type="text"name="txtname" placeholder="Enter your full name here." >
						</li>
						<li>
							<input type="text" name="txtemail"  placeholder="Enter your email address here.">
						</li>
						<li>
							<input type="text" name="txtsub" placeholder="Enter the Subject message here">
						</li>
						<li>
							<textarea name="txamess" placeholder="Enter your Message here."></textarea>
							<div class="checkbox">
								<label for="terms">
									<input name="cbterm" type="checkbox" value="terms" id="terms">
									I agree to the Terms and Conditions</label>
								<br>
								<label for="subscribe">
									<input name="cbsub" type="checkbox" value="subscribe" id="subscribe">
									Subscribe to newsletter</label>
							</div>
							<input  name="txtsend" type="submit" value="Send Now" class="btn3">
						</li>
					</ul>
				</form>
				<?php
					
					if (isset($_POST["txtsend"]))
					{
						if (empty($_POST["txtemail"]) || empty ($_POST["txamess"]))
							echo "<script> alert('không được để trống ') </script>;";
						else 
							{
								$insert=$get_data-> in_contact($_POST["txtname"],$_POST["txtemail"],$_POST["txtsub"],$_POST["txamess"],$_POST["cbterm"],$_POST["cbsub"]);
								if($insert)echo" <script> alert ('Message has been sent')</script>";
								else echo" <script> alert ('Message has not been sent')</script>";
							}
					}
				?>
			</div>
		</div>
	</div>
	<div id="footer">
		<ul id="featured" class="wrapper clearfix">
			<li>
				<img src="images/astronaut.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.php">Category 1</a></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
				</p>
			</li>
			<li>
				<img src="images/earth.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.php">Category 2</a></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
				</p>
			</li>
			<li>
				<img src="images/spacecraft-small.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.php">Category 3</a></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
				</p>
			</li>
			<li>
				<img src="images/space-shuttle.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.php">Category 4</a></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
				</p>
			</li>
		</ul>
		<div class="body">
			<div class="wrapper clearfix">
				<div id="links">
					<div>
						<h4>Social</h4>
						<ul>
							<li>
								<a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank">Google +</a>
							</li>
							<li>
								<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank">Facebook</a>
							</li>
							<li>
								<a href="http://freewebsitetemplates.com/go/youtube/" target="_blank">Youtube</a>
							</li>
						</ul>
					</div>
					<div>
						<h4>Heading placeholder</h4>
						<ul>
							<li>
								<a href="index.php">Link Title 1</a>
							</li>
							<li>
								<a href="index.php">Link Title 2</a>
							</li>
							<li>
								<a href="index.php">Link Title 3</a>
							</li>
						</ul>
					</div>
				</div>
				<div id="newsletter">
					<h4>Newsletter</h4>
					<p>
						Sign up for Our Newsletter
					</p>
					<form action="index.php" method="post">
						<input type="text" value="">
						<input type="submit" value="Sign Up!">
					</form>
				</div>
				<p class="footnote">
					© Copyright © 2023.Company name all rights reserved
				</p>
			</div>
		</div>
	</div>
</body>
</html>