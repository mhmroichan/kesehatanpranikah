<?php  
// Koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "pra_nikah");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//Cek username ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM admin WHERE username = '$username'");
	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('Username sudah terpakai mohon cari username lain :( ');
				</script>";
			return false;
	}


	//Cek konfirm password
	if( $password !== $password2 ) {
		echo "<script>
					alert('Konfirmasi password tidak sesuai :(');
				</script>";
		return false;
	}

	$password=$_POST['password'];

	//Tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO admin VALUES('', '$username', '$password')");

	return mysqli_affected_rows($conn);
}

?>