<?php
session_start();
include 'functions.php';

//error_reporting(E_ERROR | E_WARNING | E_PARSE);
function getInput() {
$input = $_POST['no_ic'];
return $input;
}
function validateInput() {
	$input = getInput();
	$no_ic = getNoKP($input);
	$isInputTrue = (($input == $no_ic));
	$_SESSION['isInputTrue'] = $isInputTrue;
	$_SESSION['no_ic'] = $no_ic;
	if($_SESSION['isInputTrue']) {
		include 'paparan.php';
	}
	else {
		echo "Anda masih belum mendaftar. <a href='daftar-pelajar.php'>Daftar di sini.</a>";
	}
}
validateInput();
?>