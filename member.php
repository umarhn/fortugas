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
		<div id="body" class="contact">
			<div>
				<?php  
				include "koneksi_login.php";  //jika ditekan tombol submit  
				if(isset($_POST['daftar'])) {  

				 $nama  = addslashes($_POST['nama']);  

					$email  = addslashes($_POST['email']);  

					$password  = addslashes(strip_tags($_POST['password']));  

				 //jika nama dan pesan tidak kosong  
				 if(!empty($nama) && !empty($password)) {  

					$sql	=	mysqli_query($conn,"INSERT INTO tb_user(nama,email,password) VALUES('$nama','$email','$password')");  

					if($sql) {  

					?>  
						<script language="JavaScript">  

						alert('Terima kasih. Anda telah menjadi member');  

						document.location='index.html';  

					</script>  
					<?php  
					} else {  

						echo "Error: " . $sql . "<br>" . mysqli_error($conn);;  }  

				 } else {  

				  ?>  
					<script language="JavaScript">alert('Nama dan pesan harus diisi');</script>  
					<?php  
					}
				}	
				?>  
				<h1>DAFTAR ADMIN</h1>
				<form action="" method="post">
					<h2>NAMA</h2><input type="text" name="nama" value="" onblur="this.value=!this.value?'':this.value;" onfocus="this.select()" onclick="this.value='';"required/>
					<h2>E-MAIL</h2><input type="text" name="email" value="" onblur="this.value=!this.value?'':this.value;" onfocus="this.select()" onclick="this.value='';"/></br>
					<h2>PASSWORD</h2><input type="text" name="password" value="" onblur="this.value=!this.value?'':this.value;" onfocus="this.select()" onclick="this.value='';"/></br>
					<input type="submit" name="daftar" value="Daftar Member" /><br>
				</form>	
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
