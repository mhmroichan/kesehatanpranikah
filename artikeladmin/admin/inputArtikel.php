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
	<title>Halaman Artikel</title>
		<style type="text/css">
		.latar {
    margin: 0;
    padding: 0;
    background: url(4.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed; 
    font-family: sans-serif; 
   }
	</style>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		    <div class="icon ml-auto">
	    	<h5>
	    		<a href="http://localhost/kesehatanpranikah/artikeladmin/"><i class="fas fa-home mr-3 text-dark" data-toggle="tooltip" title="Halaman Awal"></i></a>

	    		<a href="http://localhost/kesehatanpranikah/artikeladmin/admin/login/logout.php"><i class="fas fa-sign-out-alt mr-3 text-dark" data-toggle="tooltip" title="Sign Out"></i></a>

	    	</h5>
	    </div>
</head>
<body>

	<div class="container">
		<div class="latar">
		<h3 class="text-center">Input Artikel</h3>
		<hr>
		<form method="post">
			<div class="form-group">
				<label>Judul</label>
				<input type="text" name="judul" class="form-control">
			</div>
			<div class="form-group">
				<label>Isi</label>
				<textarea name="isi" id="editor" class="form-control" rows="10"></textarea>
			</div>
			<button class="btn btn-success" type="submit" name="btnsimpan">
				Posting Artikel
			</button>
		</form>
		<hr>
		<?php if (isset($_POST['btnsimpan'])) {
			postArtikel($_POST);
			echo "<meta http-equiv='refresh' content='1;url=index.php'>";
		} ?>
		<hr>
		<a href="index.php">
		<button class="btn btn-primary">Kembali</button>
		</a>
	</div>
	</div>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/ckeditor.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>