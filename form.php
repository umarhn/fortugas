<div class="box-form">
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
	<h2>Form Pendaftaran</h2>
	<form action="" method="post">
		<?php
			$data = mysqli_query($conn, "SELECT MAX(no_pendaftara) AS idp FROM tb_daftar");
			$data_akhir = mysqli_fetch_array($data);
			$id1 = $data_akhir['idp'];
			$id2 = substr($id1,3,2);
			$id3 = $id2 + 1;
			$id4 = 'USR'.sprintf('%02s',$id3);
		?>
		<input type="hidden" name="id" value="<?php echo $id4 ?>" /><br>
		Nama Lengkap<br>
		<input type="text" name="nama" value=""/><br>
		Jenis Kelamin<br>
		<input type="radio" name="jk" value="laki-laki" title="Laki-Laki" /> Laki-laki &nbsp;&nbsp;&nbsp; 
		<input type="radio" name="jk" value="perempuan" title="Perempuan"/> Perempuan<br>
		Tempat Lahir<br>
		<input type="text" name="tmplahir" required /></br>
		Tanggal lahir<br>
		<input type="date" name="tgl_lhr" required /></br>
		Alamat<br>
		<textarea name="alamat" rows="4" cols="50" required></textarea></br>
		Telepon / Hp<br>
		<input type="text" name="telp" required /></br>
		E-mail<br>
		<input type="text" name="email" required /></br>
		
		<input type="submit" name="daftar" value="Daftar" /><br>
	</form>
</div>
		