<?php
session_start();
// Obtenez le nom du fichier actuel
$current_page = basename($_SERVER['PHP_SELF']);

include_once 'controller.php';
?>

<!doctype html>
<html class="no-js" lang="zxx">

<?php include_once 'includes/head.php'; ?>

<body class="post-1">

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
                            <h1>Admission POST-BAC</h1>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </header>
    <div class="post_1_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 post_left-side">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="post-img-box" data-aos="zoom-in" data-aos-delay="400">
                                <img src="img/2.jpg">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="description-content">
                                <div class="description-heading" data-aos="zoom-in" data-aos-delay="400">
                                    <h3>Admission POST-BAC</h3>
                                </div>
                                <div class="description-text">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="description-text-right">
                                                <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">
                                                    L'Admission Post BAC au CIFEC s'adresse aux candidats intéressés par les métiers
                                                    de de la comptabilité, de la finance, du contrôle de gestion et de l'audit et titulaires
                                                    (ou en cours d'obtention) d'un baccalauréat ou d'un diplôme équivalent.
                                                </p>

                                                <h4 data-aos="zoom-in" data-aos-delay="400">Candidats admissibles</h4>
                                                <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">
                                                    Tous les étudiants titulaires du Baccalauréat ou de tout diplôme équivalent peuvent
                                                    s'inscrire au CIFEC.
                                                </p>

                                                <h4 data-aos="zoom-in" data-aos-delay="400">Procédures d'inscription</h4>
                                                <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">
                                                    Pour postuler au CIFEC, le candidat doit remplir <a href="preinscription.php">le formulaire de préinscription</a>. Une
                                                    fois sa candidature acceptée, il finalise son inscription dans nos locaux (COCODY, II PLATEAUX SIDECI Carrefour DUNCAN après la CEI) tout en joignant les pièces ci-dessous : <br><br>
                                                    <strong>- 01 Extrait d'acte de naissance;</strong> <br>
                                                    <strong>- 01 Copie certifiée du dernier diplôme et du BAC</strong> <br>
                                                    <strong>- 01 Photocopie légalisée des derniers bulletins </strong> <br>
                                                    <strong>- 02 copies de la pièce d'identité;</strong> <br>
                                                    <strong>- 02 photos d'identités</strong>
                                                
                                                </p>

                                                <h4 data-aos="zoom-in" data-aos-delay="400">Comment s'inscrire</h4>

                                                <div class="col-sm-12 mgb-3">
                                                    <div class="row">
                                                        <div class="col-sm-4 box box-1" data-aos="zoom-in" data-aos-delay="400">

                                                            <h4 class="text-center">Vous postulez</h4>
                                                            <p style="font-size:17px" class="text-center">
                                                                Parlez un peu de vous et nous vous aiderons pour le reste.
                                                                Notre outil de demande en ligne pratique ne prend que 3 min à remplir.
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-4 box box-2" data-aos="zoom-in" data-aos-delay="600">

                                                            <h4 class="text-center">On vous contacte</h4>
                                                            <p style="font-size:17px" class="text-center">
                                                                Après avoir soumis votre candidature, un reponsable des admissions vous contactera
                                                                et vous aidera à terminer le processus.
                                                            </p>
                                                        </div>
                                                        <div class="col-sm-4 box box-3" data-aos="zoom-in" data-aos-delay="800">

                                                            <h4 class="text-center">Vous êtes prêt</h4>
                                                            <p style="font-size:17px" class="text-center">
                                                                Une fois votre inscription effectuée au sein de nos locaux, <br> vous êtes prêt à
                                                                débuter votre carrière.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>


                                                <h4 data-aos="zoom-in" data-aos-delay="400">Mon Cursus au CIFEC</h4>
                                                <p>
                                                <div class="panel panel-default" data-aos="zoom-in" data-aos-delay="400">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title click">
                                                            LSTCF 1 (Licence des Sciences Techniques Comptables et Financières - 1ère
                                                            année)
                                                        </h4>

                                                    </div>
                                                    <div id="collapse1" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <div class="row curriculum-single">
                                                                <div class="con-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="lecture" style="font-size:17px">
                                                                                <span><i class="fa fa-angle-right"></i> Préparation du DGC (UE 112 - Droit des Sociétés)</span>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="text-center py-3"><i class="fas fa-angle-double-down"></i></div> -->

                                                <div class="panel panel-default" data-aos="zoom-in" data-aos-delay="400">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title click">
                                                            LSTCF 2 (Licence des Sciences Techniques Comptables et Financières - 2ème
                                                            année)
                                                        </h4>

                                                    </div>
                                                    <div id="collapse1" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <div class="row curriculum-single">
                                                                <div class="con-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="lecture" style="font-size:17px">
                                                                                <span><i class="fa fa-angle-right"></i> Préparation du DGC (UE 114 - Droit fiscal et UE 120 - Comptabilité approfondie)</span>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel panel-default" data-aos="zoom-in" data-aos-delay="400">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title click">
                                                            LSTCF 3 (Licence des Sciences Techniques Comptables et Financières - 3ème
                                                            année)
                                                        </h4>

                                                    </div>
                                                    <div id="collapse1" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <div class="row curriculum-single">
                                                                <div class="con-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="lecture" style="font-size:17px">
                                                                                <span><i class="fa fa-angle-right"></i> Préparation du DGC (UE 113 - Droit Social et UE 117 - Management)</span>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                                <!-- <a href="#"><i class="fa fa-angle-right"></i> Voir Poursuite des études </a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="sidebar-text-post" data-aos="zoom-in" data-aos-delay="400">
                        <?php include_once 'includes/left-admission.php'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include_once 'includes/footer.php'; ?>
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