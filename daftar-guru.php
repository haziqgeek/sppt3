<?php include 'header.php';
function outputAlert() {
  if (isset($_GET["success"])) {
  if ($_GET["success"] == 1) {
    echo "<div class='alert alert-success' role='alert'>
  Pendaftaran anda telah berjaya. <a href='login.php'>Log masuk.</a>
</div>";
  }
  else if ($_GET["success"] == 0) {
echo "<div class='alert alert-info' role='alert'>
  Nama pengguna anda telah dimiliki. Sila masukkan nama pengguna yang lain.
</div>";
  }
  }
  if (isset($_GET["passwordmatch"])) { 
  if ($_GET["passwordmatch"] == 0) {
    echo "<div class='alert alert-danger' role='alert'>
  Kata laluan anda tidak sepadan. Sila masukkan sekali lagi.
</div>";
  }
}
} ?>
</head>
<body class="bg-light">
  <div class="container">
    <?php outputAlert(); ?>
<form class="needs-validation" action="proses-guru.php" method="POST">
  <fieldset id="guru">
  <legend>MAKLUMAT GURU</legend>
    <div class="form-group">
  <label for="name">Nama Penuh:</label>
  <input placeholder="Seperti Dalam KP" autofocus="" id="name" required="" class="form-control" type="text" name="name" autocomplete="name" />
    </div>
    <div class="form-group">
  <label for="username">Nama Pengguna:</label>
  <input id="username" required="" class="form-control" type="text" name="username" autocomplete="username" />
    </div>
    <div class="form-group">
  <label for="email">Alamat E-mel:</label>
  <input id="email" required="" class="form-control" type="email" name="email" autocomplete="email" />
    </div>
    <div class="form-group">
  <label for="password">Kata Laluan:</label>
  <input required="" class="form-control" type="password" id="password" name="password" autocomplete="new-password" />
    </div>
    <div class="form-group">
  <label for="confirm_password">Sahkan Kata Laluan:</label>
  <input placeholder="Sepadan Dengan Kata Laluan Di Atas" required="" class="form-control" type="password" id="confirm_password" name="confirm_kata_laluan" />
    </div>
  </fieldset>
  <div class="form-group">
    <button class="btn btn-primary" type="submit" id="submit">Daftar</button>
  </div>
</form>
</div>
<script type="text/javascript">
  var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Kata laluan tidak sepadan.");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
<?php include 'footer.php' ?>