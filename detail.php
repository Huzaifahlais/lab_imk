<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  	#corner{
  		  border-radius: 25px;
  border: 2px solid grey;
  padding: 20px; 
  width: 200px;
 
  	
}
  </style>
</head>
<div class="container">
  <div class="jumbotron">
    <h1>Perpustakaan Universitas Sumatera<img src="./usu.png" width="100px" align="right" />  </h1>
    <p>Menampilkan Anggota Perpustakaan dengan CRUD</p>
   
    </div>
  
  </div>
    
</div>
	<div class="container" id="corner"style="width:700px;">
	<center><h1>DETAIL DATA</h1></center>
	<button class="btn btn-default"><a href="index.php"></a></button>
	<br>
	<?php 
	include 'koneksi.php';
	$nim = $_GET['nim'];
	$data = mysqli_query($koneksi,"SELECT *FROM perpus WHERE nim = '$nim'");
	WHILE($d = mysqli_fetch_array($data)){
	 ?>
	 
	 <center><form class="form-horizontal" method="post">
	 	<div align="left">
	 <div class="form-group">

	 	<label class="col-sm-4 control-label">NIM</label>
	 	<input class="form-control" type="text" name="nim" value="<?php echo $d['nim']; ?>" readonly>
	 </div>
	 <div class="form-group">
	 	<label class="col-sm-4 control-label">Nama</label>
	 	<input class="form-control" type="text" readonly name="nama" value="<?php echo $d['nama']; ?>">
	 </div>
	 <div class="form-group">
	 	<label class="col-sm-4 control-label">Email</label>
	 	<input class="form-control" type="email" readonly name="email" value="<?php echo $d['email']; ?>">
	 </div>
	 <div class="form-group">
	 	<label class="col-sm-4 control-label">No. HandPhone</label>
	 	<input class="form-control" type="text" readonly name="nohp" value="<?php echo $d['nohp']; ?>">
	 </div>
	 <div class="form-group">
	 	<label class="col-sm-4 control-label">Alamat</label>
	 	<input class="form-control" type="text" readonly name="alamat" value="<?php echo $d['alamat']; ?>">
	 </div>
	  <div class="form-group">
	 	<label class="col-sm-4 control-label">Fakultas</label>
	 	<input class="form-control" type="text" readonly name="fakultas" value="<?php echo $d['fakultas']; ?>">
	 </div>
	  <div class="form-group">
	 	<label class="col-sm-4 control-label">Program Studi</label>
	 	<input class="form-control" type="text" readonly name="prodi" value="<?php echo $d['prodi']; ?>">
	 </div>
	 
	 <center><a href="index.php" class="btn btn-success">KEMBALI</a></center>
	 </form>
	</div>
	<?php
	}
	?>

</body>
</html>