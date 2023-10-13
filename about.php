<?php
session_start();
// Obtenez le nom du fichier actuel
$current_page = basename($_SERVER['PHP_SELF']);

include_once 'controller.php';
?>

<!doctype html>
<html class="no-js" lang="zxx">

<?php include_once 'includes/head.php'; ?>

<body class="single-courses_v">

    <header id="header">
        <!-- Ends: .header-top -->
        <?php include_once 'includes/header-top.php'; ?>
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
                        <div class="intro-text ">
                            <h1>A Propos</h1>
                            <!-- <p><span><a href="">Nos programmes<i class='fa fa-angle-right'></i></a></span> <span class="b-active">DSCG</span></p> -->
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </div>

    </header>

    <div class="single-courses-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 sidebar-left">
                    <div class="single-curses-contert">
                        <!-- Qu’est-ce qu’un expert-comptable ? -->
                        <div class="description-content">
                            <h2 data-aos="zoom-in" data-aos-delay="400">Qu’est-ce qu’un expert-comptable ?</h2>

                            <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">
                                <em>
                                    Un expert-comptable est un professionnel de la comptabilité, <strong>"le médecin des entreprises</strong>, qui dans une structure ou entreprise, tient, contrôle, surveille et redresse
                                    la comptabilité de l’entité juridique ou de l’entreprise pour laquelle il travaille. Il établit les
                                    bilans et comptes de résultats des entreprises, des artisans, des établissements, des
                                    agriculteurs et tous métiers qui génèrent des bénéfices.
                                </em>
                            </p>
                            <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">
                                Le CIFEC Bénin offre une grande opportunité dans ce domaine de formation ; il vous
                                propose de préparer le Diplôme de Comptabilité et de Gestion (DCG, niveau licence) et
                                le diplôme Supérieur de Comptabilité et de Gestion (DSCG, niveau master) de l’Etat
                                français à travers : <br>
                                <a href="lstcf.php"><strong><i class="fa fa-angle-right"></i> la Licence des Sciences Techniques Comptables et Financières (LSTCF),</strong></a> <br>
                                <a href="mcca-escae.php"><strong><i class="fa fa-angle-right"></i> et le Master Comptabilité, Contrôle, Audit (MCCA) de l’ESCAE de Niamey en
                                        seulement cinq ans après le BAC.</strong></a> <br>

                            </p>
                            <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">
                                La LSTCF (BAC +3) et le MCCA (BAC +5) sont deux diplômes à forte valeur ajoutée,
                                délivrés par I ‘Ecole Supérieure de Commerce et d’Administration des Entreprises
                                (ESCAE) de Niamey au NIGER avec laquelle est en partenariat le CIFEC Bénin.
                            </p>
                            <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">
                                Ces (2) diplômes sont reconnus par le ministère de l’enseignement supérieur français et
                                le CAMES. Le MCCA permet à son détenteur d’obtenir, le Diplôme Supérieur de
                                Comptabilité et de Gestion DSCG lui conférant le titre d’Expert-Comptable mémorialiste.
                            </p>
                            <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">
                                Le CIFEC Bénin est la seule Ecole aujourd’hui à vous offrir cette opportunité au Bénin. Il
                                constitue la nouvelle clé qui vous ouvre les portes de l’expertise comptable.
                                Devenez donc avec cette école, expert-comptable mémorialiste en cinq ans après votre
                                BAC.
                            </p>

                        </div>

                        <!-- Pourquoi le CIFEC au Bénin? -->
                        <div class="description-content">
                            <h2 data-aos="zoom-in" data-aos-delay="400">Pourquoi le CIFEC au Bénin?</h2>
                            <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">Le CIFEC est un centre de formation au diplôme d’expertise comptable. Son implantation
                                au Bénin vise quatre (4) objectifs essentiels :</p>

                            <div class="count-list" data-aos="zoom-in" data-aos-delay="400">
                                <!-- <h3></h3> -->
                                <ol class="list-unstyled">
                                    <li style="font-weight : bold; font-size:17px">Permettre aux nouveaux bacheliers d’obtenir en temps record le titre d’expert-
                                        comptable stagiaire selon Ie système Français avec les meilleures conditions de
                                        succès (5 ans maximum après le BAC) ;
                                    </li> <br>

                                    <li style="font-weight : bold;font-size:17px">Offrir les meilleures conditions de succès aux étudiants déjà engagés dans les
                                        études d’expertise comptable selon le système Français ;
                                    </li> <br>

                                    <li style="font-weight : bold;font-size:17px">Permettre aux auditeurs et étudiants ayant renoncé à ces études d’expertise
                                        comptable d’y revenir et les reprendre avec les meilleures conditions de succès ;
                                    </li> <br>
                                    <li style="font-weight : bold;font-size:17px">Permettre aux diplômés des universités et autres grandes écoles d’accéder à la
                                        formation d’expertise compta bien sans reprendre l’intégralité des unités
                                        d’enseignement.
                                    </li>

                                </ol>
                                <br><br>
                            </div>
                        </div>

                        <!-- Comment devenir Expert-comptable -->
                        <div class="description-content">
                            <h2 data-aos="zoom-in" data-aos-delay="400">Comment devenir Expert-comptable mémorialiste au CIFEC?</h2>
                            <p></p>
                            <div class="requirements">
                                <!-- <h3>Première passerelle</h3> -->
                                <span data-aos="zoom-in" data-aos-delay="400" style="font-size:17px">Avec les diplômes de I’ESCAE de Niamey préparés au CIFEC Bénin, vous suivez :</span>
                                <div class="courses">
                                    <div class="courses-03">
                                        <div class="col-sm-6 single-courses-box" data-aos="zoom-in" data-aos-delay="400">
                                            <div class="single-courses">
                                                <div class="courses-content">
                                                    <h3>(03) années de formation après le Bac pour obtenir deux (02) diplômes
                                                        prestigieux de niveau Licence dans le système LMD :</h3>
                                                    <br>
                                                    <ul class="list-unstyled">
                                                        <a href="lstcf.php">
                                                            <li style="font-size:17px">La Licence des Sciences Techniques Comptables et Financières de
                                                                l’ESCAE Niamey (Bac +3)</li>
                                                        </a>
                                                        <br>
                                                        <a href="dcg.php">
                                                            <li style="font-size:17px">Le Diplôme de Gestion et de Comptabilité de l’INTEC de Paris (Bac +3).</li>
                                                        </a>
                                                        <br>
                                                    </ul>
                                                </div>
                                            </div><!-- Ends: .single courses -->
                                        </div>

                                        <div class="col-sm-6 single-courses-box" data-aos="zoom-in" data-aos-delay="600">
                                            <div class="single-courses">
                                                <div class="courses-content">
                                                    <h3>(02) années de formation après le DCG et/ou la LSTCF de I’ESCAE Niger
                                                        pour obtenir deux prestigieux diplômes de niveau master dans le système
                                                        LMD :</h3>
                                                    <ul class="list-unstyled">
                                                        <a href="mcca-escae.php">
                                                            <li style="font-size:17px">Le Master Comptabilité, Contrôle et Audit de I’ESCAE Niamey (Bac +5)</li>
                                                        </a> <br>
                                                        <a href="dscg.php">
                                                            <li style="font-size:17px">Le Diplôme Supérieur de Gestion et de Comptabilité de l’INTEC de Paris
                                                                (Bac +5).</li>
                                                        </a> <br>

                                                    </ul>
                                                </div>
                                            </div><!-- Ends: .single courses -->
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- PROCEDURE D’OBTENTION DES DIPLOMES -->
                        <div class="description-content">
                            <p>.</p>
                            <div class="requirements">
                                <h3 data-aos="zoom-in" data-aos-delay="400">PROCEDURE D’OBTENTION DES DIPLOMES DELIVRES PAR L’INTEC DE PARIS</h3>

                                <div class="courses">
                                    <div class="courses-03">
                                        <div class="col-sm-6 single-courses-box" data-aos="zoom-in" data-aos-delay="400">
                                            <div class="single-courses">
                                                <div class="courses-content">
                                                    <h3>Pour l’obtention du DGC :</h3>
                                                    <div class="count-list" style="font-size:17px">

                                                        <ol class="list-unstyled">
                                                            <li style="font-size:17px">Vous devez être titulaire de la LSTCF de I’ESCAE de Niamey ;</li>
                                                            <li style="font-size:17px">Vous devez avoir obtenu une moyenne pondérée d'au moins 10/20 dans les
                                                                5 UE ci-dessous sans note éliminatoire (6/20): <br>

                                                                <strong>- Droit des Sociétés</strong> <br>
                                                                <strong>- Droit social</strong> <br>
                                                                <strong>- Droit fiscal</strong> <br>
                                                                <strong>- Comptabilité approfondie</strong> <br>
                                                                <strong>- Management</strong> <br>

                                                            </li>
                                                            <br>
                                                        </ol>
                                                        <strong>NB :</strong> Le DGC INTEC vous permet de faire la demande pour obtenir le
                                                        DCG de l’Etat Français.
                                                        <br><br>
                                                        <h4 style="color:red">DGC INTEC = DCG ETAT FRANÇAIS</h4>
                                                        <br>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 single-courses-box" data-aos="zoom-in" data-aos-delay="600">
                                            <div class="single-courses">
                                                <div class="courses-content">
                                                    <h3>Pour l’obtention du DSGC :</h3>
                                                    <div class="count-list" style="font-size:17px">
                                                        <!-- <h3>Learning Outcomes</h3> -->
                                                        <ol class="list-unstyled">
                                                            <li style="font-size:17px">Vous devez être titulaire de la LSTCF I’ESCAE de Niamey ;</li>
                                                            <li style="font-size:17px">Vous devez avoir obtenu une moyenne pondérée d'au moins 10/20 dans les
                                                                5UE ci-dessous sans note éliminatoire (note &lt; 6/20): <br>

                                                                <strong>- Finance</strong> <br>
                                                                <strong>- Management des systèmes d’information</strong> <br>
                                                                <strong>- Gestion juridique, fiscale et sociale</strong> <br>
                                                                <strong>- Comptabilité et Audit</strong> <br>
                                                                <strong>- Relations professionnelles 2 (soutenance de mémoire).</strong> <br>


                                                            </li>
                                                            <br>
                                                        </ol>
                                                        <!-- NB : Le DGC INTEC vous permet de faire la demande pour obtenir le
                                                            DCG de l’Etat Français. -->
                                                        <br><br><br>
                                                        <h4 style="color:red">DSGC INTEC = DSCG ETAT FRANÇAIS</h4>
                                                        <br>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <p>.</p>
                                <div class="col-sm-12">
                                    <div class="col-sm-8">
                                        <table class="table" data-aos="zoom-in" data-aos-delay="400" style="font-size:17px">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">
                                                        <h4>Pour résumer votre cursus au CIFEC</h4>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td rowspan="2">
                                                        1. LSTCF 1 ère année <br>
                                                        2. LSTCF 2 ème année <br>
                                                        3. LSTCF 3 ème année <br>(avec option 5UE du DGC)
                                                    </td>
                                                    <td>Diplôme LSTCF ESCAE
                                                        de Niamey (BAC +3)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Diplôme DGC/DCG
                                                        (BAC +3)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        4. Master CCA 1 ère année
                                                    </td>
                                                    <td>Diplôme MCCA ESCAE de
                                                        Niamey (BAC +5)</td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="1">
                                                        5. Master CCA 2 ème année <br>(avec option 5UE du DSGC)
                                                    </td>
                                                    <td>Diplôme DSGC INTEC de
                                                        Paris (BAC +5)</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        6. Inscription en DSCG avec 5UE en dispense (2UE au lieu de 7)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        7. Stage d’expertise comptable
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <!-- Nos programmes -->
                        <div class="description-content">
                            <h2 data-aos="zoom-in" data-aos-delay="400">Nos programmes</h2>
                            <p></p>
                            <div class="requirements" style="font-size:17px">
                                <!-- <h3>Première passerelle</h3> -->
                                <span data-aos="zoom-in" data-aos-delay="400"> Le CIFEC Bénin propose une gamme complète et unique de programmes à destination
                                    d'étudiants et de dirigeants à haut potentiel.</span> <br><br>

                                <div class="courses">
                                    <div class="courses-03">
                                        <!-- <div class="col-sm-3 single-courses-box" data-aos="zoom-in" data-aos-delay="400">
                                            <div class="single-courses">
                                                <div class="courses-content">
                                                    <h3>Programme National</h3>
                                                    <ul class="list-unstyled">
                                                        <a href="">
                                                            <li style="font-size:17px">Licence Nationale</li>
                                                        </a>
                                                        <br>
                                                        <a href="">
                                                            <li style="font-size:17px">LFCA</li>
                                                        </a>
                                                        <br><br>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> -->

                                        <div class="col-sm-4 single-courses-box" data-aos="zoom-in" data-aos-delay="600">
                                            <div class="single-courses">
                                                <div class="courses-content">
                                                    <h3>CAMES</h3>
                                                    <ul class="list-unstyled">
                                                        <a href="lstcf.php">
                                                            <li style="font-size:17px">LSTCF</li>
                                                        </a> <br>
                                                        <a href="mcca-escae.php">
                                                            <li style="font-size:17px">MCCA de I’ESCAE Niamey</li>
                                                        </a> <br><br><br><br><br>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 single-courses-box" data-aos="zoom-in" data-aos-delay="800">
                                            <div class="single-courses">
                                                <div class="courses-content">
                                                    <h3>Programme Français</h3>
                                                    <ul class="list-unstyled">
                                                        <a href="dcg.php">
                                                            <li style="font-size:17px">DCG / DGC</li>
                                                        </a>
                                                        <br>

                                                        <a href="lcca.php">
                                                            <li style="font-size:17px">LCCA INTEC Paris</li>
                                                        </a>
                                                        <br>
                                                        <a href="mcca-intec.php">
                                                            <li style="font-size:17px">MCCA INTEC Paris</li>
                                                        </a>
                                                        <br>
                                                        <a href="dscg.php">
                                                            <li style="font-size:17px">DSCG / DSGC</li>
                                                        </a>
                                                        <br>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4 single-courses-box" data-aos="zoom-in" data-aos-delay="1000">
                                            <div class="single-courses">
                                                <div class="courses-content">
                                                    <h3>Certificats de Spécialisation</h3>
                                                    <ul class="list-unstyled">
                                                        <a href="audit.php">
                                                            <li style="font-size:17px"> Audit et Contrôle Légal des Comptes</li>
                                                        </a>
                                                        <br>
                                                        <a href="gestion.php">
                                                            <li style="font-size:17px"> Gestion des Associations</li>
                                                        </a>
                                                        <br>
                                                        <a href="comptabilite.php">
                                                            <li style="font-size:17px">Comptabilité Internationale</li>
                                                        </a>
                                                        <br>
                                                        <a href="auditsy.php">
                                                            <li style="font-size:17px">Audit des SI</li>
                                                        </a>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- chiffres cles -->
    <div class="home_version_03">
        <section class="achievment-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 section-header-box" data-aos="zoom-in" data-aos-delay="400">
                        <div class="section-header">
                            <h2>Chiffres clés</h2>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-3 counters-item" data-aos="zoom-in" data-aos-delay="400">
                        <div class="section counter-box">
                            <img src="images/index/counter-icon-03.png" alt="">
                            <div class="project-count counter">11</div>
                            <span>Années d'expériences
                        </div>
                    </div>

                    <div class="col-sm-3 counters-item" data-aos="zoom-in" data-aos-delay="600">
                        <div class="section counter-box">
                            <img src="images/index/counter-icon-01.png" alt="">
                            <div class="project-count counter">1850</div>
                            <span>Diplomés</span>
                        </div>
                    </div>

                    <div class="col-sm-3 counters-item" data-aos="zoom-in" data-aos-delay="800">
                        <div class="section counter-box">
                            <img src="images/index/counter-icon-01.png" alt="">
                            <div class="project-count counter">3500</div>
                            <span>Etudiants</span>
                        </div>
                    </div>

                    <div class="col-sm-3 counters-item" data-aos="zoom-in" data-aos-delay="1000">
                        <div class="section counter-box">
                            <img src="images/index/counter-icon-04.png" alt="">
                            <div class="project-count counter">05</div>
                            <span>Diplômes</span>
                        </div>
                    </div>

                </div>

            </div>
        </section>
    </div>

    <!-- partenaires -->
    <div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 section-header-box">
                    <div class="section-header" data-aos="zoom-in" data-aos-delay="400">
                        <br><br>
                        <h2>Nos Partenaires</h2>
                    </div>
                </div>
            </div>
            <p style="font-size:17px">
                Les principaux partenaires du CIFEC sont la prestigieuse Ecole Supérieure de Commerce et
                d’Administration des Entreprises (ESCAE) située à Niamey au NIGER dont le Fondateur, Directeur Général est M Victor
                AKESSE, Expert-Comptable et l’Institut National des Techniques Economiques et Comptables
                (INTEC) de Paris. <br>
                 Viennent par la suite L’Institut international de formation à
                l’expertise comptable (2IFEC) du Burkina Faso, Le Centre de formation à la Gestion
                des entreprises (CFGE) de Côte d’Ivoire ;
            </p>
            <div class="row">
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="600"><img src="img/partner-02.png" alt=""></div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="800"><img src="img/partner-04.png" alt=""></div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="1000"><img src="img/partner-03.png" alt=""></div>
                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="1200"><img src="img/partner-01.png" alt=""></div>
            </div>

            <br><br>
        </div>
    </div>
    <br><br>

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
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>