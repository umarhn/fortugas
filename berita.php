<!-- Section: news -->
<?php  
include "koneksi_berita.php";  
?>
<?php
  $sql = mysqli_query($conn,"SELECT * FROM tb_berita ORDER BY id DESC");    
  while($hasil = mysqli_fetch_array($sql)) {     	
  $headline  = stripslashes($hasil['headline']);  
 	$isi = stripslashes($hasil['isi']);  
  ?>
                
    <h1><?php echo $headline;?></h1>
     <p><?php echo $isi;?></p>
	 <p>----------------------------------------------------------------------------------------------</P>
  <?php } ?>