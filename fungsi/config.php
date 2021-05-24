<?php


$host = "localhost";
$user = "root";
$pass = "";
$db   = "pra_nikah";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
	echo "Koneksi Gagal";
}

include "fungsi_artikel.php";
include "fungsi_komentar.php";