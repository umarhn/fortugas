<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>news - Running</title>
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
					<li class="selected">
						<a href="news.php">News</a>
					</li>
					<li>
						<a href="bukutamu.php">Guest Book</a>
					</li>
					<li>
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
		<div id="body">
			<div>
				<h1>Berita terbaru</h1>
				<ul>
					<li>
						<img src="images/blog-image1.png" alt="">
						<div>
							<?php
							include "berita.php";
							?>
						</div>
					</li>
				</ul>
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
