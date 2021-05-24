<?php include 'fungsi/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

	<meta charset="utf-8">
	<title>Halaman Admin</title>
	<style type="text/css">
		.latar {
    margin: 0;
    padding: 0;
    background: url(3.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed; 
    font-family: sans-serif; 
   }
   .tranparan{
    opacity:0.8;
    }
   </style>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
	  <a class="navbar-brand " href="index.php">
	  	<b class="text-center">Menu Artikel</b>
	  </a>
	  
	    	</h5>
	    </div>
	  </div>
	</nav>
<div class="row no-gutters mt-5">
		<div class="col-md-3 bg-dark mt-2 pr-3 pt-4">
		  <ul class="nav flex-column ml-3 mb-5">
			  <li class="nav-item">
			    <a class="nav-link active text-white" href="../index.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-dark">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="index.php"><i class="far fa-edit mr-2"></i> Kelola Artikel</a><hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="login/registrasi.php"><i class="fas fa-user-plus mr-2"></i> Tambah Admin</a><hr class="bg-secondary">
			  </li>

		 </ul>
		</div>
	<div class="bg-white col-md-9 p-5 pt-2">
					<div class="latar"> 
		<h3 class="text-center">Daftar Artikel</h3>
		<a href="inputArtikel.php">
			<button class="btn btn-success mt-5">
				Tambah Artikel
			</button>
		</a>
		<hr>
		<a href="../index.php">
		<button class="btn btn-warning">Kembali</button>
		</a>
		<hr>
		<div class="tranparan">
		<?php $data = tampilArtikel(); foreach($data as $row): ?>
			<div class="card card-body">
				<a href="detail.php?ID_Artikel=<?= $row['ID_Artikel'] ?>">
					<?= $row['Judul'] ?>
				</a>
				<hr>
				<a href="editArtikel.php?ID_Artikel=<?= $row['ID_Artikel']  ?>">
					<i class="card card-body">Ubah Data Artikel</i>
				</a>

				<a href="hapusArtikel.php?ID_Artikel=<?= $row['ID_Artikel'] ?>"onclick="return confirm('Apakah anda yakin untuk menghapus artikel ini ?')" >
					<i class="card card-body">Hapus Artikel</i>
				</a>
				<div class="pull-right"><?= jumlahKomentar($row['ID_Artikel']) ?> Komentar</div>
			</div>
			
		<?php endforeach ?>
		</div>
	</div>
</div>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
</body>
</html>