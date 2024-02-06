<?php if(isset($_SESSION['username'])){ ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-green flex-md-nowrap p-0 shadow d-print-none">
      <a class="navbar-brand col-sm-3 col-md-1 mr-0" href="<?php echo getHomeURL() . '/admin'; ?>">SPPT3</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarToggler">
      <form class="form-inline w-100" method="get" action="<?php echo getHomeURL(); ?>/admin/carian.php">
        <div class="input-group w-100">
      <input class="form-control form-control-dark w-99" placeholder="No. KP, Nama Calon, Nama Subjek atau Kod Subjek" aria-label="Search" type="search" name="s">
      <div class="input-group-append">
        <button type="submit" id="search" class="btn btn-outline-secondary" type="button"><i class="fa fa-search"></i></button>
      </div>
    </div>
  </form>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <span class="nav-link"><i class="fas fa-user"></i></span>
        </li>
        <li class="nav-item text-nowrap">
          <span class='nav-link'><?php echo $_SESSION['username']; ?></span>
        </li>
        <li class="nav-item text-nowrap">
          <a title="Log Keluar" class="nav-link" href="<?php echo getHomeURL(); ?>/logout.php"><i class="fa fa-sign-out-alt" aria-hidden="true"></i></a>
        </li>
      </ul>
    </div>
    </nav>
    <?php } ?>