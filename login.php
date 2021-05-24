<?php 
//file ini merupakan file login untuk mahasiswa
session_start();
 include 'config/koneksi.php';

//cek login
if (isset($_POST['login'])) { //apabila tombol login dijalankan

//mendapatkan input dari pengguna
$username=$_POST['username'];
$password=$_POST['password'];

//mencek di database tabel admin adakah username dan passwordnya 
$login="SELECT * FROM admin WHERE username='$username'";
$cek=mysql_query($login);
$ketemu=mysql_num_rows($cek);

$login2="SELECT * FROM admin WHERE password='$password'";
$cek2=mysql_query($login2);
$ketemu2=mysql_num_rows($cek2);

$login3="SELECT * FROM admin WHERE username='$username' AND password='$password'";
$cek3=mysql_query($login3);
$ketemu3=mysql_num_rows($cek3);

$r=mysql_fetch_array($cek3);

// menampilkan pesan gagal jika belum memasukan username dan password
if ($ketemu == 0 & $ketemu2 == 0){
echo "<script> alert ('Username dan Password anda tidak valid ! Mohon periksa kembali.');
window.location = 'login.php'</script>";
}
// menampilkan pesan gagal jika username salah
else if ($ketemu == 0){
echo "<script> alert ('Username anda tidak valid ! Mohon periksa kembali.');
window.location = 'login.php'</script>";
}

// menampilkan pesan gagal jika password salah
else if ($ketemu2 == 0){
echo "<script> alert ('Password anda tidak valid ! Mohon periksa kembali.');
window.location = 'login.php'</script>";
}

//jika ketemu dibuat sesi loginnya
else {
//detail sesi loginnnya
  $_SESSION['id_admin'] = $r['id_admin'];
  $_SESSION['username'] = $r['username'];
  $_SESSION['password'] = $r['password'];
  
  

                            
									
//login berhasil
echo "<script> alert ('Login Berhasil');
window.location = 'artikeladmin/index.php'</script>";
}
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
<body class="latar">
	<div class="container">

	<h1>Halaman Login</h1>

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