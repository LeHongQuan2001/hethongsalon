<?php
session_start();
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Astronomy Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<style>
		.them{
			font: 14px/36px Arial, Helvetica, sans-serif;
			list-style: none;
    		height: 36px;
    		color: #fff;
    		size: 200px;
			width: 440px;
    		border: 0;
    		margin-right: 10px;
    		padding: 0 10px;
        }
	</style>
</head>
<body>
    <!-- bắt đầu MENU -->
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
				<li >
					<a href="contact.php">Contact Us</a>
				</li>
                <li >
					<a href="login.php">Login</a>
				</li>
			</ul>
		</div>
	</div>
    <!-- kết thúc MENU -->

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
					<h1>Register now!</h1>
					<a href="register.php" class="btn1">Click Here!</a>
				</div>
			</div>
            <!-- BẮT ĐẦU MAIN (LOGIN) -->
			<div class="main">
				<h1>Forgot Password</h1>
				<form  method="post">
					<ul>
						<li>
							<input type="email" name="txtemail"  placeholder="Enter your email name here." class="them">
						</li>
						<li>
							<input type="text"name="txtuser"  placeholder="Enter your user name here.">
						</li>
						<li>
							<input  name="txtdone" type="submit" value="Done" class="btn3">
							<!-- <a style=" color: white; text-decoration: none;" href="forgotpass.php">Forgot password.</a>  -->
                        </li>
					</ul>
				</form>
				<?php
					include("PHPMailer/src/Exception.php");
					include("PHPMailer/src/OAuth.php");
					include("PHPMailer/src/POP3.php");
					include("PHPMailer/src/PHPMailer.php");
					include("PHPMailer/src/SMTP.php");
					use PHPMailer\PHPMailer\PHPMailer;
					use PHPMailer\PHPMailer\Exception;
					 include ('control.php');
                     $get_data = new data();
                     if (isset($_POST["txtdone"]))
                     {
						
                         if(empty($_POST["txtuser"]))
                         {
                              echo("<script>alert('không được để trống User !!!');</script>");
                         }
                         else
                         {
						 $checkpass= $get_data -> forgotpass($_POST["txtuser"]);
                         $check=$get_data ->kt_user($_POST["txtuser"]);
                         if($check==1)
                         {
							// echo("<script> alert('pass: ".$checkpass[0]."');</script>");
							$mail= new PHPMailer(true);
							try{
							$mail->SMTPDebug=2;
							$mail->isSMTP();
							$mail->Host='smtp.gmail.com';
							$mail->SMTPAuth=true;
							$mail->Username='thinhboop@gmail.com';
							$mail->Password='0352403903';
							$mail->SMTPSecure='tls';
							$mail->Port=587;
							$mail->CharSet='UTF-8';
							$mail->setFrom('thinhboop@gmail.com');     
							$mail->addAddress(''.$_POST["txtemail"].''); //vuonglan2101@gmail.com
							$mail->isHTML(true);
							$mail->Subject='Hi '.$_POST["txtuser"].'';
							$mail->Body='pass: '.$checkpass[0].'';
							$mail->AltBody='cảm ơn đã sử dụng dịch vụ bên tôi. ';
							$mail->SMTPDebug  = 0;
							$mail->send();
							echo("<script> alert('Message has been sent');</script>");
							}  
							catch(Exception $m){
								echo 'Message could not be sent. Mailer Error:'.$mail->ErrorInfo;
							}
							// finally{
							// 	header("location: login.php");
							// }
                         }
                         else
                         {
							echo("<script> alert('User không tồn tại');</script>");
                         }
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
