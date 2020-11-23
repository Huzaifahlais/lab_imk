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
  width: 200px;}
   #small{
  	color: red;
  }
 
  	}
  </style>
	<title>Homepage</title>
</head>
<div class="container">
  <div class="jumbotron">
    <h1>Perpustakaan Universitas Sumatera<img src="./usu.png" width="100px" align="right" />  </h1>
    <p>Menampilkan Anggota Perpustakaan dengan CRUD</p>
   
    </div>
  
  </div>
    
</div>
	<br /> <br/>
	<div class="container" id="corner" style="width:700px;"> 
   <h4 align="center">Tambah Data </h4>  
   	
   <br />  
   <div class="table-responsive">
    <div align="left">
		<table>
     <label>NIM<small id="small"> *</small></label>
     <input type="text" name="nim" id="nim" minlength="9" maxlength="9" class="form-control" required />
     <br />
     <label>Nama<small id="small"> *</small></label>
     <input type="text" name="nama" id="nama" class="form-control" required/>
     <br />
     <label>Email<small id="small"> *</small></label>
     <input type="email" name="email" id="email" class="form-control" required/>
     <br />
     <label>No HP<small id="small"> *</small></label>
     <input type="text" name="nohp" id="nohp" placeholder="08xx-xxxx-xxxx" minlength="11" maxlength="13" class="form-control" required />
     <br />
     <label>Alamat<small id="small"> *</small></label>
     <input type="textarea" name="alamat" id="alamat" class="form-control" required />
     <br />
    
  <label>Fakultas:<small id="small"> *</small></label>
  <br/>
  <select id="fakultas" name="fakultas">
  	<option value="Pilih Fakultas" readonly>Pilih Fakultas</option>
    <option value="Fakultas Kedokteran">Fakultas Kedokteran</option>
    <option value="Fakultas Ilmu Budaya">Fakultas Ilmu Budaya</option> 
      <option value="Fakultas Ilmu Komputer dan Teknologi Informasi">Fakultas Ilmu Komputer dan Teknologi Informasi</option>
  </select>
  <br/><br/>
   <label>Program Studi:<small id="small"> *</small></label> 
   <br/>
   <select id="prodi" name="prodi">
    <option value="Program Studi Belum Terpilih" readonly>Pilih Program Studi</option>
  </select>
<br /><br/ >
<small id="small">* Wajib diisi</small>

     
   </div>
		</table>
		<br>
		<center>
			<input class="btn btn-success" type="submit" value="SIMPAN" onclick="return confirm('Periksa kembali data anda dan Klik OK jika data sudah benar')">  <a href="index.php" class="btn btn-secondary">KEMBALI</a>
	</form>
</center>
</body>
 <br /><br/>
</html>