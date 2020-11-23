<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/752056054c.js" crossorigin="anonymous"></script>
<script>$(document).ready(function(){$('[data-toggle="tooltip"]').tooltip();});</script>
  <style>
	  tr{
    text-align: center;
  }
  	#corner{
  		  border-radius: 25px;
  border: 2px solid grey;
  padding: 20px; 
  width: 200px;}

  .footer{
    width: 100%;
    height: 50px;
    padding-left: 10px;
    line-height: 50px;
    background: #333;
    color: #fff;
    position: absolute;
    bottom: 0px;
}
 
  	
  </style>
   
	<title>Homepage</title>
</head>

<div class="container">
  <div class="jumbotron">
    <h1>Perpustakaan Universitas Sumatera Utara<img src="./usu.png" width="120px" align="right" />  </h1>
    <p>Menampilkan Anggota Perpustakaan dengan CRUD</p>
   
    </div>
  
  </div>
    
</div>

	<div class="container" style="width:700px;" id="corner" >
	<center><h2 class="text">Daftar Anggota Perpustakaan <br> Universitas Sumatera Utara</h2></center>
<br/>
	<div align="center">
	<a href="input.php" class="btn btn-secondary btn-xs" role="button">TAMBAH DATA</a></center>
<br/><br/>
<center>
<table class="table table-bordered">
      <tr>
       <th width="20%">NIM</th>  
       <th width="40%">Nama</th> 
       <th width="40%">Aksi</th>
      </tr>
<?php
include 'koneksi.php' ;
$data = mysqli_query($koneksi,"SELECT * FROM perpus ORDER BY id ASC");
while($d = mysqli_fetch_array($data)){
	?>

<tr>
	<td><?php echo $d['nim'];?></td>
	<td><?php echo $d['nama'];?></td>
	<td>
	<a href="detail.php?nim=<?php echo $d['nim'];?>" class="btn btn-info" role="button" data-toggle="tooltip" data-placement="bottom" title="LIHAT"><span class='fas fa-eye'></span></a>
	<a href="update.php?nim=<?php echo $d['nim'];?>" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="EDIT"><span class="fas fa-pencil-alt"></span></a>
	<a href="delete.php?nim=<?php echo $d['nim'];?>" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="HAPUS"; onclick="return confirm('Apakah anda yakin ingin menghapus item ini?')"><span class="fas fa-trash"></span></a>
  </td>
</tr>


	</div>
</div>

<?php } ?>

</table>
</center>
</body>
</div>
</div>
<?php
include 'footer.php';
?>
</html>
<br><br>
