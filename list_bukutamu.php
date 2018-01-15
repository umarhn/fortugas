<?php
include "koneksi_bukutamu.php" ?>
<?php
			  $sql = mysqli_query($conn,"SELECT * FROM tb_bukutamu ORDER BY id DESC");    
			  while($hasil = mysqli_fetch_array($sql)) {     	
			  $nama  = stripslashes($hasil['nama']);  
				$pesan = stripslashes($hasil['pesan']);  
			  ?>
							
				<h2><?php echo $nama;?></h2>
				<p><?php echo $pesan;?></p>
				 <?php } ?>