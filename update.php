<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Homepage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
  <style>
  	#corner{
  border-radius: 25px;
  border: 2px solid grey;
  padding: 30px; 
  width: 400px;}
  #small{
  	color: red;
  }
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

	<div class="container" style="width:700px;" id="corner" >
	<center><h1>EDIT DATA</h1></center>
	<button class="btn btn-default"><a href="index.php"></a></button>
		
	<?php 
	include 'koneksi.php';
	$nim = $_GET['nim'];
	$data = mysqli_query($koneksi,"SELECT *FROM perpus WHERE nim = '$nim'");
	WHILE($d = mysqli_fetch_array($data)){
	 ?>
	 <div class="form-group">
	 	<label class="col-sm-4 control-label">NIM <small id="small"> *</small></label>
	 	<input class="form-control" type="text" name="nim" value="<?php echo $d['nim']; ?>" minlength="9" maxlength="9"required>
	 </div>
	 <div class="form-group">
	 	<label class="col-sm-4 control-label">Nama<small id="small"> *</small></label>
	 	<input class="form-control" type="text"  name="nama" value="<?php echo $d['nama']; ?>" required>
	 </div>
	 <div class="form-group">
	 	<label class="col-sm-4 control-label">Email<small id="small"> *</small></label>
	 	<input class="form-control" type="email"  name="email" value="<?php echo $d['email']; ?>" required>
	 </div>
	 <div class="form-group">
	 	<label class="col-sm-4 control-label">No. HandPhone<small id="small"> *</small></label>
	 	<input class="form-control" type="text"  name="nohp" value="<?php echo $d['nohp']; ?>" minlength="11" maxlength="13" required>
	 </div>
	 <div class="form-group">
	 	<label class="col-sm-4 control-label">Alamat<small id="small"> *</small></label>
	 	<input class="form-control" type="textarea"  name="alamat" value="<?php echo $d['alamat']; ?>" required>
	 </div>
	  <label>Fakultas:<small id="small"> *</small></label>
  <br/>
  <select id="fakultas" name="fakultas" >
  	<option value="Pilih Fakultas" readonly>Pilih Fakultas</option>
    <option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
    <option value="Fakultas Ilmu Budaya">Fakultas Ilmu Budaya</option> 
      <option value="Fakultas Ilmu Komputer dan Teknologi Informasi">Fakultas Ilmu Komputer dan Teknologi Informasi</option>
  </select>
  <br/><br/>
   <label>Program Studi:<small id="small"> *</small></label> 
   <br/>
   <select id="prodi" name="prodi">
    <option value="tampilkan" readonly>Pilih Program Studi</option>
  </select>
<br /><br/ >
<small id="small">* Wajib diisi</small>
<br/><br/>
	 <button type="submit" class="btn btn-success" onclick="return confirm('Periksa kembali data anda dan Klik OK jika data sudah benar')">Edit</button>
	 </form>

	</div>
	<?php
	}
	?>

</body>
 <br /><br/>
</html>