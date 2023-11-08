<?php
session_start();
// Obtenez le nom du fichier actuel
$current_page = basename($_SERVER['PHP_SELF']);

include_once 'controller.php';
?>

<!doctype html>
<html class="no-js" lang="zxx">

<?php include_once 'includes/head.php'; ?>

<body class="login">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <header id="header">
        <?php include_once 'includes/header-top.php'; ?>

        <div class="header-body">
            <nav class="navbar edu-navbar">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <?php include_once 'includes/logo.php'; ?>
                    </div>

                    <div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav pull-right">
                            <?php include_once 'includes/menu.php'; ?>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-text ">
                            <h1>Télecharger la brochure</h1>
                            <!-- <p><span><a href="">Home <i class='fa fa-angle-right'></i></a></span><span class="b-active"> Login</span></p> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
    </header>
    <!--  End header section-->


    <!-- Teachers Area section -->
    <section class="login-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <form action="" method="post" class="learnpro-register-form text-center">
                        <p class="lead">Telecharger la brochure</p>
                        <?php
                        if (isset($error_message)) {
                            echo '<div class="alert alert-danger" role="alert">' . $error_message . '</div>';
                        }
                        ?>
                        <div class="form-group">
                            <input  class="required form-control" placeholder="Nom *" name="name" type="text">
                        </div>
                        <div class="form-group">
                            <input class="required form-control" placeholder="Prénoms *" name="surname" type="text">
                        </div>
                        <div class="form-group">
                        <input class="form-control" placeholder="Téléphone" name="tel" type="text">
                         </div>
                        <div class="form-group">
                            <input class="required form-control" placeholder="email " name="email" type="email">
                        </div>
                         <div class="form-group">
                        <input class="required form-control" placeholder="Situation Géographique" name="situation_geographique" type="text">
                        </div>
                         <div class="form-group">
                            <select class="required form-control" name="fonction" value="">
                                <option value="" disabled selected>Fonction</option>
                                <option value="eleve">Élève</option>
                                <option value="etudiant">Étudiant</option>
                                <option value="enseignant">Enseignant</option>
                                <option value="autres">Autres</option>
                            </select>
                        </div>
                        <div class="form-group register-btn">
                            <input type="submit" name="login" value="Télécharger la brochure" class="btn btn-primary btn-lg">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ./ End Teachers Area section -->

    <!-- Footer Area section -->
    <?php include_once 'includes/footer.php'; ?>
    <!-- ./ End Footer Area -->
    <!-- ============================
    JavaScript Files
    ============================= -->
    <!-- jQuery -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/assets/bootstrap.min.js"></script>
    <!-- Sticky JS -->
    <script src="js/assets/jquery.sticky.js"></script>
    <!-- Popup -->
    <script src="js/assets/jquery.magnific-popup.min.js"></script>
    <!-- Counter Up -->
    <script src="js/assets/jquery.counterup.min.js"></script>
    <script src="js/assets/waypoints.min.js"></script>
    <!-- owl carousel -->
    <script src="js/assets/owl.carousel.min.js"></script>
    <!-- Slick Slider-->
    <script src="js/assets/slick.min.js"></script>
    <!-- Main Menu -->
    <script src="js/assets/jquery.meanmenu.min.js"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>
</body>

</html>