<?php
session_start();
include 'functions.php';
$con = mysqli_connect("localhost", "root", "", "sppt3");
$angka_giliran = $_POST['angka_giliran'];
$no_ic_penjaga = $_POST['no_ic_penjaga'];
$no_ic = $_POST['no_ic'];
if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}
function daftar_calon() {
	global $con, $angka_giliran, $no_ic_penjaga;
	$nama_calon = $_POST['name'];
	$no_ic = $_POST['no_ic'];
	$jantina = $_POST['jantina'];
	$keturunan = $_POST['keturunan'];
	$agama = $_POST['agama'];
	$alamat = $_POST['address'];
	if (!isset($_SESSION['username'])) {
	$guru = $_POST['guru'];
} else {
	$guru = $_SESSION['uid'];
}
	$query = "INSERT INTO calon (ANGKA_GILIRAN, NO_KP, NAMA_CALON, JANTINA, KETURUNAN, AGAMA, ALAMAT, NO_KP_PENJAGA, ID_GURU) VALUES ('$angka_giliran', '$no_ic', '$nama_calon', '$jantina', '$keturunan', '$agama', '$alamat', '$no_ic_penjaga', '$guru');";
	mysqli_query($con, $query);
	}
function daftar_penjaga() {
	global $con, $angka_giliran;
	$no_ic_penjaga = $_POST['no_ic_penjaga'];
	$nama_penjaga = $_POST['lname'];
	$status_penjaga = $_POST['status'];
	$no_tel = $_POST['phone'];
	$query = "INSERT INTO penjaga (NO_KP_PENJAGA, NAMA_PENJAGA, STATUS, NO_TEL) VALUES ('$no_ic_penjaga', '$nama_penjaga', '$status_penjaga', '$no_tel');";
	mysqli_query($con, $query);
}
function isDuplicate() {
	global $con, $no_ic;
	if ($no_ic == getNoKP($no_ic)) {
		return true;
	}
	else {
		return false;
	}

}
function daftar_subjek() {
	global $con, $no_ic;
	$kod_subjek_list = $_POST['subjek'];

	if(is_array($kod_subjek_list)) {
	$query = "INSERT INTO peperiksaan (NO_KP, KOD_SUBJEK) VALUES ";
	foreach ($kod_subjek_list as $kod_subjek) {
		$query .= "('$no_ic', '$kod_subjek'),";
	}
	$query = rtrim($query, ',');
	$query .= ";";
	mysqli_query($con, $query);
	echo $query;
	}

}

if(isDuplicate()) {
header('Location: daftar-pelajar.php?registered=1');
}
else {
	header('Location: daftar-pelajar.php?success=1');
}
daftar_penjaga();
daftar_calon();
daftar_subjek();
mysqli_close($con);
?>