<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>member - Running</title>
	<link rel="stylesheet" href="css/pc.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div id="navigation">
				<span id="mobile-navigation">&nbsp;</span>
				<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
				<ul id="menu">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
					<li>
						<a href="contact.php">Register</a>
					</li>
					<li>
						<a href="news.php">News</a>
					</li>
					<li>
						<a href="bukutamu.php">Guest Book</a>
					</li>
					<li class="selected">
						<a href="login.php">Admin</a>
						<ul>
							<li>
								<a href="member.php">Daftar Admin</a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
		<div id="body" class="contact">
			<div>  
				<h1>ADMIN LOGIN</h1>
				<form action="" method="post">
					<<h2>E-MAIL</h2><input type="text" name="email" placeholder="E-mail"/></br>
					<h2>PASSWORD</h2><input type="text" name="password" placeholder="Password"/></br>
					<input type="submit" name="login" value="Login" /><br>
					<a href="member.php" class="more">Sign Up</a>
				</form>	
				<?php
					if(isset($_POST['login'])){
						include "koneksi_login.php";
						$cek_data = mysqli_query($conn, "SELECT * FROM tb_user WHERE
						email = '".$_POST['email']."' AND password = '".$_POST['password']."'");
						if (mysqli_num_rows($cek_data) > 0){
							header('location:myadmin/main.php');
						}else{
							echo 'gagal login';
						}
					}
						
				?>
			</div>
		</div>
		<div id="footer">
			<div>
				<div class="connect">
					<a href="http://twitter.com" class="twitter">twitter</a>
					<a href="http://facebook.com" class="facebook">facebook</a>
					<a href="http://googleplus.com" class="googleplus">googleplus</a>
					<a href="http://pinterest.com/" class="pinterest">pinterest</a>
				</div>
				<p>&copy; 2023 by RNRNR. All rights reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>
