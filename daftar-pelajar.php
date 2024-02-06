<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "sppt3");
function outputSubjekList() {
  $con = mysqli_connect("localhost", "root", "", "sppt3");
  $query = "SELECT * FROM subjek;";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) > 0) {
    $i=1;
    while ($data = mysqli_fetch_array($result)) {
      $kod_subjek = $data['KOD_SUBJEK'];
      $nama_subjek = $data['NAMA_SUBJEK'];
      $id = "subjek_".$kod_subjek;
      echo "<div class='custom-control custom-checkbox'>";
      echo "<input checked id='$id' class='custom-control-input' type='checkbox' name='subjek[]' value='$kod_subjek' />";
      echo "<label for='$id' class='custom-control-label'> {$data['KOD_SUBJEK']} - {$data['NAMA_SUBJEK']}</label>";
      echo "</div>";
    }
  }
}
function outputGuruOption() {
  $con = mysqli_connect("localhost", "root", "", "sppt3");
  $query = "SELECT ID_GURU, NAMA_GURU FROM guru ORDER BY NAMA_GURU;";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) > 0) {
    $i=1;
    while ($data = mysqli_fetch_array($result)) {
      $nama = $data['NAMA_GURU'];
      $id = $data['ID_GURU'];
      echo "<option data-tokens='$nama $id' value='$id'>{$nama}</option>";
    }
  }
}
function outputAlert() {
  if (isset($_GET["success"])) {
    if ($_GET["success"] == 1) {
      echo "<div class='alert alert-success' role='alert'>
      Pendaftaran anda telah berjaya.
      </div>";
    }
    else if ($_GET["success"] == 0) {
      echo "<div class='alert alert-danger' role='alert'>
      Maklumat tidak dapat didaftarkan. Sila semak maklumat sekali lagi.
      </div>";
    }
  }
  if (isset($_GET["registered"])) { 
    if ($_GET["registered"] == 1) {
      echo "<div class='alert alert-info' role='alert'>
      Anda telah berdaftar.
      </div>";
    }
  }
}

