<?php
session_start();
if (!isset($_SESSION['connect'])) {
    header('Location: login.php');
}
include_once 'controller_ad.php';

// Obtenez le nom du fichier actuel
$page = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once 'admin-head.php'; ?>

<body>

  <!-- ======= Header ======= -->
  <?php include_once 'admin-header.php'; ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php include_once 'admin-sidebar.php'; ?>
  <!-- End Sidebar-->

    <!-- main -->
  <?php include_once 'admin-detail-pre-content.php'; ?>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include_once 'admin-footer.php'; ?>
  <!-- End Footer -->

  
</body>

</html>