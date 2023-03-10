
<!DOCTYPE html>
<?php
session_start();
include("control.php");
$get_data=new data();
if (empty($_SESSION['user'])){
    echo "Ban phai dang nhap";
    header('location:login.php');
}
?>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Astronomy Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <style>
        input.them{
            
            background-color: #fff;
	        color: #060606;
	        font: 14px/36px Arial, Helvetica, sans-serif;
            height: 36px;
            width: 440px;
            border: 0;
	        margin-right: 10px;
	        padding: 0 10px;

        }
        select.them{
            background-color: #fff;
	        color: #060606;
	        font: 14px/36px Arial, Helvetica, sans-serif;
            height: 36px;
            width: 460px;
            border: 0;
	        margin-right: 10px;
	        padding: 0 10px;
        }
        .them{
            list-style: none;
            margin: 0;
            padding: 0;
            color: #fff;
            size:134px;
        }
    </style>
</head>
<body>
	<div id="header">
		<div class="wrapper clearfix">
			<div id="logo">
				<a href="index.php"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li class="selected">
					<a href="blog.php">Blog</a>
				</li>
				<li >
				<a  href="user.php"><?php echo $_SESSION['user'] ?>
				</li>
				<li  style="margin:0px -17px;">
				<img src="img/<?php echo $_SESSION['file']?>" width="35px" height="35px"  style="border-radius:50%"  alt="">
				</li>
				<li>
				 <a href='logout.php'>Logout<a> </a>
				</li>
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
				
			</div>
			<div class="main">
				<h1>Up New Blog</h1>
				<form  method="post">
					<ul>
						<li>
							<input type="text"name="txtblogname" placeholder="Blog Name Here." >
						</li>
						<li>
							<input type="date" name="txtdate" class="them">
						</li>
                        <li>
                            <textarea name="txtscontent" placeholder="Shot Content"></textarea>
                        </li>
						<li>
							<textarea name="txtlcontent" placeholder="Long Content"></textarea>
							
						</li>
                        <li>
                            <input  name="txtup" type="submit" value="Up Now" class="btn3">
                        </li>
					</ul>
				</form>
				<?php
					if (isset($_POST["txtup"]))
					{
						if (empty($_POST["txtscontent"]) || empty ($_POST["txtlcontent"])|| empty ($_POST["txtdate"])|| empty ($_POST["txtblogname"]))
							echo "<script> alert('không được để trống ') </script>;";
						else 
							{
								$insert=$get_data-> insert_blog($_SESSION['user'],$_POST["txtblogname"],$_POST["txtdate"],$_POST["txtscontent"],$_POST["txtlcontent"]);
								if($insert)echo" <script> alert ('Up blog thành công')</script>";
								else echo" <script> alert ('Up blog thất bại')</script>";
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