mysqli_close($con);
include 'header.php';
?>
</head>
<body class="bg-light">
  <?php include 'admin/navbar.php'; ?>
  <div class="container">
    <?php outputAlert(); ?>
    <form action="proses-pelajar.php" method="POST">
      <fieldset id="calon">
        <legend>MAKLUMAT CALON</legend>
        <div class="form-group row">
          <label for="angka_giliran" class="col-sm-2 col-form-label">Angka Giliran</label>
          <div class="col-auto">
            <input autofocus type="text" class="form-control" id="angka_giliran" name="angka_giliran" maxlength="9" />
          </div>
        </div>
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-auto">
            <input autocomplete="name" placeholder="Seperti Dalam KP" required="" id="name" type="text" class="form-control" name="name" />
          </div>
        </div>
        <div class="form-group row">
          <label for="no_ic" class="col-sm-2 col-form-label">No. Kad Pengenalan</label>
          <div class="col-auto">
            <input pattern="[^-\s]{1,12}$" placeholder="Tanpa '-' atau 'JARAK'" minlength="12" maxlength="12" required="" id="no_ic" type="text" class="form-control" name="no_ic" />
          </div>
        </div>
        <div class="form-group row">
          <span class="col-sm-2 col-form-label">Jantina</span>
          <div class="col-auto">
            <div class="custom-control custom-radio custom-control-inline">
              <input required="" id="lelaki" class="custom-control-input" type="radio" name="jantina" value="LELAKI" />
              <label for="lelaki" class="custom-control-label">Lelaki</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input required="" id="perempuan" class="custom-control-input" type="radio" name="jantina" value="PEREMPUAN" />
              <label for="perempuan" class="custom-control-label">Perempuan</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <span class="col-sm-2 col-form-label">Keturunan</span>
          <div class="col-auto">
            <div class="custom-control custom-radio custom-control-inline">
              <input required="" id="bumiputera" class="custom-control-input" type="radio" name="keturunan" value="BUMIPUTERA" />
              <label for="bumiputera" class="custom-control-label">Bumiputera</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input required="" id="cina" class="custom-control-input" type="radio" name="keturunan" value="CINA" />
              <label for="cina" class="custom-control-label">Cina</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input required="" id="india" class="custom-control-input" type="radio" name="keturunan" value="INDIA" />
              <label for="india" class="custom-control-label">India</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input required="" id="keturunan_lainlain" class="custom-control-input" type="radio" name="keturunan" value="LAIN-LAIN" />
              <label for="keturunan_lainlain" class="custom-control-label">Lain-lain</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <span class="col-sm-2 col-form-label">Agama:</span>
          <div class="col-auto">
            <div class="custom-control custom-radio custom-control-inline">
              <input required="" id="islam" class="custom-control-input" type="radio" name="agama" value="ISLAM" />
              <label for="islam" class="custom-control-label">Islam</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input required="" id="kristian" class="custom-control-input" type="radio" name="agama" value="KRISTIAN" />
              <label for="kristian" class="custom-control-label">Kristian</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input required="" id="buddha" class="custom-control-input" type="radio" name="agama" value="BUDDHA" />
              <label for="buddha" class="custom-control-label">Buddha</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input required="" id="hindu" class="custom-control-input" type="radio" name="agama" value="HINDU" />
              <label for="hindu" class="custom-control-label">Hindu</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input required="" id="agama_lainlain" class="custom-control-input" type="radio" name="agama" value="LAIN-LAIN" />
              <label for="agama_lainlain" class="custom-control-label">Lain-lain</label>
            </div>
          </div>
        </div>
        <?php if(!isset($_SESSION['username'])){ ?>
          <div class="form-group row">
            <label for="guru" class="col-sm-2 col-form-label">Nama Guru</label>
            <div class="col-auto">
              <select required="" id="guru" class="selectpicker" name="guru" data-live-search="true">
                <?php outputGuruOption(); ?>
              </select>
            </div>
          </div>
        <?php } ?>
        <div class="form-group row">
          <label for="address" class="col-sm-2 col-form-label">Alamat Rumah</label>
          <div class="col-auto">
            <textarea placeholder="Seperti Dalam KP" required="" id="address" class="form-control" name="address" autocomplete="street-address"></textarea>
          </div>
        </div>
      </fieldset>
      <fieldset id="maklumatPenjaga">
        <legend>MAKLUMAT PENJAGA</legend>
        <div class="form-group row">
          <label for="no_ic_penjaga" class="col-sm-2 col-form-label">No. Kad Pengenalan</label>
          <div class="col-auto">
            <input pattern="[^-\s]{1,12}$" minlength="12" maxlength="12" placeholder="TANPA '-' ATAU 'JARAK'" required id="no_ic_penjaga" type="text" class="form-control" name="no_ic_penjaga" />
          </div>
        </div>
        <div class="form-group row">
          <label for="lname" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-auto">
            <input placeholder="Seperti Dalam KP" required="" id="lname" type="text" class="form-control" name="lname" autocomplete="family-name" />
          </div>
        </div>
        <div class="form-group row">
          <span class="col-sm-2 col-form-label">Status</span>
          <div class="col-auto">
            <div class="custom-control custom-radio custom-control-inline">
              <input required="" id="ibu" class="custom-control-input" type="radio" name="status" value="IBU" />
              <label for="ibu" class="custom-control-label">Ibu</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input required="" id="bapa" class="custom-control-input" type="radio" name="status" value="BAPA" />
              <label for="bapa" class="custom-control-label">Bapa</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
              <input required="" id="penjaga" class="custom-control-input" type="radio" name="status" value="PENJAGA" />
              <label for="penjaga" class="custom-control-label">Penjaga</label>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="phone" class="col-sm-2 col-form-label">No. Telefon</label>
          <div class="col-auto">
            <input autocomplete="tel" required id="phone" type="tel" name="phone" class="form-control" />
          </div>
        </div>
      </fieldset>
      <fieldset id="subjek">
        <legend>MAKLUMAT SUBJEK</legend>
        <div>
          <label>Sila buang subjek yang tidak berkenaan</label>
        </div>
        <?php outputSubjekList(); ?>
      </fieldset>
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
              <p>Pastikan anda telah menyemak terlebih dahulu segala maklumat di dalam borang ini.</p>
              <p><strong>Segala maklumat yang dihantar adalah muktamad dan tidak boleh disunting.</strong></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Hantar</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <div class="form-group row mt-3">
      <div class="col-auto">
        <button data-target="#confirmation" data-toggle="modal" class="btn btn-primary">Daftar</button>
      </div>
    </div>
  </div>
  <?php include 'footer.php';?>