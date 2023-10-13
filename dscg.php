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
							<h1>DSCG</h1>
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
	<!--  End header section-->

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
							<p style="font-size:17px">Le DSGC se déroule comme suit :</p>
							<ul>
								<li style="font-size:17px"> année d'entrée : bac +3 de la filière</li>
								<li style="font-size:17px">année de sortie : bac+5</li>
								<li style="font-size:17px">durée moyenne des études : 2 ans </li>
							</ul>
							<p style="font-size:17px">Cette durée peut être réduite en cas de dispense d'épreuves ou de validation d'acquis (en savoir plus).</p>
							<p style="font-size:17px">La formation peut-être à temps complet selon un parcours défini par l’INTEC ou à la
								carte selon vos souhaits et besoins. En parallèle d’une activité professionnelle, dans
								le cadre d’un contrat d’apprentissage, en auditeur libre, en présentiel ou en
								distanciel.</p>
						</div>
						<div class="description-content">
							<h1>Presentation et objectifs: </h1>
							<hr>
							<p style="font-size:17px">Le DSCG/DSGC permet d'acquérir des connaissances approfondies préparant aux
								métiers de la comptabilité, du contrôle de gestion, de l'audit et de la finance.</p>
							<p style="font-size:17px">Les titulaires du DSCG/ DSGC ont vocation à poursuivre leur carrière :</p>
							<ol>
								<li style="font-size:17px">dans les cabinets d'expertise comptable et/ ou de commissariat aux comptes
									comme collaborateur ou stagiaire et futur associé ;</li>
								<li style="font-size:17px">dans des postes de responsabilité dans les directions comptables et financières,de contrôle de gestion et d'audit interne des organisations privées ou publiques ;</li>
								<li style="font-size:17px">dans des cabinets de consultants.</li>
							</ol>
						</div>
						<div class="description-content">
							<h1>Modalité d'enseignement </h1>
							<hr>
							<ul>
								<li style="font-size:17px">Formation initiale</li>
								<li style="font-size:17px">Formation à distance,</li>
								<li style="font-size:17px">Formation continue.</li>
							</ul>
							<p style="font-size:17px">Le diplôme peut être préparé et obtenu par la voie de la VAE.</p>
						</div>
						<div class="description-content">
							<h1>Inscription et candidature </h1>
							<hr>
							<ul>
								<li style="font-size:17px">Les candidatures pour le DCG sont ouvertes du 15/02/2023 au 30/06/2023</li>
								<li style="font-size:17px">Les cours en présentiel, avec webconférences et support de cours papier et
									numériques, inscriptions ouvertes à compter du 5 juillet</li>
								<li style="font-size:17px">Les cours du soir avec webconférences et support de cours papier et
									numériques, inscriptions ouvertes à compter du 5 juillet.</li>
							</ul>
							<h1>Période de formation</h1>
							<hr>
							<p style="font-size:17px">Du 07 septembre 2023 au 15 mai 2024.</p>

							<h1>Conditions d'admision</h1>
							<hr>
							<p style="font-size:17px">Peuvent s'inscrire au DSCG / DSGC, les titulaires d'un des diplômes suivants :</p>
							<ol>
								<li style="font-size:17px"> Diplôme de gestion et de comptabilité (DGC) du Cnam-Intec</li>
								<br>
								<li style="font-size:17px"> Diplôme de comptabilité et de gestion (DCG) de l'État ou titre ou diplôme
									admis en dispense du DCG État ;</li>
									<br>
								<li style="font-size:17px">Diplôme d'études comptables et financières (DECF) État</li>
								<br>
								<li style="font-size:17px">Master 2 ou diplôme conférant le grade de master délivré en France ou dans
									un État membre de l'Espace européen de l'enseignement supérieur ;</li>
									<br>
								<li style="font-size:17px">Titre de responsable comptable du Cnam (N.B. : Ce titre ne donne pas accès
									aux épreuves du DSCG Etat) ;</li>
									<br>
								<li style="font-size:17px">Accès dérogatoire par une VAPP prononcée par le Cnam-Intec, au vu des
									études, formations et expérience professionnelle ou personnelle ;</li>
									<br>
								<li style="font-size:17px">Et, à titre dérogatoire, les personnes n'ayant pas validé la totalité des UE du
									DCG/DGC-INTEC sont autorisées à s'inscrire à des UE du DSGC INTEC sous
									réserve qu'ils remplissent les conditions d'inscription pré-requises fixées pour
									chaque UE du DSGC-INTEC. Les prérequis obligatoires par UE sont précisés
									sur le site web de l'INTEC. N.B. : Cette procédure dérogatoire d'inscription ne
									s'applique pas aux examens de l'Etat.</li>
									<br>
							</ol>
						</div>

						<div class="description-content">
							<h1>Conditions d'obtention</h1>
							<hr>
							<h3>Sont déclarés admis-es au DSGC, les candidats qui remplissent les trois conditions
								suivantes :</h3>
							<ol>
								<li style="font-size:17px" style="font-size:17px">répondre aux conditions d'accès au DSGC ;</li>
								<br>
								<li style="font-size:17px" style="font-size:17px">avoir obtenu une moyenne générale de 10/20 soit un total de 85 points aux 7 UE
									le composant (sans note éliminatoire, c'est-à-dire inférieure à 6/20) ;</li>
									<br>
								<li style="font-size:17px" style="font-size:17px">avoir préparé trois UE au moins à l'Intec ou au Cnam par la formation ou
									l'accompagnement VAE. Il est précisé que les UE obtenues par validation des
									études supérieures (VES) ici ne sont pas prises en compte.</li>
							</ol>
							<h3>Le DSGC est un bac+5 et le DSCG confère le grade de master..</h3>
							<p>NB : Le DSGC de l'Intec dispense de 5 UE du DSCG. Pour obtenir le diplôme État,
								il faut valider à l'État, par examen ou VAE, les UE 1 - Gestion juridique, fiscale et
								sociale et 4 - Comptabilité et audit.</p>
							<div class="requirements">
									<h1>POURSUITE D’ETUDES</h1>
									<hr>
								<p>Inscription au stage d’expertise comptable en qualité d’expert-comptable stagiaire. </p>

								<div class="row">
									<div class="col-sm-6">
										<h3>Unités d'enseignement constituant le diplome </h3>

										<ul class="">
											<li style="font-size:17px" style="font-size:17px">UE 211 - Gestion juridique fiscale et sociale</li>
											<li style="font-size:17px" style="font-size:17px">UE 212 - Finance</li>
											<li style="font-size:17px" style="font-size:17px">UE 213 - Management et contrôle de
												gestion</li>
											<li style="font-size:17px" style="font-size:17px">UE 214 - Comptabilité et audit</li>
											<li style="font-size:17px" style="font-size:17px">UE 215 - Management des systèmes
												d'information</li>
											<li style="font-size:17px" style="font-size:17px">UE 217 - Mémoire professionnel</li>
											<li style="font-size:17px" style="font-size:17px">UE 218 - Anglais des affaires</li>
										</ul>
									</div>
									<div class="col-sm-6">
										<h3>EXAMENS 2023</h3>
										<h3>Examens de l'Intec</h3>
										<ul>
											<li style="font-size:17px">du 10 au 17 mai 2023.</li>
											<li style="font-size:17px">oral UE Communication
												professionnelle en juin 2023.</li>
										</ul>
										<h3>Examens de l'Etat</h3>
										<ul>
											<li style="font-size:17px">Du 23 Mai au 5 Juin</li>
											<li style="font-size:17px">Oral de UE Communication professionelle à partir du 6 juin 2023</li>
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
	<!-- ./ End Courses Area section -->
	<?php include_once 'includes/footer.php'; ?>
	<!-- Footer Area section -->

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