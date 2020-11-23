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
     <script> 
function tampilkan(){
  var nama_fak=document.getElementById("insert_form").fakultas.value;
  if (nama_fak=="Fakultas Kedokteran")
    {
        document.getElementById("prodi").innerHTML="<option value='Program Studi Belum Terpilih' readonly>Pilih Program Studi</option><option value='S1-Pendidikan Dokter'>S1-Pendidikan Dokter</option>";
    }
  else if (nama_fak=="Fakultas Ilmu Budaya")
    {
        document.getElementById("prodi").innerHTML=
        " <option value='Program Studi Belum Terpilih' readonly>Pilih Program Studi</option><option value='S1-Satra Indonesia'>S1-Satra Indonesia</option><option value='S1-Satra Melayu'>S1-Satra Melayu</option><option value='S1-Satra Batak'>S1-Satra Batak</option><option value='S1-Satra Arab'>S1-Satra Arab</option><option value='inggris'>S1-Satra Inggris</option><option value='jepang'>S1-Satra Jepang</option><option value='S1-Sastra Cina'>S1-Sastra Cina</option><option value='S1-Ilmu Perpustakaan'>S1-Ilmu Perpustakaan</option><option value='S1-Ilmu Sejarah'>S1-Ilmu Sejarah</option><option value='S1-Etnomusikologi'>S1-Etnomusikologi</option>";
    }

      else if (nama_fak=="Fakultas Ilmu Komputer dan Teknologi Informasi")
    {
        document.getElementById("prodi").innerHTML="<option value='Program Studi Belum Terpilih' readonly>Pilih Program Studi</option><option value='S1-Ilmu Komputer'>S1-Ilmu Komputer</option><option value='S1-Teknologi Informasi'>S1-Teknologi Informasi</option>";
    }
}
	</script>
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
    <h1>Perpustakaan Universitas Sumatera Utara<img src="./usu.png" width="100px" align="right" />  </h1>
    <p>Menampilkan Anggota Perpustakaan dengan CRUD</p>
   
    </div>
  
  </div>
    
</div>
	<br /> <br/>
	<div class="container" id="corner" style="width:700px;"> 
   <h4 align="center">Tambah Data </h4>  
   <div class="alert alert-success alert-dismissible fade show">
  <div class="row vertical-align">
        <div class="col-sm-11">
      <center><strong>Perhatian!</strong> Harap hat-hati untuk mengisi form.</center>
    </div>
  </div>
   <br />  
   <div class="table-responsive">
    <div align="left">

<form method="post" id="insert_form" name="insert_form" action="input_aksi.php">
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
