<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $q=mysqli_query($con,"INSERT INTO `posyandu` (`id`,`nama`,`alamat`) VALUES ('$id','$nama','$alamat')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>