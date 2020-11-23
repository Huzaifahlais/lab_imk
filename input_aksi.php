<?php

include 'koneksi.php' ;


$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$fakultas = $_POST['fakultas'];
$prodi = $_POST['prodi'];

$data= "INSERT INTO perpus (nim,nama,email,nohp,alamat,fakultas,prodi)  
values('$nim','$nama','$email','$nohp','$alamat', '$fakultas', '$prodi')";
mysqli_query($koneksi, $data);


header("location:index.php");

?>