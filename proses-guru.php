<?php
$con = mysqli_connect("localhost", "root", "", "sppt3");
function daftarGuru() {
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_kata_laluan'];
	if($confirm_password == $password) {
	$nama = $_POST['name'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$kata_laluan = password_hash($_POST['password'], PASSWORD_DEFAULT);
	$con = mysqli_connect("localhost", "root", "", "sppt3");
	$query = "INSERT INTO guru (NAMA_GURU, USERNAME, EMAIL, KATA_LALUAN) VALUES ('$nama', '$username', '$email','$kata_laluan');";
	if (mysqli_query($con, $query))
	{
		header('Location: daftar-guru.php?success=1');
	}
	else {
		header('Location: daftar-guru.php?success=0');
	}
} else {
	header('Location: daftar-guru.php?passwordmatch=0');
}
}
daftarGuru();
mysqli_close($con);
?>