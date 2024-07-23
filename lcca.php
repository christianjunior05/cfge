<?php
session_start();
// Obtenez le nom du fichier actuel
$current_page = basename($_SERVER['PHP_SELF']);

include_once 'controller.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">
<?php include_once 'includes/head.php'; ?>

<body class="single-courses_v single-courses_v1">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <header id="header">
        <?php include_once 'includes/header-top.php'; ?>
        <!-- Ends: .header-top -->

        <div class="header-body">
            <nav class="navbar edu-navbar">
                <div class="container">
                    <div class="navbar-header">

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
                        <div class="intro-text">
                            <h1>LCCA</h1>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </div>

        <!--==================
		Slider
	    ===================-->
        <div class="rev_slider_wrapper">
            <div id="rev_slider_1" class="rev_slider" style="display:none">

                <!-- BEGIN SLIDES LIST -->
                <ul>
                    <li data-transition="boxfade" data-title="Slide Title" data-param1="Additional Text"
                        data-thumb="img/CIFEC-18.jpg">
                        <div class="slider-overlay"></div>
                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="img/CIFEC-18.jpg" alt="Sky" class="rev-slidebg">
                        <!-- BEGIN BASIC TEXT LAYER -->
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1"
                            data-x="left" data-hoffset="0" data-y="center" data-voffset="-140"
                            data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">
                            Plongez dans le
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-2"
                            data-x="left" data-hoffset="0" data-y="center" data-voffset="-80"
                            data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">
                            Monde de la Finance
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-p" data-x="left"
                            data-hoffset="0" data-y="center" data-voffset="-10"
                            data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;">
                            Découvrez les multiples facettes du monde financier avec nos formations pointues et
                            <br>préparez-vous à plonger dans une carrière passionnante.
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption lfb tp-resizeme header-btn" data-x="left" data-hoffset="0"
                            data-y="center" data-voffset="90"
                            data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 8;"><a href="#." class="el-btn-regular slider-btn-left">Nos programmes</a>
                            <a href="#." class="el-btn-regular">Nous contacter</a>
                        </div>
                    </li>
                    <li data-transition="random" data-title="Slide Title" data-param1="Additional Text"
                        data-thumb="img/CIFEC-17.jpg">
                        <div class="slider-overlay"></div>
                        <!-- SLIDE'S MAIN BACKGROUND IMAGE -->
                        <img src="img/CIFEC-17.jpg" alt="Sky" class="rev-slidebg">
                        <!-- BEGIN BASIC TEXT LAYER -->
                        <!-- LAYER NR.1 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1"
                            data-x="left" data-hoffset="0" data-y="center" data-voffset="-140"
                            data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">
                            Construisez votre
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4  header-1 title-line-2"
                            data-x="left" data-hoffset="0" data-y="center" data-voffset="-80"
                            data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">
                            Carriere comptable avec nous
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption font-lora sfb tp-resizeme letter-space-5 header-p" data-x="left"
                            data-hoffset="0" data-y="center" data-voffset="-10"
                            data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;">
                            Explorez nos programmes de formation spécialisés et faites un pas décisif vers<br>une
                            carrière comptable prometteuse et épanouissante.
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption lfb tp-resizeme header-btn" data-x="left" data-hoffset="0"
                            data-y="center" data-voffset="90"
                            data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            style="z-index: 8;"><a href="#." class="el-btn-regular slider-btn-left">Nos Programmes</a>
                            <a href="#." class="el-btn-regular">Nous contacter</a>
                        </div>
                    </li>
                </ul><!-- END SLIDES LIST -->

            </div><!-- END SLIDER CONTAINER -->
        </div><!-- END SLIDER CONTAINER WRAPPER -->
    </header>
    <!--  End header section-->

    <div class="single-courses-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 sidebar-left">
                    <div class="sidebar-content">
                        <?php include_once 'includes/sidebar.php'; ?>
                    </div>
                </div>

                <div class="col-sm-8 sidebar-left">
                    <div class="single-curses-contert">
                        <div class="description-content">
                            <h1>Description:</h1>
                            <hr>
                            <p style="font-size:17px">La LCCA se deroule comme suit:</p>
                            <ul>
                                <li style="font-size:17px">année d'entrée : bac +2</li>
                                <li style="font-size:17px">année de sortie : bac +3</li>
                                <li style="font-size:17px">durée des études : à temps plein, 1 an</li>
                            </ul>
                            <p style="font-size:17px">La formation peut-être à temps complet selon un parcours défini
                                par le CIFEC ou à la
                                carte selon vos souhaits et besoins.En parallèle d’une activité professionnelle, en
                                auditeur libre, en présentiel ou en distanciel.
                            </p>
                        </div>
                        <div class="description-content">
                            <h1>Presentation et objectifs :</h1>
                            <hr>
                            <p style="font-size:17px">Cette troisième année de licence permet d'acquérir une formation
                                dans les
                                disciplines fondamentales des métiers de la comptabilité,de la finance, du contrôle
                                de gestion et de l'audit.Il s’agit d’une formation qui permet d’accéder au marché du
                                travail sur des postes de responsable de portefeuille clients en cabinet d’expertise-
                                comptable ou de poursuivre des études en master CCA ou en DSCG.</h3>
                        </div>
                        <div class="description-content">
                            <h1>Modalité d'enseignement </h1>
                            <hr>
                            <ul>
                                <li style="font-size:17px">Formation initiale</li>
                                <li style="font-size:17px">Formation à distance</li>
                                <li style="font-size:17px">Formation continue.</li>
                            </ul>
                        </div>
                        <h1>Période de formation</h1>
                        <hr>
                        <p style="font-size:17px">Du 07 septembre 2023 au 15 mai 2024.</p>
                        <br>
                        <div class="description-content">
                            <h1>Conditions d'admissions</h1>
                            <hr>
                            <p style="font-size:17px">Sont autorisés à s’inscrire, les candidats titulaires d'un niveau
                                bac+2 en comptabilité :
                                L2 économie-gestion,DUT GEA, BTS Comptabilité.La sélection des candidats est réalisée
                                sur dossier (avec CV et lettre de motivation) et entretien.</p>
                            <h1>Conditions d'obtention</h1>
                            <hr>
                            <p style="font-size:17px">Sont reçus à la licence CCA les candidats ayant validé les 2
                                semestres soit une
                                moyenne de 10/20 à chaque semestre (sans note inférieure à 6 aux UE). Les
                                semestres ne se compensent pas.Seules sont prises en compte les notes obtenues
                                aux épreuves organisées par l’Intec, éventuellement majorées par la bonification de
                                contrôle continu.</p>
                        </div>
                        <div class="description-content" style="font-size:17px">
                            <h1>Les débouchés et metiers visés</h1>
                            <hr>
                            <p style="font-size:17px">La licence CCA permet une insertion sur le marché du travail pour
                                occuper un poste :</p>
                            <ul>
                                <li style="font-size:17px">d'assistant comptable</li>
                                <li style="font-size:17px">de contrôleur de gestion junior</li>
                                <li style="font-size:17px">d'auditeur junior</li>
                                <li style="font-size:17px">de collaborateur en cabinet d'expertise comptable</li>
                                <li style="font-size:17px">de comptable en entreprise</li>
                            </ul>
                            <br>

                            <h1>Poursuite d'etude</h1>
                            <hr>
                            <h1>Inscription en MCCA Cnam-Intec.</h1>
                            <div class=" mt-4">
                                <table class="table table-bordered text-center">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Unité d'enseignement (UE)</th>
                                            <th>Nombre d’ECTS</th>
                                            <th>Semestres</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>UE 435 - 445 Finance d'entreprise</td>
                                            <td>5</td>
                                            <td>S1 et S2</td>
                                        </tr>
                                        <tr>
                                            <td>UE 433 - 443 Contrôle de gestion</td>
                                            <td>8</td>
                                            <td>S1 et S2</td>
                                        </tr>
                                        <tr>
                                            <td>UE 431-441 Comptabilité approfondie</td>
                                            <td>8</td>
                                            <td>S1 et S2</td>
                                        </tr>
                                        <tr>
                                            <td>UE 436-446 Droit fiscal approfondi</td>
                                            <td>6</td>
                                            <td>S1 et S2</td>
                                        </tr>
                                        <tr>
                                            <td>UE 437-447 Droit du travail, droit social</td>
                                            <td>4</td>
                                            <td>S1 et S2</td>
                                        </tr>
                                        <tr>
                                            <td>UE 432 - 442 Droit des sociétés</td>
                                            <td>3</td>
                                            <td>S1 et S2</td>
                                        </tr>
                                        <tr>
                                            <td>UE 438 - 448 Anglais des affaires</td>
                                            <td>6</td>
                                            <td>S1 et S2</td>
                                        </tr>
                                        <tr>
                                            <td>UE 434 - 444 Management</td>
                                            <td>6</td>
                                            <td>S1 et S2</td>
                                        </tr>
                                        <tr>
                                            <td>UATEOB -Période en entreprise</td>
                                            <td>8</td>
                                            <td>S1 et S2</td>
                                        </tr>
                                        <tr>
                                            <td>UATEOC -Rapport d'activité : soutenance et communication</td>
                                            <td>6</td>
                                            <td>S1 et S2</td>
                                        </tr>
                                    </tbody>
                                </table>

                                <a class="text-light"
                                    href="https://www.demarches-simplifiees.fr/commencer/cnam-centre-d-abidjan-cfge-dossier-de-candidature-25"
                                    target="_blank"><button class="btn btn-sm btn-success" style="font-size:25px">
                                        Candidatez ici
                                    </button>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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