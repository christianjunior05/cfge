<?php
session_start();
// Obtenez le nom du fichier actuel
$current_page = basename($_SERVER['PHP_SELF']);

include_once 'controller.php';
?>

<!doctype html>
<html class="no-js" lang="zxx">
<?php include_once 'includes/head.php'; ?>

<body class="blog_1">

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
                    </div>
                </div>
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-text ">
                            <h1>Une équipe à votre service</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 bolg_side-left">
                    <div class="col-sm-12 single-item-box">
                        <div class="single-item">
                            <h3 data-aos="zoom-in" data-aos-delay="300">Une équipe à votre service</h3>

                            <div class="img-box" data-aos="zoom-in" data-aos-delay="400">

                                <a href="#"><img src="img/c1.jpg" alt="" class="img-responsive"></a>
                                <span><a href="#" class="overlay"></a></span>
                            </div>
                            <div class="single-text-box">
                                <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="500">L'Administration du CFGE est organisée en services pour une bonne satisfaction des usagers.
                                    Nous disposons d’une équipe complète avec des compétences multiples, pour un
                                    accompagnement au quotidien de nos étudiants dans la formation aux métiers de
                                    la comptabilité, de la gestion et de la finance.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 single-item-box">
                        <div class="single-item">
                            <h3 data-aos="zoom-in" data-aos-delay="400">Des Professeurs experts dans leur domaine !</h3>

                            <div class="img-box" data-aos="zoom-in" data-aos-delay="500">
                                <img src="img/prof.jpg" alt="" class="img-responsive">
                                <span><a href="#" class="overlay"></a></span>
                            </div>
                            <div class="single-text-box">
                                <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="500">Fiscalité, Finance, Comptabilité, Droit, Management, Systèmes d’Information
                                    ou encore Anglais des affaires, le corps professoral présent au CFGE
                                    porte la formation initiale et continue de l’Ecole à son niveau d’excellence.
                                    Nos formations s’appuient sur les compétences d’une équipe enseignante
                                    expérimentée à la pointe de la science, des techniques, de la technologie,
                                    et au plus près des sujets les plus innovants.
                                </p>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-sm-4 blog_side-right">
                    <div class="sidebar-content" data-aos="zoom-in" data-aos-delay="400">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="categories-item">
                                    <h3>Le CFGE</h3>
                                    <ul class="list-unstyled">
                                        <li style="font-size:17px"><a href="about.php"><i class="fa fa-angle-right"></i>A Propos </a></li>
                                        <li style="font-size:17px"><a href="mission-valeur.php"><i class="fa fa-angle-right"></i>Missions et Valeurs</a></li>
                                        <li style="font-size:17px"><a href="team.php"><i class="fa fa-angle-right"></i>Une équipe à votre service</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="categories-item">
                                    <h3>Admissions</h3>
                                    <ul class="list-unstyled">
                                        <li style="font-size:17px"><a href="admission-post-bac.php"><i class="fa fa-angle-right"></i>Post BAC </a></li>
                                        <li style="font-size:17px"><a href="admission-post-bts.php"><i class="fa fa-angle-right"></i>Post BAC +2/3</a></li>
                                        <li style="font-size:17px"><a href=""><i class="fa fa-angle-right"></i>Preinscription en ligne</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>