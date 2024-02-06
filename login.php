<?php
session_start();
 include 'header.php';
function outputError() {
  if (isset($_GET["error"])) {
switch ($_GET["error"]) {
  case 1:
    echo "<div class='alert alert-danger' role='alert'>
  Anda tidak berdaftar lagi. Sila daftar di <a href='daftar-guru.php'>sini.</a>
</div>";
    break;
  case 2:
  echo "<div class='alert alert-danger' role='alert'>
  Anda gagal log masuk. Sila pastikan nama pengguna dan kata laluan adalah betul dan sepadan.
</div>";
    break;
    case 3:
  echo "<div class='alert alert-danger' role='alert'>
  Anda perlu log masuk terlebih dahulu.
</div>";
    break;
}
}
}
?>
<link href="signin.css" rel="stylesheet">
</head>
<form class="form-signin" action="proses-login.php" method="POST">
  <?php outputError(); ?>
      <h1 class="h3 mb-3 font-weight-normal">Sila log masuk</h1>
      <label for="email" class="sr-only">Alamat E-mel:</label>
      <input name="email" type="text" id="email" class="form-control" required="" placeholder="Nama Pengguna" autofocus autocomplete="email">
      <label for="password" class="sr-only">Kata Laluan:</label>
      <input name="password" type="password" id="password" class="form-control" required="" placeholder="Kata Laluan" autocomplete="current-password" autofocus="">
      <button class="btn btn-lg btn-primary btn-block" type="submit">Log Masuk</button>
    </form>
    <?php include 'footer.php'; ?>