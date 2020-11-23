<?php 
include 'koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];
$fakultas = $_POST['fakultas'];
$prodi = $_POST['prodi'];

$data = mysqli_query($koneksi, "UPDATE perpus SET nama = '$nama',email = '$email',nohp = '$nohp',alamat = '$alamat', fakultas = '$fakultas', prodi = '$prodi' WHERE nim = $nim "); 

if(!$data){
    die('Query error : ' .mysqli_errno($koneksi).' - ' .mysqli_error($koneksi));
}

header("location:index.php");

?>