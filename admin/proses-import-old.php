<?php  
//connect to the database 
$con = mysqli_connect("localhost","root", "", "sppt3"); 
//
function importData() {
	if ($_FILES["csv"]["type"] == 'application/vnd.ms-excel' || $_FILES["csv"]["type"] == 'text/csv' || $_FILES["csv"]["type"] == 'application/octet-stream') {
	global $con;
	$file_name = $_FILES["csv"]["tmp_name"];
	$file_name = str_replace('\\', '/', $file_name);
	$double_quote = '"';
	$query = "LOAD DATA LOCAL INFILE '$file_name' INTO TABLE calon CHARACTER SET 'UTF8' FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '$double_quote' LINES TERMINATED BY '\r\n' IGNORE 1 LINES;";
	mysqli_query($con, $query) or die(mysqli_error($con));
	header('Location: import.php?imported=1'); die; 
}
else {
	header('Location: import.php?imported=0'); die; 
}
}
importData();
echo $_FILES["csv"]["type"];
?> 