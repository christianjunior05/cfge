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
                        <?php include_once 'includes/logo.php';?>
                       
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
                            <h1>Missions et Valeurs</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="single-courses-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 sidebar-left">
                    <div class="single-curses-contert">
                        <div class="description-content">
                            <h2 data-aos="zoom-in" data-aos-delay="400">Le mot du Directeur</h2>

                            <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">
                                Le CFGE est une Grande Ecole d'Expertise comptable réputée pour ses programmes,
                                le nombre et la qualité de ses partenaires internationaux, ses doubles compétences et
                                doubles diplômes, ses filières d'excellence. Les témoignages des entreprises, des
                                recruteurs et des milieux éducatifs reconnaissent à notre Ecole le séreux et la qualité
                                des enseignements, de la pédagogie et de l'accompagnement des élèves. Les réussites de
                                nos diplômés au DCG et DSCG attestent que le CFGE mérite justement le qualificatif
                                de « valeur sûre ».
                            </p>
                            
                            <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">
                                Notre mission est de former des managers et entrepreneurs dotés d'un solide socle de
                                connaissances fondamentales en sciences de gestion, mais également capables de comprendre
                                les enjeux et la complexité du monde économique et des affaires où la créativité et
                                l'innovation conditionnent le succès de leurs décisions, actions et comportements.
                                En conséquence, développer les capacités d'innovation, fournir à chaque apprenant un
                                solide bagage entrepreneurial, accompagner nos étudiants futurs créateurs de valeur
                                au plan économique et sociétal sont des lignes directrices de nos programmes.
                            </p>
                           
                            <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">
                                Fort d'un corps professoral, national, international, fidèle et engagé dans la réussite
                                de ses étudiants, le CFGE accompagne désormais les cadres, ingénieurs et managers
                                via des dispositifs qualifiants et diplômants de formation continue. Plus que jamais,
                                Le Centre International de Formation à l'Expertise Comptable est la Grande Ecole de
                                Gestion et de Management du BENIN, soutenue par un réseau soudé et solidaire de
                                cabinets d'expertise comptable, d'entreprises et d'expert comptables diplômés. <br><br>
                                <cite><img src="img/PDG.JPG" alt=""> <br><span> Victor AKESSE,</span><span>Fondateur & PDG du groupe ESCAE</span></cite>
                            </p>

                            <h2 data-aos="zoom-in" data-aos-delay="400">Valeurs morales intrinsèques</h2>
                            <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">
                                Toute œuvre humaine pour prospérer a besoin d’avoir des valeurs. Donc pour nous au
                                CFGE, ces valeurs sont : La foi en un créateur qui régente tout dans l’Univers,
                                qu’on l’appelle Dieu ou d’un autre nom, le devoir d’objectivité sans lequel rien
                                de consistant ne pourrait être construit. A cela s’ajoute la discipline et, la
                                compétence qui sont les vrais fondements de notre culture d’entreprise ainsi
                                que la relation de confiance et de travail qui doit s’établir entre le CFGE et
                                nos étudiants, une relation que nous nous évertuons à construire avec votre aide.
                            </p>
                            <p >
                            <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">
                                Au CFGE, nous formons une équipe avec des objectifs biens définis que nous nous évertuons
                                à atteindre avec l’aide et le consentement de tous, autorités du CFGE, corps enseignant,
                                étudiants et parents d’étudiants. C’est ensemble que nous réussirons.
                            </p>
                            
                            <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">
                                C’est dans le souci de réussir que les valeurs que nous nous sommes données, s’expriment
                                à travers des comportements qui sont de nature à nous aider dans la matérialisation de nos
                                objectifs communs.
                            </p>
                           
                            <p style="font-size:17px" data-aos="zoom-in" data-aos-delay="400">
                                En premier, la crainte de Dieu et la recherche constante de son assistance ; en seconde
                                position pour nous se trouvent l’intégrité et l’honnêteté qui sont les marques de toutes
                                personnes voulant se faire une place dans la société, elles sont donc placées au cœur
                                de notre démarche, en troisième position, le travail chez nous se fait en équipe et,
                                nous vouons à chaque personne un respect absolu ; en quatrième position, la communication
                                sincère et honnête avec tout le monde pour que le travail puisse se faire véritablement
                                en équipe.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Area section -->
    <?php include_once 'includes/footer.php'; ?>

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