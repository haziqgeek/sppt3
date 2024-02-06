<?php
include '../functions.php';
include '../connection.php';
$id = $_GET['id'];
//$query = "DELETE calon, penjaga, peperiksaan FROM calon LEFT JOIN penjaga ON calon.NO_KP_PENJAGA = penjaga.NO_KP_PENJAGA LEFT JOIN peperiksaan ON peperiksaan.NO_KP = calon.NO_KP WHERE calon.NO_KP = '$id'";
$query = "DELETE FROM peperiksaan WHERE NO_KP = '$id'; DELETE calon, penjaga FROM penjaga LEFT JOIN calon ON calon.NO_KP_PENJAGA = penjaga.NO_KP_PENJAGA WHERE calon.NO_KP = '$id'";
echo $query;
mysqli_multi_query($con, $query) or die (mysqli_error($con));
header('Location: index.php?deleted=1'); die;
?>