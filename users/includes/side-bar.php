<div id="layoutSidenav_nav">
  <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
      <div class="nav">
        <div class="sb-sidenav-menu-heading">Core</div>
        <a class="nav-link" href="<?=DASHBOARD_PATH?>">
          <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
          Dashboard
        </a>



   
        <div class="sb-sidenav-menu-heading">Addons</div>
        <a class="nav-link" href="<?=DASHBOARD_PATH?>posts.php">
          <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
          POSTS
        </a>
        <a class="nav-link" href="<?=DASHBOARD_PATH?>upload.php">
          <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
          UPLOAD
        </a>
        <a class="nav-link" href="<?=DASHBOARD_PATH?>profile.php">
          <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
          PROFILE
        </a>
      </div>
    </div>
    <div class="sb-sidenav-footer">
      <div class="small">Logged in as:</div>
      <?=$_SESSION["customer_firstname"]?>  <?=$_SESSION["customer_lastname"]?>
    </div>
  </nav>
</div>