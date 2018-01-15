<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>register - Running</title>
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
					<li class="selected">
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
					include "koneksi.php";
					if(isset($_POST['daftar'])){
						$daftar = mysqli_query($conn, "INSERT INTO tb_daftar VALUES
						('".$_POST['id']."',
						'".$_POST['nama']."',
						'".$_POST['jk']."',
						'".$_POST['tmplahir']."',
						'".$_POST['tgl_lhr']."',
						'".$_POST['alamat']."',
						'".$_POST['telp']."',
						'".$_POST['email']."',
						NULL)");
						if($daftar){
							echo 'berhasil daftar';
						}else{
							echo 'gagal daftar';
						}
					}
				?>
				<h1>Form Pendaftaran</h1>
				<form action="" method="post">
					<?php
						$data = mysqli_query($conn, "SELECT MAX(no_pendaftaran) AS idp FROM tb_daftar");
						$data_akhir = mysqli_fetch_array($data);
						$id1 = $data_akhir['idp'];
						$id2 = substr($id1,3,2);
						$id3 = $id2 + 1;
						$id4 = 'USR'.sprintf('%02s',$id3);
					?>
					<input type="hidden" name="id" value="<?php echo $id4 ?>" /><br>
					<h2>NAMA LENGKAP</h2><input type="text" name="nama" value="" onblur="this.value=!this.value?'':this.value;" onfocus="this.select()" onclick="this.value='';"/>
					<h2>JENIS KELAMIN</h2>
					<p>Pria</p> <input type="radio" name="jk" value="Pria" title="Pria"/> &nbsp;&nbsp;&nbsp;
					<p>Wanita</p> <input type="radio" name="jk" value="Wanita" title="Wanita"/><br>
					<h2>TEMPAT LAHIR</h2><input type="text" name="tmplahir" value="" onblur="this.value=!this.value?'Tempat Lahir':this.value;" onfocus="this.select()" onclick="this.value='';" required /></br>
					<h2>TANGGAL LAHIR</h2><input type="date" name="tgl_lhr" value="Tanggal Lahir" onblur="this.value=!this.value?'':this.value;" onfocus="this.select()" onclick="this.value='';"required /></br>
					<h2>ALAMAT</h2><textarea name="alamat" rows="4" cols="50" value="" onblur="this.value=!this.value?'':this.value;" onfocus="this.select()" onclick="this.value='';"required></textarea></br>
					<h2>TELEPON/HP</h2><input type="text" name="telp" value="" onblur="this.value=!this.value?'':this.value;" onfocus="this.select()" onclick="this.value='';"required /></br>
					<h2>E-MAIL</h2><input type="text" name="email" value="" onblur="this.value=!this.value?'':this.value;" onfocus="this.select()" onclick="this.value='';"required /></br>	
					<input type="submit" name="daftar" value="Daftar" /><br>
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
