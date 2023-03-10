<!DOCTYPE html>
<html>
    <?php 
session_start();
include("control.php");
$get_data=new data();
if (empty($_SESSION['user'])){
    echo "Ban phai dang nhap";
    header('location:login.php');
}
else{
	$select_admin =$get_data -> select_admin($_SESSION['user']);
	foreach($select_admin as $se_admin)
	{
		$user_login = $se_admin['user'];
		$img = $se_admin['file'];
		// echo"Hello ". $se_username["user"]." <a href='logout.php'>Logout<a>";
}
?>
<head>
	<meta charset="UTF-8">
	<title>Contact - Astronomy Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <style>
		.main {
			padding: 100px 100px 700px 100px;
		}
    .inputs{
        background-color: #fff;
	    color: #060606;
	    font: 14px/36px Arial, Helvetica, sans-serif;
        height: 36px;
        width: 440px;
        border: 0;
	    margin-right: 10px;
	    padding: 0 10px;
    }
table {
	font-family: Arial, Helvetica, sans-serif;	
	border-collapse: collapse;
	width: 100%;
}

table th {
	padding-top: 12px;
	padding-bottom: 12px;
  	text-align: left;
 	background-color: #1571bdd2;
  	color: white;
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
    <!------------------------Bắt đầu menu----------------------->
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
				<!-- <li>
					<a href="logout.php">Logout</a>
				</li> -->
				<li class="selected">
				<a  href="admin.php"><?php echo $se_admin['user'] ?>
				</li>
				<li style="margin:0px -17px;">
				<img src="img/<?php echo $img;?>" width="35px" height="35px"  style="border-radius:50%"  alt="">
				</li>
				<li>
				 <a href='logout.php'>Logout<a> </a>
				</li>
			</ul>
		</div>
        <!--------------------Hết Menu----------------------------------->
	</div>
	<div id="contents">
		<div id="contact" class="wrapper clearfix">
			
			<div class="main">
                <h1><?php echo "Hello ".$_SESSION["user"]; ?><h1>
				<h1> List User</h1>
				<table>
					<tr>
						<th>ID</th>
						<th>USER</th>
						<th>ADDRESS</th>
						<th>DATE</th>
						<th>FILE</th>
						<th>GENDER</th>
						<th>HOBBIE</th>
						<th colspan="2">OPTION</th>
					</tr>
					<?php
					$select_user_admin=$get_data->select_user_admin();
					foreach($select_user_admin as $se_user_admin){
					?>
					<tr>
						<td><?php echo $se_user_admin['id_user']?></td>
						<td><?php echo $se_user_admin['user']?></td>
						<td><?php echo $se_user_admin['address']?></td>
						<td><?php echo $se_user_admin['date']?></td>
						<td><?php echo $se_user_admin['file']?></td>
						<td><?php echo $se_user_admin['gender']?></td>
						<td><?php echo $se_user_admin['hobbie']?></td>
						<td><a href="update_user.php?update=<?php echo $se_user_admin['id_user']?>" style="color: black;"><i class='bx bxs-wrench'></i></a></td>
						<td><a href="delete_user.php?delete=<?php echo $se_user_admin['id_user'] ?>" style="color: black;" onclick="return(confirm('Are You Sure ?'))"><i class='bx bxs-trash'></i></a></td>
					</tr>
					
					<?php
					}
					?>
						
				</table>
				
			</div>
		</div>
	</div>
	<div id="footer">
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
								<a href="trang1.php">Link Title 1</a>
							</li>
							<li>
								<a href="trang1.php">Link Title 2</a>
							</li>
							<li>
								<a href="trang1.php">Link Title 3</a>
							</li>
						</ul>
					</div>
				</div>
				<div id="newsletter">
					<h4>Newsletter</h4>
					<p>
						Sign up for Our Newsletter
					</p>
					<form action="trang1.php" method="post">
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
<?php
}
?>
</body>
</html>	