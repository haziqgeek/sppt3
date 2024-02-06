<?php session_start(); include_once '../header.php'; ?> 
</head> 
<body class="bg-light"> 
<?php
include 'navbar.php';
if(isset($_GET["imported"])){ 
if ($_GET["imported"] == 1) 
    { echo "<div class='alert alert-success' role='alert'>Data anda telah diimport.</div>"; } //generic success notice
    elseif ($_GET["imported"] == 0) {
        echo "<div class='alert alert-danger' role='alert'>Data anda gagal diimport.</div>";
    }}
?>
<div class="container">
    		<main role="main" class="bg-light">
    			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-2 mb-3 border-bottom">
<h1>Import Pelajar</h1>
</div>
<form action="proses-import.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
		<div class="custom-file">
  <label class="custom-file-label" for="csv">Pilih fail maklumat calon (.csv)</label>
  <input class="custom-file-input" name="csv" placeholder="Hanya Format CSV Disokong" type="file" id="csv" accept=".csv" />
</div>
  <!-- Modal -->
<div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="confirmation" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmation">Adakah Anda Pasti?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Sila pastikan bahawa fail ini ialah fail yang tepat.</p>
        <p><strong>Segala maklumat yang diimport adalah muktamad dan tidak boleh disunting.</strong></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Import</button>
      </div>
    </div>
  </div>
</div>
</form>
<button data-target="#confirmation" data-toggle="modal" class="btn btn-primary mt-2">Import</button>
</main>
</div> 
<?php include_once '../footer.php'; ?>