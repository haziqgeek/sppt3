<?php  
//connect to the database 
session_start();
include '../connection.php';
//
function createTempTable() {
	global $con;
	$query = "CREATE TABLE temp (
NO_KP VARCHAR(12) NOT NULL,
NAMA_CALON VARCHAR(255) NOT NULL,
ANGKA_GILIRAN VARCHAR(20) NOT NULL,
JANTINA VARCHAR(10) NOT NULL,
KETURUNAN VARCHAR(20) NOT NULL,
AGAMA VARCHAR(20) NOT NULL,
ALAMAT TEXT NOT NULL,
NO_KP_PENJAGA VARCHAR(12) NOT NULL,
NAMA_PENJAGA VARCHAR(255) NOT NULL,
STATUS VARCHAR(20) NOT NULL,
NO_TEL VARCHAR(20) NOT NULL,
ID_GURU INT(11) NOT NULL
);";
mysqli_query($con, $query) or die(mysqli_error($con));
}
function insertCalon() {
	global $con;
	$query = "INSERT INTO calon SELECT `NO_KP`, `NAMA_CALON`, `ANGKA_GILIRAN`, `JANTINA`, `KETURUNAN`, `AGAMA`, `ALAMAT`, `NO_KP_PENJAGA`, `ID_GURU` FROM temp;";
	//echo $query;
	mysqli_query($con, $query) or die(mysqli_error($con));
}
function insertPenjaga() {
	global $con;
	$query = "INSERT INTO penjaga SELECT `NO_KP_PENJAGA`, `NAMA_PENJAGA`, `STATUS`, `NO_TEL` FROM temp;";
	//echo $query;
	mysqli_query($con, $query) or die(mysqli_error($con));
}
function truncateTemp() {
	global $con;
	$truncatetemp = "TRUNCATE temp;";
	//echo $truncatetemp;
	mysqli_query($con, $truncatetemp);
}
function deleteNull() {
	global $con;
	$query = "DELETE FROM calon WHERE NO_KP IS NULL || NO_KP = ''; DELETE FROM penjaga WHERE NO_KP_PENJAGA IS NULL || NO_KP_PENJAGA = '';";
	mysqli_query($con, $query);
}
function dropTemp() {
	global $con;
	$query = "DROP TABLE temp;";
	mysqli_query($con, $query) or die(mysqli_error($con));
}
function importData() {
	if ($_FILES["csv"]["type"] == 'application/vnd.ms-excel' || $_FILES["csv"]["type"] == 'text/csv' || $_FILES["csv"]["type"] == 'application/octet-stream') {
	global $con; 
	$id = $_SESSION['uid'];
	$file_name = $_FILES["csv"]["tmp_name"];
	$file_name = str_replace('\\', '/', $file_name);
	$double_quote = '"';
	$query = "LOAD DATA LOCAL INFILE '$file_name' INTO TABLE temp CHARACTER SET 'UTF8' FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '$double_quote' LINES TERMINATED BY '\r\n' IGNORE 1 LINES SET ID_GURU = '$id';";
	mysqli_query($con, $query) or die(mysqli_error($con));
	insertPenjaga();
	insertCalon();
	truncateTemp();
	deleteNull();
	header('Location: import.php?imported=1'); 
	die; 
}
else {
	header('Location: import.php?imported=0'); die; 
}
}
importData();
?> 