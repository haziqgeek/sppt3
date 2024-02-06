<?php
session_start();
$email = $_POST['email'];
$password = $_POST['password'];
$con = mysqli_connect('localhost', 'root', '', 'sppt3');
$query = "SELECT ID_GURU, KATA_LALUAN, USERNAME FROM guru where EMAIL='$email' OR USERNAME='$email';";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if($row['ID_GURU'] >= 1 && password_verify($password, $row['KATA_LALUAN'])) {
	$_SESSION['uid'] = $row['ID_GURU'];
	$_SESSION['username'] = $row['USERNAME'];
	header('Location: ./admin/?loggedin=true');
}
elseif ($row['ID_GURU'] == null) {
	header('Location: login.php?error=1');
}
else {
	header('Location: login.php?error=2');
}
?>