<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $q=mysqli_query($con,"UPDATE `posyandu` SET `nama`='$nama',`alamat`='$alamat' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>