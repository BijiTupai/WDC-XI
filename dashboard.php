<?php
    session_start();
    include 'koneksi.php';
    if ($_SESSION['status'] != "login"){
        header("location:../index.php?pesan=belum_login");
    }
    $email = $_SESSION['email'];
    $query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='email'");
    $row = mysqli_fetch_assoc($query);




?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

    <title>Tugas WDC</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
	  <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | <b>UNIVERSITAS TI</b></a>
		<form class="form-inline my-2 my-lg-0 ml-auto">
		  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		  <button class="btn btn-outline-warning my-2 my-sm-0" type="submit">Search</button>
		</form>
		
		<div class="icon ml-4">
			<h5>
			<i class="fa-solid fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk"></i>
			<i class="fa-solid fa-bell mr-3" data-toggle="tooltip" title="Notifikasi"></i>
			<a href="inilogin.php"><i class="fa-solid fa-right-from-bracket mr-3" data-toggle="tooltip" title="Sign Out"></i></a>
			</h5>
	  </div>
</nav>
	  
<div class="row no-gutters mt-5">
	<div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
		<ul class="nav flex-column ml-3 mb-5">
			 <li class="nav-item">
				<a class="nav-link active text-white" href="dashboard.html"><i class="fa-solid fa-gauge-high mr-2"></i>Dashboard</a><hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="mahasiswa.html"><i class="fa-solid fa-user-graduate mr-2"></i>Daftar Mahasiswa</a><hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="dosen.html"><i class="fa-solid fa-chalkboard-user mr-2"></i>Daftar Dosen</a><hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="pegawai.html"><i class="fa-solid fa-user mr-2"></i>Daftar Pegawai</a><hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="jadwal.html"><i class="fa-solid fa-calendar-days mr-2"></i>Jadwal Kuliah</a><hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="nilai.html"><i class="fa-solid fa-scroll mr-2"></i>Nilai Mahasiswa</a><hr class="bg-secondary">
			  </li>
		</ul>
	</div>
	<div class="colmd-10 p-5 pt-2">
		<h3><i class="fa-solid fa-gauge-high mr-2"></i> DASHBOARD</h3><hr>
		
		<div class="row text-white">
			<div class="card bg-info ml-5" style="width: 18rem;">
			  <div class="card-body">
				<div class="card-body-icon">
				  <i class="fa-solid fa-user-graduate mr-2"></i>
				</div>  
				  <h5 class="card-title">JUMLAH MAHASISWA</h5>
				<div class="display-4">1.200</div>
				<a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right" ml-2></i></p></a>
			 </div>
			</div>
			
			<div class="card bg-success ml-5" style="width: 18rem;">
			  <div class="card-body">
				<div class="card-body-icon">
				  <i class="fa-solid fa-chalkboard-user mr-2"></i>
				</div>  
				  <h5 class="card-title">JUMLAH DOSEN</h5>
				<div class="display-4">58</div>
				<a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right" ml-2></i></p></a>
			 </div>
			</div>
			
			<div class="card bg-danger ml-5" style="width: 18rem;">
			  <div class="card-body">
				<div class="card-body-icon">
				  <i class="fa-solid fa-user mr-2"></i>
				</div>  
				  <h5 class="card-title">JUMLAH PEGAWAI</h5>
				<div class="display-4">21</div>
				<a href=""><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right" ml-2></i></p></a>
			 </div>
			</div>	
		</div>
		
		<div class="row mt-5">
			<div class="card ml-5 text-white text-center" style="width: 18rem;">
			  <div class="card-header bg-warning display-4">
				<i class="fa-brands fa-instagram"></i>
			  </div>
			  <div class="card-body">
				<h5 class="card-title text-warning">INSTAGRAM</h5>
				<a href="#" class="btn btn-warning">FOLLOW</a>
			  </div>
			</div>
			
			<div class="card ml-5 text-white text-center" style="width: 18rem;">
			  <div class="card-header bg-info display-4">
				<i class="fa-brands fa-facebook-f"></i>
			  </div>
			  <div class="card-body">
				<h5 class="card-title text-info">FACEBOOK</h5>
				<a href="#" class="btn btn-info">LIKE</a>
			  </div>
			</div>
			
			<div class="card ml-5 text-white text-center" style="width: 18rem;">
			  <div class="card-header bg-primary display-4">
				<i class="fa-brands fa-twitter"></i>
			  </div>
			  <div class="card-body">
				<h5 class="card-title text-primary">TWITTER</h5>
				<a href="#" class="btn btn-primary">FOLLOW</a>
			  </div>
			</div>
		</div>
		<div class="row mt-5">
			
			<div class="card ml-5 text-white text-center" style="width: 18rem;">
			  <div class="card-header bg-danger display-4">
				<i class="fa-brands fa-youtube"></i>
			  </div>
			  <div class="card-body">
				<h5 class="card-title text-danger">YOUTUBE</h5>
				<a href="#" class="btn btn-danger">SUBSCRIBE</a>
			  </div>
			</div>
			
		</div>
	</div>
</div>
	
	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="admin.js"></script>
  </body>
</html>