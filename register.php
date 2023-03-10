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
    label{
        color: #69c7d1;
    }
    </style>
</head>
<body> 
	<!-- đày là REGISTER -->
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
                <li >
					<a href="login.php">Login</a>
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
				<div class="click-here">
					<h1>Register now!</h1>
					<a href="register.php" class="btn1">Click Here!</a>
				</div>
			</div>
			<div class="main">
				<h1>Register</h1>
				<form border="1" method="post" enctype="multipart/form-data">
					<ul>
						<li>
							<input type="text"name="txtuser"  placeholder="Enter your user name here.">
						</li>
						<li>
							<input type="password" name="txtpass" placeholder="Enter your password here."  class="them">
						</li>
						<li>
							<input type="password" name="txtpass2" placeholder="Enter your repassword here." class="them">
						</li>
                        <li>
                        <select name="txtQueQuan"  class="them">
                            <option value=" ">--Chọn quê quán--</option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Hải Dương">Hải Dương</option>
                            <option value="Hưng Yên">Hưng Yên</option>
                        </select>
                        </li>
                        <li>
                        <input type="date" name="txtDate"  class="them">
                        </li>
                        <li>
                        <input type="file" name="txtFile" class="them">
                        </li>
                        <div class="them">
                            <label style="color: #fff;">Giới tính:</label>
                            <input type="radio" name="gioitinh" value="Nam"><label> Nam</label>
                            <input type="radio" name="gioitinh" value="Nữ"><label>Nữ</label>
                            <input type="radio" name="gioitinh" value="Khác"><label>Khác</label>
                        </div>
                        <div class="them">
                            <label style="color: #fff;">Sở thích</label>
                            <input type="checkbox" name="sothich[]" value="Học"><label>Học</label>
                            <input type="checkbox" name="sothich[]" value="Xem phim"><label>Xem phim</label>
                            <input type="checkbox" name="sothich[]" value="Chơi game"><label>Chơi game</label>
                        </div>
                        
						<li>
							<input  name="txtregister" type="submit" value="Register" class="btn3">
							<a style="color: white; text-decoration: none;" href="login.php">Login</a> 
                        </li>
					</ul>
				</form>
                <?php
    if(isset($_POST["txtregister"]))
    {
        if(empty($_POST["txtuser"])||empty($_POST["txtpass"])||empty($_POST["txtpass2"]))
            {
          	  echo("<script>alert('Không được để trống');</script>");
            }
        else
        {
        include("control.php");
        $get_data=new data();
        $check_user=$get_data->kt_user($_POST["txtuser"]);
            if($check_user>0)
            {
            echo"<script> alert('User đã tồn tại')</script>";
            }  
            else
            {
            if($_POST["txtpass"]!=$_POST["txtpass2"])
            {
                echo"<script> alert('Password và repassword phải trùng nhau!')</script>";
            }
            else
            {
            $hobbie="";
            foreach($_POST["sothich"] as $key)//cú pháp duyệt mảng
            {
             $hobbie.=$key."";
            }
            move_uploaded_file($_FILES['txtFile']['tmp_name'],"img/".$_FILES['txtFile']['name']);
		
            $register=$get_data->register($_POST["txtuser"],$_POST["txtpass"],$_POST["txtQueQuan"],$_POST["txtDate"],$_FILES["txtFile"]["name"],$_POST["gioitinh"],$hobbie);
            if($register)
            {
                echo"<script> alert('Thành công')</script>";
            }
            else
                echo"<script> alert('Không thành công')</script>";
            }  
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