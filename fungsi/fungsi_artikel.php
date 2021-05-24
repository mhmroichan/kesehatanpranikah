<?php

function tampilArtikel()
{
	global $conn;

	$query = "SELECT * FROM artikel";
	$res   = mysqli_query($conn, $query);

	$row   = [];

	while ($rows = mysqli_fetch_assoc($res)) {
		$row[] = $rows;
	}

	return $row;
}	

function detailArtikel($idArtikel)
{
	global $conn;

	$query = "SELECT * FROM artikel WHERE ID_Artikel = '$idArtikel' ";
	$res   = mysqli_query($conn, $query);

	$row   = mysqli_fetch_assoc($res);

	return $row;
}

function postArtikel($data)
{
	global $conn;

	$judul = $data['judul'];
	$isi   = $data['isi'];

	$query = "INSERT INTO artikel VALUES ('', '$judul', '$isi')";

	if (mysqli_query($conn, $query)) {
		echo "<div class='alert alert-success'>Artikel anda berhasil diposting</div>";
	}
}

function editArtikel($data, $idArtikel)
{
	global $conn;

	$judul = $data['judul'];
	$isi   = $data['isi'];

	$query = "UPDATE artikel SET Judul = '$judul', Isi = '$isi' WHERE ID_Artikel = '$idArtikel' ";

	if (mysqli_query($conn, $query)) {
		echo "<div class='alert alert-success'>Artikel anda berhasil diperbaharui</div>";
	}
}

function hapusArtikelKomen($idArtikel)
{
	global $conn;

	$query = "DELETE artikel.*, komentar.* FROM artikel, komentar WHERE artikel.ID_Artikel = '$idArtikel' AND komentar.Artikel ='$idArtikel'";
	
	if (mysqli_query($conn, $query)) {
		echo "Artikel anda berhasil dihapus";
	}
}

function hapusArtikel($idArtikel)
{
	global $conn;

	$query = "DELETE FROM artikel WHERE ID_Artikel ='$idArtikel'";
	
	if (mysqli_query($conn, $query)) {
		echo "Artikel anda berhasil dihapus";
	}
}

function cekPunyaKomen($idArtikel)
{
	global $conn;
	$query = "SELECT * FROM komentar WHERE artikel = '$idArtikel' ";
	$res   = mysqli_query($conn, $query);

	$cek   = mysqli_num_rows($res);

	if ($cek > 0 ) {
		hapusArtikelKomen($idArtikel);
	} else {
		hapusArtikel($idArtikel);
	}


}

function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//Cek username ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
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
	//Enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//Tambahkan userbaru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($conn);
}