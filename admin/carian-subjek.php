<?php
include '../connection.php';
function outputMaklumat() {
	global $con;
	$id = $_GET["s"];
	$query = "SELECT calon.NO_KP, calon.NAMA_CALON FROM `peperiksaan` INNER JOIN calon ON calon.NO_KP = peperiksaan.NO_KP INNER JOIN subjek ON peperiksaan.KOD_SUBJEK = subjek.KOD_SUBJEK WHERE NAMA_SUBJEK = '$id' OR peperiksaan.KOD_SUBJEK = '$id'";
	$result = mysqli_query($con, $query);
	if (mysqli_num_rows($result) > 0) {
    $i=1;
    $count = 1;
  while ($data = mysqli_fetch_array($result)) {
    $no_kp = $data['NO_KP'];
    $nama = $data['NAMA_CALON'];
    echo "<tr>";
    echo "<th scope='row'>{$count}</td>";
    echo "<td><a href='carian.php?s=$no_kp'>{$no_kp}</a></td>";
    echo "<td><a href='carian.php?s=$no_kp'>{$nama}</a></td>";
    echo "</tr>";
    $count++;
  }
  }
}
?>
<body class="bg-light">
<?php include 'navbar.php'; ?>
    <div class="container-fluid">
    		<main role="main" class="bg-light">
    			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-3 border-bottom">
<h1>Hasil Carian : <?php echo $_GET['s']; ?></h1>
</div>
<div class="table-responsive">
 <table class="table table-striped table-sm">
 	<thead class="thead-light">
  <tr>
  	<th scope="col">#</th>
    <th scope="col">No KP Murids</th>
    <th scope="col">Nama Murid</th>
  </tr>
</thead>
  <?php outputMaklumat(); ?>
</table>
</div>
</main>
</div>
<?php include '../footer.php'; ?>