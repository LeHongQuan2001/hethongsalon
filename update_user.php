<?php
ob_start();
include("control.php");
$get_data=new data();
$select=$get_data->select_info($_GET['update']);
foreach($select as $se){
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
	.imageChange {
		max-width: 250px;
		height: auto;
	}
	#file{
	
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
                <?php
				session_start();
				
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
					<h1>Register now!</h1>
					<a href="register.php" class="btn1">Click Here!</a>
				</div>
			</div>
			<div class="main">
				<h1>Update <?php echo $se['user'] ?></h1>
				<form  method="post" enctype="multipart/form-data">
					<ul>
						<li>
							<input type="text"name="txtuser"  placeholder="Enter your new username here." value="<?php echo $se['user'] ?>">
						</li>
                        <li>
                        <select name="txtQueQuan"  class="them">
                            <option value="<?php echo $se['address'] ?>"><?php echo $se['address'] ?></option>
                            <option value="Hà Nội">Hà Nội</option>
                            <option value="Hải Dương">Hải Dương</option>
                            <option value="Hưng Yên">Hưng Yên</option>
                        </select>
                        </li>
                        <li>
                        	<input type="date" name="txtDate"  class="them" value="<?php echo $se['date'] ?>">
                        </li>
                        <li>
							<h1> Old File</h1>
							<img src="img/<?php echo $se['file'] ?>" alt="" class="imageChange">
						</li><li>
							<h1> New File</h1>
                        	<input type="file" name="txtFile" class="them" >
                        </li>
                        <div class="them">
                            <label style="color: #fff;">Giới tính:</label>
                            <input type="radio" name="gioitinh" value="Nam"<?php if ($se['gender']=='Nam') echo 'checked';?>><label> Nam</label>
                            <input type="radio" name="gioitinh" value="Nữ" <?php if ($se['gender']=='Nữ') echo 'checked';?>><label>Nữ</label>
                            <input type="radio" name="gioitinh" value="Khác" <?php if ($se['gender']=='Khác') echo 'checked';?>><label>Khác</label>
                        </div>
                        <div class="them">
                            <label style="color: #fff;">Sở thích</label>
                            <input type="checkbox" name="sothich[]" value="Học" <?php if(strlen(strstr($se['hobbie'],'Học'))>0) echo 'checked';?>><label>Học</label>
                            <input type="checkbox" name="sothich[]" value="Xem phim"<?php if(strlen(strstr($se['hobbie'],'Xem phim'))>0) echo 'checked';?>><label>Xem phim</label>
                            <input type="checkbox" name="sothich[]" value="Chơi game"<?php if(strlen(strstr($se['hobbie'],'Chơi game'))>0) echo 'checked';?>><label>Chơi game</label>
                        </div>
                        
						<li>
							<input  name="txtupdate" type="submit" value="Update" class="btn3">
                        </li>
					</ul>
				</form>

				<?php } ?>
                <?php
	    if(isset($_POST["txtupdate"]))
    {
            $hobbie="";
            foreach($_POST["sothich"] as $key)//cú pháp duyệt mảng
            {
            	$hobbie.=$key."";
            }
			if (empty($_FILES['txtFile']['name'])){
				$_FILES['txtFile']['name']=$se['file'];
			}
			
            	move_uploaded_file($_FILES['txtFile']['tmp_name'],"img/".$_FILES['txtFile']['name']);
	            $update=$get_data->update_user($_POST["txtuser"],$_POST["txtQueQuan"],$_POST["txtDate"],$_FILES["txtFile"]["name"],$_POST["gioitinh"],$hobbie,$_GET['update']);
            	if($update)
            	{
					header('location: admin.php');
            	}
            	else{
                	echo"<script> alert('Không thành công')</script>";
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
