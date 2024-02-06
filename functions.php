<?php
$con = mysqli_connect("localhost", "root", "", "sppt3");
function getHomeURL() {
	$homeURL = "http://";
	if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
		$homeURL = "https://";
	}
	$homeURL .= $_SERVER['HTTP_HOST'];
	$homeURL .= str_replace("/admin", "", dirname($_SERVER['PHP_SELF']));
	return $homeURL;
}
function getNoKP($input) {
	
	global $con;
	$no_kp = null;
	$query = "SELECT NO_KP FROM calon WHERE NO_KP = '$input';";
	$result = mysqli_query($con, $query);
	if(mysqli_num_rows($result) > 0) {
	while ($data = mysqli_fetch_assoc($result)) {
		$no_kp = $data['NO_KP'];
	}
}
	return $no_kp;
	mysqli_close($con);

}
function isLoggedIn(){
	if (empty($_SESSION['uid'])) {
	header('Location: ../login.php?error=3');
}
}
?>