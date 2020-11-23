<?php

include 'koneksi.php'; 

$nim = $_GET['nim'];

$data = mysqli_query($koneksi, "DELETE FROM perpus WHERE nim = $nim");

header("location:index.php");

?>