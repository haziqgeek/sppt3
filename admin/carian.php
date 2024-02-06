<?php
session_start();
include '../header.php';
isLoggedIn();
$con = mysqli_connect("localhost","root", "", "sppt3");
function getNamaSubjekArray() {
	$con = mysqli_connect("localhost", "root", "", "sppt3");
	$subjek = array();
  $query = "SELECT NAMA_SUBJEK FROM subjek;";
  $result = mysqli_query($con, $query);
  while (($row = mysqli_fetch_assoc($result))) {
  	$subjek[] = $row['NAMA_SUBJEK'];
  }
  return $subjek;
}
function getKodSubjekArray() {
	global $con;
	$subjek = array();
  $query = "SELECT KOD_SUBJEK FROM subjek;";
  $result = mysqli_query($con, $query);
  while (($row = mysqli_fetch_assoc($result))) {
  	$subjek[] = $row['KOD_SUBJEK'];
  }
  return $subjek;
}
function getMaklumat() {
	global $con;
	$id = $_GET["s"];
	$query = "SELECT * FROM calon INNER JOIN penjaga on calon.NO_KP_PENJAGA = penjaga.NO_KP_PENJAGA WHERE NO_KP = '$id';";
	$result = mysqli_query($con, $query);
	$maklumatList = mysqli_fetch_assoc($result);
	return $maklumatList;
	mysqli_close($con);
}
function outputMaklumatPeperiksaan() {
	global $con;
	$id = $_GET["s"];
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
$namasubjekArray = getNamaSubjekArray();
if (in_array(strtoupper($_GET['s']), $namasubjekArray) || in_array($_GET['s'], getKodSubjekArray())) {
	include 'carian-subjek.php';

}
elseif (!is_numeric($_GET['s'])) {
	include 'carian-nama.php';
}
else {
?>
	<body class="bg-light">
		<?php include 'navbar.php'; ?>
		<main class="container">
		<div class="row pt-3">
			<div class="col">
		<h3>Maklumat Calon</h3>
		<p>No. Kad Pengenalan: <?php echo $maklumat['NO_KP']; ?></p>
		<p>Nama: <?php echo $maklumat['NAMA_CALON']; ?></p>
		<p>Angka Giliran: <?php echo $maklumat['ANGKA_GILIRAN']; ?></p>
		<p>Jantina: <?php echo $maklumat['JANTINA']; ?></p>
		<p>Keturunan: <?php echo $maklumat['KETURUNAN']; ?></p>
		<p>Agama: <?php echo $maklumat['AGAMA']; ?></p>
		<p>Alamat: <?php echo $maklumat['ALAMAT']; ?></p>
	</div>
	<div class="col">
		<h3>Maklumat Penjaga</h3>
		<p>No. Kad Pengenalan: <?php echo $maklumat['NO_KP_PENJAGA']; ?></p>
		<p>Nama: <?php echo $maklumat['NAMA_PENJAGA']; ?></p>
		<p>Status: <?php echo $maklumat['STATUS']; ?></p>
		<p>No. Telefon: <?php echo $maklumat['NO_TEL']; ?></p>
	</div>
	</div>
	<div class="row pt-3">
		<div class="col">
		<h3>Maklumat Peperiksaan</h3>
		<p>Subjek yang Diambil:</p>
		<ol id="maklumatPeperiksaan"><?php outputMaklumatPeperiksaan(); ?></ol>
	</div>
	</div>
	<div class="row pt-2">
		<div class="col">
			<button class="btn btn-primary d-print-none" onclick="window.print();">Cetak</button>
			<button class="btn btn-primary d-print-none" onclick="window.location.href='delete.php?id=<?php echo $_GET['s']; ?>'">Padam Pelajar</button>
		</div>
	</div>
	</main>
		<?php } include '../footer.php'; ?>
</html>