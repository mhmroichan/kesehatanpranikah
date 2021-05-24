<?php  

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

	<title>Halaman Admin</title>
</head>
<body>
	<!-- bagian 1 -->
	<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
	  <a class="navbar-brand" href="index.php">HALO SELAMAT DATANG ADMIN</a>
	  
	    <div class="icon ml-auto">
	    	<h5>

	    		<a href="admin/login/logout.php"><i class="fas fa-sign-out-alt mr-3 text-dark" data-toggle="tooltip" title="Sign Out"></i></a>

	    	</h5>
	    </div>
	  </div>
	</nav>
<!-- ---------------------------------------------------- -->
	<div class="row no-gutters mt-5">
		<div class="col-md-3 bg-dark mt-2 pr-3 pt-4">
		  <ul class="nav flex-column ml-3 mb-5">
			  <li class="nav-item">
			    <a class="nav-link active text-white" href="index.php"><i class="fas fa-tachometer-alt mr-2"></i> Dashboard</a><hr class="bg-dark">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="admin/index.php"><i class="far fa-edit mr-2"></i> Kelola Artikel</a><hr class="bg-secondary">
			  </li>
			  <li class="nav-item">
			    <a class="nav-link text-white" href="admin/login/registrasi.php"><i class="fas fa-user-plus mr-2"></i> Tambah Admin</a><hr class="bg-secondary">
			  </li>

		 </ul>
		</div>
		<!-- ------------------------------------------- -->
		<div class="bg-white col-md-9 p-5 pt-2">
			<h3><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD</h3><hr>

			<div class="card bg-success ml-4" style="width: 18rem;">
				  <div class="card-body">
				  	<div class="card-body-icon">
				  		<i class="far fa-newspaper mr-2"></i>
				  	</div>
				    <h5 class="card-title">JUMLAH ARTIKEL</h5>
				    <div class="display-4">4</div>
				</div>
			</div>
		</div>ss

		</div>
	</div>
</div>



<!-- Akhir bootstrap -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>


</body>
</html>