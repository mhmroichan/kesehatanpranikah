<?php 
include 'fungsi/config.php'; 
$rowArtikel  = detailArtikel($_GET['ID_Artikel']);
$rowKomentar = tampilKomentar($_GET['ID_Artikel']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Artikel</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<h3><?= $rowArtikel['Judul'] ?></h3>
		<p>
			<?= $rowArtikel['Isi'] ?>
		</p>
		<hr>
		<form method="post">
			<div class="form-group">
				<label>Nama</label>
				<input type="text" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label>Isi Komentar</label>
				<textarea name="isi" class="form-control" rows="5"></textarea>
			</div>
			<button class="btn btn-primary" type="submit" name="btnkomen">
				Masukan Komentar
			</button>
		</form>
		<hr>
		<?php  
			if (isset($_POST['btnkomen'])) {
				postKomentar($_POST, $_GET['ID_Artikel']);

				echo "<meta http-equiv='refresh' content='1;url=detail.php?ID_Artikel=".$rowArtikel['ID_Artikel']."'>";
			}
		?>
		<!-- <div class="alert alert-success">Oke Dude</div> -->
		<?php foreach ($rowKomentar as $row): ?>

			<div class="well">
			<b><?= $row['Nama'] ?></b> <br>
			<p><?= $row['Isi'] ?></p>
		</div>
		<?php endforeach ?>
		<hr>
		<a href="index.php">
			<button class="btn btn-primary">Kembali Ke Halaman Artikel</button>
		</a>
	</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>