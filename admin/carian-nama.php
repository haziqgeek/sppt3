<?php
include '../connection.php';
function outputMaklumat() {
	global $con;
	$id = $_GET["s"];
	$query = "SELECT NO_KP, NAMA_CALON FROM calon WHERE NAMA_CALON LIKE '%$id%';";
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
    <th scope="col">No KP Murid</th>
    <th scope="col">Nama Murid</th>
  </tr>
</thead>
  <?php outputMaklumat(); ?>
</table>
</div>
</main>
</div>
<?php include '../footer.php'; ?>