
<?php include 'fungsi/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS Koneksi -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <!-- Header area -->
    <title>Website informasi</title>
    <style type="text/css">
	.latar {
    margin: 0;
    padding: 0;
    background: url(gambar/2.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed; 
    font-family: sans-serif; 
   }
   .huruf {
   font-size: 35px;
   font-family: verdana;
   color: black;
   text-shadow: 0 0 12px white;
   background-color:rgba(30,194,93, 0.6);
   box-shadow: 0 0 30px 5px grey;
   }
   .huruf1{
   font-size: 25px;
   font-family: arial;
   color: black;
   }
</style>
</head>
<body class="latar">
	   <nav class="navbar navbar-expand-lg navbar-light bg-success  ">

    <div id="wrapper">
   <div class="display-4 ">  <i class="fas fa-venus-mars "></i> | <b class="huruf1">WEBSITE INFORMASI KESEHATAN PRA NIKAH</b>
    </div>
    </div>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

     <!------------------------------------------------------------------------------------------------------>

      <div class="icon ml-auto">
        <h5>
          <a href="login.php"><i class="fas fa-user-lock mr-4 text-dark" data-toggle="tooltip" title="Halaman Admin"></i></a>
        </h5>
      </div>
    </div>
  </nav>
<br>
<marquee class="huruf" style="border:BLACK 1px SOLID" >SELAMAT DATANG DI WEBSITE INFORMASI KESEHATAN PRA NIKAH</marquee>
<hr>
	<div class="container">
		<hr>
		<?php $data = tampilArtikel(); foreach($data as $row): ?>
			<div class="card card-body text-center mr-5 ml-5">
				<a href="detail.php?ID_Artikel=<?= $row['ID_Artikel'] ?>">
					<?= $row['Judul'] ?>
				</a>
			</div>
			<br>
		<?php endforeach ?>
	</div>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="user.js"></script>

    <hr class="bg-danger">
    <div id="container">
    <div id="header">
    </div>
    <div id="footer" class="text-center bg-white text-dark">
      Copyright &copy; 2020
      Designed by Muhammad Roichan
    </div>
    </div>
    <hr class="bg-danger"> 
</body>
</html>