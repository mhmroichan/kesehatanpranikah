<?php include 'fungsi/config.php'; $row = detailArtikel($_GET['ID_Artikel']) ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Artikel</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<h3 class="text-center">Edit <?= $row['Judul'] ?></h3>
		<form method="post">
			<div class="form-group">
				<label>Judul</label>
				<input type="text" name="judul" class="form-control" value="<?= $row['Judul']?>">
			</div>
			<div class="form-group">
				<label>Isi</label>
				<textarea name="isi" id="editor" class="form-control" rows="10"><?= $row['Isi']?></textarea>
			</div>
			<button class="btn btn-success" type="submit" name="btnedit">
				Simpan Pembaharuan Artikel
			</button>
		</form>
		<?php if (isset($_POST['btnedit'])) {
			editArtikel($_POST, $_GET['ID_Artikel']);
			echo "<meta http-equiv='refresh' content='1;url=index.php'>";
		} ?>
	</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/ckeditor.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>