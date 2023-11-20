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
                            <h1>Admission POST BAC +2/3</h1>
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
                                <img src="img/3.jpg" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="description-content">
                                <div class="description-heading" data-aos="zoom-in" data-aos-delay="400">
                                    <h3>Admission POST-BAC +2/3</h3>
                                </div>
                                <div class="description-text">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="description-text-right">
                                                <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">
                                                    L'Admission Post BAC +2/3 au CIFEC s'adresse aux étudiants ayant validé leur premier
                                                    cycle et souhaitant entamer une formation en LICENCE et MASTER dans les métiers
                                                    de la comptabilité, de la finance, du contrôle de gestion et de l'audit.
                                                </p>

                                                <h4 data-aos="zoom-in" data-aos-delay="400">Candidats admissibles</h4>
                                                <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="500">
                                                    <strong>- Les candidats disposant d'un diplôme de niveau BAC +2 ou équivalent (BTS -
                                                        DUT) pour une formation en LICENCE;</strong> <br><br>
                                                    <strong>- Les candidats disposant d'un diplôme de niveau BAC +3 ou équivalent
                                                        (LICENCE-MAITRISE-MASTER VALIDE - DESS) pour une formation en
                                                        MASTER;</strong> <br><br>
                                                    <strong>- Les programmes du CIFEC en DCG/LICENCE — DSCG/MASTER,
                                                        s'adressent également aux personnes en situation de : reconversion
                                                        professionnelle - Evolution / Changement de carrière - Création d'entreprise.</strong>
                                                </p>

                                                <h4 data-aos="zoom-in" data-aos-delay="400">Procédures d'inscription</h4>
                                                <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">
                                                    Pour postuler au CIFEC, le candidat doit remplir <a href="preinscription.php">le formulaire de préinscription</a> . Une
                                                    fois sa candidature acceptée, il finalise son inscription dans nos locaux (Vodjè, juste
                                                    après le carrefour SONAR à 100m de l’hôtel de l’Etoile) tout en joignant les pièces ci-dessous: <br><br>
                                                    <strong>- Photocopie légalisée de la collante du BAC;</strong><br>
                                                    <strong>- Photocopie des bulletins de notes des 2 dernières classes ;</strong><br>
                                                    <strong>- Photocopie de la carte d'identité ;</strong><br>
                                                    <strong>- Photocopie du ou des diplôme(s) obtenu(s) ;</strong><br>
                                                    <strong>- 02 photos</strong><br>
                                                    <strong>- Un curriculum vitae à jour.</strong>
                                                </p>

                                                <h4 data-aos="zoom-in" data-aos-delay="400">Comment s'inscrire</h4>

                                                <div class="col-sm-12 mgb-3">
                                                    <div class="row">
                                                        <div class="col-sm-4 box box-1" style="background-color: #b5d56a;" data-aos="zoom-in" data-aos-delay="400">
                                                            <h4 class="text-center">Vous postulez</h4>
                                                            <p style="font-size:17px" class="text-center">
                                                                Parlez un peu de vous et nous vous aiderons pour le reste. <br>
                                                                Notre outil de demande en ligne pratique ne prend que 3 min à remplir.   
                                                            </p>
                                                        </div>

                                                        <div class="col-sm-4 box box-2" style="background-color:  #4886ff;" data-aos="zoom-in" data-aos-delay="600">
                                                            <h4 class="text-center">On vous contacte</h4>
                                                            <p class="text-center" style="font-size:17px">
                                                                Après avoir soumis votre candidature, un responsable des admissions vous contactera
                                                                et vous aidera à terminer le processus.
                                                            </p>
                                                        </div>

                                                        <div class="col-sm-4 box box-3" style="background-color: #ff6f6f;" data-aos="zoom-in" data-aos-delay="800">
                                                            <h4 class="text-center">Vous êtes prêt</h4>
                                                            <p class="text-center" style="font-size:17px">
                                                                Une fois votre inscription effectuée au sein de nos locaux, <br><br> vous êtes prêt à
                                                                débuter votre carrière.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h4 data-aos="zoom-in" data-aos-delay="400">Mon Cursus au CIFEC</h4>
                                                <p>
                                                <h5 style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">1 - Je suis titulaire d'un BAC +2</h5>
                                                <br>
                                                <div class="panel panel-default" data-aos="zoom-in" data-aos-delay="400">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title click">
                                                            Préparation de la LSTCF ESCAE et/ou de la LCCA INTEC
                                                        </h4>

                                                    </div>
                                                    <div id="collapse1" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <div class="row curriculum-single">
                                                                <div class="con-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="lecture" style="font-size:17px">
                                                                                <span><i class="fa fa-angle-right"></i> LSTCF (Licence des Sciences Techniques Comptables et Financières)</span>
                                                                                <br><br>
                                                                                <span><i class="fa fa-angle-right"></i> LCCA (Licence Comptabilité, Contrôle, Audit) de l’INTEC de Paris</span>
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
                                                            Préparation du MCCA ESCAE et/ou du MCCA INTEC
                                                        </h4>

                                                    </div>
                                                    <div id="collapse1" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <div class="row curriculum-single">
                                                                <div class="con-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="lecture" style="font-size:17px">
                                                                                <span><i class="fa fa-angle-right"></i> MCCA 1 (Master Comptabilité, Contrôle, Audit – 1 ère année)</span>
                                                                                <br><br>
                                                                                <span><i class="fa fa-angle-right"></i> MCCA 2 (Master Comptabilité, Contrôle, Audit - 2ème année)</span>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </p>
                                                <p>

                                                    <br>

                                                <h5 style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">2 - Je suis titulaire d'un BAC +3</h5>
                                                <br>
                                                <div class="panel panel-default" data-aos="zoom-in" data-aos-delay="400">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title click">
                                                            Préparation du MCCA ESCAE et/ou du MCCA INTEC
                                                        </h4>

                                                    </div>
                                                    <div id="collapse1" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <div class="row curriculum-single">
                                                                <div class="con-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="lecture" style="font-size:17px">
                                                                                <span><i class="fa fa-angle-right"></i> MCCA 1 (Master Comptabilité, Contrôle, Audit – 1 ère année)</span>
                                                                                <br><br>
                                                                                <span><i class="fa fa-angle-right"></i> MCCA 2 (Master Comptabilité, Contrôle, Audit – 2 ème année) ;</span>
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
                                                            Préparation du MCCA ESCAE et/ou du MCCA INTEC
                                                        </h4>

                                                    </div>
                                                    <div id="collapse1" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                            <div class="row curriculum-single">
                                                                <div class="con-sm-12">
                                                                    <div class="row">
                                                                        <div class="col-sm-12">
                                                                            <div class="lecture" style="font-size:17px">
                                                                                <span><i class="fa fa-angle-right"></i> MCCA 1 (Master Comptabilité, Contrôle, Audit – 1 ère année)</span>
                                                                                <br><br>
                                                                                <span><i class="fa fa-angle-right"></i> MCCA 2 (Master Comptabilité, Contrôle, Audit - 2ème année)</span>
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