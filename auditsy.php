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
	<!-- Ends: .header-top -->
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
                            <h1>Audit des systèmes d'informations</h1>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
		</div>
		<div class="rev_slider_wrapper">
			<div id="rev_slider_1" class="rev_slider" style="display:none">

				<!-- BEGIN SLIDES LIST -->
				<ul>
					<li data-transition="boxfade" data-title="Slide Title" data-param1="Additional Text" data-thumb="img/CIFEC-18.jpg">
						<div class="slider-overlay"></div>
						<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
						<img src="img/CIFEC-18.jpg" alt="Sky" class="rev-slidebg">
						<!-- BEGIN BASIC TEXT LAYER -->
						<!-- LAYER NR. 1 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1" data-x="left" data-hoffset="0" data-y="center" data-voffset="-140" data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Plongez dans le
						</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-2" data-x="left" data-hoffset="0" data-y="center" data-voffset="-80" data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Monde de la Finance
						</div>

						<!-- LAYER NR. 3 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-p" data-x="left" data-hoffset="0" data-y="center" data-voffset="-10" data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;">Découvrez les multiples facettes du monde financier avec nos formations pointues et <br>préparez-vous à plonger dans une carrière passionnante.
						</div>

						<!-- LAYER NR. 4 -->
						<div class="tp-caption lfb tp-resizeme header-btn" data-x="left" data-hoffset="0" data-y="center" data-voffset="90" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 8;"><a href="#." class="el-btn-regular slider-btn-left">Nos programmes</a> <a href="#." class="el-btn-regular">Nous contacter</a>
						</div>
					</li>
					<li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="img/CIFEC-17.jpg">
						<div class="slider-overlay"></div>
						<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
						<img src="img/CIFEC-17.jpg" alt="Sky" class="rev-slidebg">
						<!-- BEGIN BASIC TEXT LAYER -->
						<!-- LAYER NR.1 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1" data-x="left" data-hoffset="0" data-y="center" data-voffset="-140" data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Construisez votre
						</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4  header-1 title-line-2" data-x="left" data-hoffset="0" data-y="center" data-voffset="-80" data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Carriere comptable avec nous
						</div>

						<!-- LAYER NR. 3 -->
						<div class="tp-caption font-lora sfb tp-resizeme letter-space-5 header-p" data-x="left" data-hoffset="0" data-y="center" data-voffset="-10" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;">Explorez nos programmes de formation spécialisés et faites un pas décisif vers<br>une carrière comptable prometteuse et épanouissante.
						</div>

						<!-- LAYER NR. 4 -->
						<div class="tp-caption lfb tp-resizeme header-btn" data-x="left" data-hoffset="0" data-y="center" data-voffset="90" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 8;"><a href="#." class="el-btn-regular slider-btn-left">Nos Programmes</a> <a href="#." class="el-btn-regular">Nous contacter</a>
						</div>
					</li>
				</ul><!-- END SLIDES LIST -->

			</div><!-- END SLIDER CONTAINER -->
		</div><!-- END SLIDER CONTAINER WRAPPER -->
	</header>

<div class="single-courses-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 sidebar-left">
				<div class="sidebar-content">
					
				<?php
                    include_once "includes/sidebar.php";
                ?>
				</div>
			</div>

			<div class="col-sm-8 sidebar-left">
				<div class="single-curses-contert">
					<div class="description-content">
						<h1>Description</h1>
						<hr>
                        <p style="font-size:17px"> Sont autorisés à s'inscrire à cette formation, les candidats titulaires de l'un des titres
                            ou diplômes suivants </p>
                        <ul>
                                <li style="font-size:17px"> Baccalauréat ;</li>
                                <li style="font-size:17px">titre ou diplôme admis en dispense du baccalauréat en vue d'une inscription dans les universités ;</li>
                                <li style="font-size:17px">titre ou diplôme étranger permettant l'accès à l'enseignement supérieur dans
                                    le pays de délivrance (les candidats doivent en apporter la preuve en
                                    fournissant une attestation de comparabilité du CIEP ENIC-NARIC) ;</li>
                                <li style="font-size:17px">diplôme homologué niveaux I, II, III ou IV figurant sur l'arrêté du 17 juin 1980
                                    modifié fixant la liste d'homologation de titres et diplômes de l'enseignement
                                    technologique (https://www.francecompetences.fr/) ;</li>
                                <li style="font-size:17px">diplômes enregistrés aux niveaux I, II, III et IV du répertoire national des
                                    certifications professionnelles (https://www.francecompetences.fr/) ;</li>
                                <li>Accès dérogatoire par une VAPP prononcée par l'INTEC au vu des études,
                                formations et expérience professionnelle ou personnelle.</li>
                        </ul>
						<p>Les fondamentaux de la discipline doivent être préalablement maîtrisés.</p>
				
                        <div class="description-content">
                            <h1>Objectifs</h1>
							<hr>
                            <ul>
                                <li style="font-size:17px">Maîtriser les cadres conceptuels et méthodologiques de la démarche d'audit.</li>
                                <li  style="font-size:17px">Appliquer cette démarche aux différentes composantes du système
                                    d'information.</li>
                                <li  style="font-size:17px">Utiliser les technologies de l'information et de la communication pour mener à
                                bien les travaux requis par ce type de mission.</li>
                            </ul>
                            <h1>Mentions officiels </h1>
                            <p style="font-size:17px">Intitulé officiel figurant sur le diplôme : Certificat de spécialisation Audit des systèmes
                            d'information</p>
                        </div>
                        <h1> Onglet programme</h1>
                        <p>
                            <h1>Modalité d'evaluation</h1>
							<hr>
                            <p style="font-size:17px">Examen final annuel : (épreuve écrite) d'une durée de 4 heures.
                            Conditions de délivrance du certificat de spécialisation : le certificat de
                            spécialisation est délivré au candidat qui a obtenu une note égale ou supérieure à
                            10/20 à l'examen final de l'unique UE composant ce certificat (UE TEC761).
                            </p>                            
                        </p>
                        <h1> ONGLET COMPÉTENCES</h1>
                            <p><h3>Série 1.</h3>
                                <ul>
                                <li> Titre 1. Les contextes légaux et organisationnels des audits, les spécificités de l'audit
                                        d'un système d'information et les différents types d'audit des systèmes d'information</li>
                                        <li>        Titre 2. Memento de travail, revue de sécurité informatique en PME</li>
                                <li>        Titre 3. Revue générale informatique</li>
                                </ul>
                                        <h3>   Série 2.</h3>
                                        <ul>
                                            <li> Titre 4. Les normes et les référentiels des audits des systèmes d'information</li>
                                            <li>  Titre 5. Le système d'information et le contrôle interne</li>
                                        </ul>
                                        <h3>Série 3</h3>

                                        <ul>
                                        <li>Titre 6. L'audit des éléments constitutifs du système d'information: une approche par
                                        les risques</li>
                                    </ul>
								 <h3>Série 4.</h3>
                                        <li>    Titre 7. L'audit des données</li>
                                    </p>
                            <h1>Onglets et infos pratiques</h1>
                            <p>
								<h1>Contact :</h1>
							
                                <ul>
									<br>
                                    <li>Adresse : 10 BP 0592 Carré/1061 Vodjè, situé juste après le carrefour SONAR à
                                        100m de l’hôtel de l’Etoile.</li>
                                    <li>Tél : (+229) 95 37 42 53 - (+229) 66 15 82 32</li>
                                    <li>Site : www.cifecbenin.net</li>
                                </ul>
                            </p>
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