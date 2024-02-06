<?php
function getMaklumat() {
	global $con;
	$id = $_SESSION['no_ic'];
	$query = "SELECT * FROM calon INNER JOIN penjaga on calon.NO_KP_PENJAGA = penjaga.NO_KP_PENJAGA WHERE NO_KP = '$id';";
	$result = mysqli_query($con, $query);
	$maklumatList = mysqli_fetch_array($result);
	return $maklumatList;
	mysqli_close($con);
}
function outputMaklumatPeperiksaan() {
	global $con;
	$id = $_SESSION['no_ic'];
	$query = "SELECT * FROM peperiksaan INNER JOIN subjek ON peperiksaan.KOD_SUBJEK = subjek.KOD_SUBJEK WHERE NO_KP = '$id';";
	$result = mysqli_query($con, $query);
	if (mysqli_num_rows($result) > 0) {
		$i=1;
	while ($data = mysqli_fetch_array($result)) {
		echo "<li>{$data['KOD_SUBJEK']} - {$data['NAMA_SUBJEK']}</li>";
	}
	}
	mysqli_close($con);
}
$maklumat = getMaklumat();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>SISTEM PENDAFTARAN CALON PT3 2018</title>
	</head>
	<body>
		<h1>SISTEM PENDAFTARAN CALON PT3 2018</h1>
		<h2>PELAJAR / IBU BAPA</h2>
		<h3>Maklumat Calon</h3>
		<p>No. Kad Pengenalan Calon: <?php echo $maklumat['NO_KP']; ?></p>
		<p>Nama Calon: <?php echo $maklumat['NAMA_CALON']; ?></p>
		<p>Angka Giliran: <?php echo $maklumat['NO_KP']; ?></p>
		<p>Jantina: <?php echo $maklumat['JANTINA']; ?></p>
		<p>Keturunan: <?php echo $maklumat['KETURUNAN']; ?></p>
		<p>Agama: <?php echo $maklumat['AGAMA']; ?></p>
		<p>Alamat: <?php echo $maklumat['ALAMAT']; ?></p>
		<h3>Maklumat Penjaga</h3>
		<p>No. Kad Pengenalan Penjaga: <?php echo $maklumat['NO_KP_PENJAGA']; ?></p>
		<p>Nama Penjaga: <?php echo $maklumat['NAMA_PENJAGA']; ?></p>
		<p>Status Penjaga: <?php echo $maklumat['STATUS']; ?></p>
		<p>No. Telefon Penjaga: <?php echo $maklumat['NO_TEL']; ?></p>
		<h3>Maklumat Peperiksaan</h3>
		<p>Subjek yang Diambil:</p>
		<ol><?php outputMaklumatPeperiksaan(); ?></ol>
	</body>
</html>