<?php
session_start();
require 'functions.php';


//Cek cookie
if( isset($_COOKIE['open']) && isset($_COOKIE['close']) ) {
	$open = $_COOKIE['open'];
	$close = $_COOKIE['close'];

	//Ambil username berdasar id
	$result = mysqli_query($conn, "SELECT username FROM admin WHERE id = $open");
	$row = mysqli_fetch_assoc($result);

	//cek cookie dan username
	if( $close === hash('sha256', $row['username']) ) {
		$_SESSION['login'] = true;
	}
}

if( isset($_SESSION["login"]) ) {
	header("Location: index.php");
	exit;
}


if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
	

	//Cek username
	if( mysqli_num_rows($result) === 1 ) {
		//Cek Password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			// Set session
			$_SESSION["login"] = true;

			//Cek remember me
			if( isset($_POST['remember']) ) {
				//Buat cookie
				setcookie('open', $row['id'], time()+60);
				setcookie('close', hash('sha256', $row['username']),
					time()+60);
			}

			header("Location: index.php");
			exit;
		}
	}

	$error = true;

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
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
   .container {
   	width: 350px;
   	margin: 80px auto;
   	padding: 30px 20px;
   	box-shadow: 0 0 30px 5px black;
   	background-color: rgba(100,100,100, 0.8);
   	color: white;
   }
</style>
</head>
<body class="">
	<div class="">

	<h1>Halaman Login</h1>

	<?php if( isset($error) ) : ?>
		<p style="color: red; font-style: italic;">Username/Password yang anda masukan salah</p>
	<?php endif; ?>

<form action="" method="post">

	<ul>
		<li>
		<label for="username">username :</label>
		<input type="text" name="username" id="username">
		</li>
		<li>
		<label for="password">password :</label>
		<input type="password" name="password" id="password">
		</li>
		<li>
		<input type="checkbox" name="remember" id="remember">
		<label for="remember">remember me :</label>	
		</li>
		<li>
			<button type="submit" name="login">login in</button>
		</li>
	</ul>

</form>
</div>
</body>
</html>