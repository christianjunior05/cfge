<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="index.html" class="logo d-flex align-items-center">
      <img src="" alt="">
      <span class="d-none d-lg-block">Cifec Benin</span>
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
    <?php echo ($page === 'dash.php') ? '<a href="#preinscription" class="mx-3">Preinscription</a>
    <a href="#entreprise" class="me-3">Entreprise</a> <a href="#newsletter" class="me-3">Newsletter</a>' : ''; ?>

  </div>

  <nav class="header-nav ms-auto">

    <ul class="d-flex align-items-center">

      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <span class="d-none d-md-block dropdown-toggle ps-2"><?= $_SESSION['username'] ; ?></span>
        </a>

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="reglage.php">
              <i class="bi bi-person"></i>
              <span> Profile</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="deconnexion.php">
              <i class="bi bi-gear"></i>
              <span>Se deconnecter</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>
        </ul>
      </li>

    </ul>
  </nav>

</header>