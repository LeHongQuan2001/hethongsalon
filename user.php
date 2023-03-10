<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
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
	
	$select_user =$get_data -> select_user($_SESSION['user']);
	foreach($select_user as $se_username)
	{
		$user_login = $se_username['user'];
		$img = $se_username['file'];
		// echo"Hello ". $se_username["user"]." <a href='logout.php'>Logout<a>";
		$_SESSION["file"]=$se_username['file'];
		
}

?>


<head>
	<meta charset="UTF-8">
	<title>Contact - Astronomy Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <style>
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
table.profile th {
	font-family: Arial, Helvetica, sans-serif;	
	border-collapse: collapse;
	width: 100%;
	color:whitesmoke;
font-size: 20px;
	
}
table.profile td {
	color:aliceblue;
	font-size: 20px;
}
table.blog th {
	padding-top: 12px;
	padding-bottom: 12px;
  	text-align: left;
 	background-color: #1571bdd2;
  	color: white;
}
table.blog tr:hover {background-color: #ddd;}
table.blog tr{background-color: #f2f2f2;}
table.blog td, table.blog th {
  border: 1px solid #ddd;
  padding: 8px;
}
	div.profile{
		margin:50px 50px 100px 50px;
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
					<a href="blog.php">Blog</a>
				</li>
				<li class="selected">
				<a  href=""><?php echo $se_username['user'] ?>
				</li>
				<li  style="margin:0px -17px;">
				<img src="img/<?php echo $img;?>" width="35px" height="35px"  style="border-radius:50%">
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
                <!-- <h1><?php echo "Hello ".$_SESSION["user"]; ?><h1> -->

				
				<h1>Profile User</h1>
				<div class="profile">
					<?php
					$select_user1=$get_data->select_user($_SESSION['user']);
					foreach($select_user1 as $se_user){
					?>
					<table class="profile">
					<tr>
						<th>USER :</th>
						<td><?php echo $se_user['user']?></td>
					</tr>
					<tr>
						<th>ADDRESS :</th>
						<td><?php echo $se_user['address']?></td>
					</tr>
					<tr>
						<th>DATE :</th>
						<td><?php echo $se_user['date']?></td>
					</tr>
					<tr>
						<th>IMG :</th>
						<td><img src="img/<?php echo $se_user['file'] ?>"width="400px" alt="" class="imageChange"></td>
					</tr>
					<tr>
						<th>GENDER :</th>
						<td><?php echo $se_user['gender']?></td>
					</tr>
					<tr>
						<th>HOBBIE :</th>
						<td><?php echo $se_user['hobbie']?></td>
					</tr>
					<tr >
						<th colspan="2" style="padding-top:60px;">
							<a href="upblog.php"><input type="submit" value="up blog" class="btn3"style="margin: 10px;"></a>
               				<a href="changepass.php"><input type="submit" name="" value="Change Pass" class="btn3"style="margin: 10px;" ></a>
							<a href="update_user.php?update=<?php echo $se_user['id_user']?>"><input type="submit" value="Edit User" class="btn3"style="margin: 10px;"></a>
						</th>
					</tr>
					<?php
					}
					?>
					</table>
				</div>
				<h1> List Blog</h1>
				<table  class="blog">
					<tr>
						<th>ID BLOG</th>
						<th>AUTHOR</th>
						<th>NAME</th>
						<th>DATE</th>
						<th>SHORT CONTENT</th>
						<th>LONG CONTENT</th>
						<th>LEVEL</th>
						<th >OPTION</th>
					</tr>
					<?php
					$select_blog_user=$get_data->select_blog_user($_SESSION['user']);
					foreach($select_blog_user as $se_blog_user){
					?>
					<tr>
						<td><?php echo $se_blog_user['id_blog']?></td>
						<td><?php echo $se_blog_user['user']?></td>
						<td><?php echo $se_blog_user['name_blog']?></td>
						<td><?php echo $se_blog_user['date_blog']?></td>
						<td><?php echo $se_blog_user['scontent_blog']?></td>
						<td><?php echo $se_blog_user['lcontent_blog']?></td>
						<td><?php echo $se_blog_user['level_blog']?></td>
						<td align="center"><a href="update_blog.php?update=<?php echo $se_blog_user['id_blog']?>" style="color: black;"><i class='bx bxs-wrench'></i></a></td>
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
