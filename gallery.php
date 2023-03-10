<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Lịch đặt - Astronomy Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<style>
		.main {
			padding: 0px 100px 700px 100px;
		}
		table {
	font-family: Arial, Helvetica, sans-serif;	
	border-collapse: collapse;
	width: 70%;
}

table th {
	padding-top: 12px;
	padding-bottom: 12px;
  	text-align: left;
 	background-color: #1571bdd2;
  	color: white;
	text-align: center;
}
table tr:hover {background-color: #ddd;}
table tr{background-color: #f2f2f2;}
table td, table th {
  border: 1px solid #ddd;
  padding: 8px;
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
				
				<li>
					<a href="about.php">About</a>
				</li>
				<li >
					<a href="blog.php">Dịch vụ</a>
				</li>
				<li class="selected">
					<a href="gallery.php">Lịch đặt</a>
				</li>
				<li>
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
		// echo"Hello ". $se_username["user"]." <a href='logout.php'>Logout<a>";
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
		<div class="wrapper clearfix">
			<div id="sidebar">
				
				<!-- <div class="click-here">
					<h1>Thêm lịch đặt</h1>
					<a href="themlichdat.php" class="btn1">Click Here!</a>
				</div> -->
			</div>
			<div class="main">
			<h1>Danh sách lịch đặt</h1>
				<table bordor=1>
					<thead>
					<tr>
						<th>ID Khách Hàng</th>
						<th>ID Salon</th>
						<th>ID Thời gian</th>
						<th>ID Dịch vụ</th>
						<th>Trạng thái</th>
					
						
					</tr>
					</thead>
					<?php
					$select_lichdat=$get_data->select_lichdat();
					foreach($select_lichdat as $se){
					?>
					<tbody>
					<tr>
					
					<td><?php echo $se['IDKhachHang']?></td>
						<td><?php echo $se['IDSalon']?></td>
						<td><?php echo $se['IDThoiGian']?></td>
						<td><?php echo $se['IDDichVu']?></td>
						<td><?php echo $se['TrangThai']?></td>
					</tr>
					</tbody>
					<?php
					}
					?>
				</table>
				</ul>
				
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