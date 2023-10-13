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
							<h1>MCCA ESCAE</h1>
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
						<h2 >Description :</h2>
							<p  style="font-size:17px">le MCCA se déroule comme suit: </p>
						
						<br>
						<ul>
							<li  style="font-size:17px"> année d'entrée : bac+3 de la filière</li>
							<li  style="font-size:17px">durée moyenne des études : 2 ans</li>
							<li  style="font-size:17px">année de sortie : bac+5</li>
						</ul>
						<p style="font-size:17px">La formation peut-être à temps complet selon un parcours défini par le CIFEC ou à la
							carte selon vos souhaits et besoins. En parallèle d’une activité professionnelle, en
							auditeur libre, en présentiel ou en distanciel.</p>


					</div>
					<br>
					<div class="description-content">
						<h2>Presentation et objectifs: </h2>
						<p style="font-size:17px"> Reconnu par l’enseignement supérieur français et le CAMES, le MCCA est un
							diplôme de grade BAC + 5 délivré par l’ESCAE de Niamey. Il prépare au Diplôme
							Supérieur de Comptabilité et de Gestion (DSCG) qui offre la possibilité à ses
							détenteurs de réaliser leur stage d’expertise-comptable.</p>
						<p style="font-size:17px">Le MCCA a l’ambition d’offrir à des professionnels disposant d&#39;une première
							expérience, un complément de formation de haut niveau à finalité professionnelle et
							de recherche, centré sur les métiers et les techniques du conseil, du contrôle de
							gestion, de l’audit interne, de l&#39;audit externe et du reporting et contrôle financier des
							groupes.</p>
					</div>
					<div class="description-content">
						<h2>Modele d'enseignement </h2>
						<br>
						<ul>
							<li  style="font-size:17px">Formation initiale</li>
							<li  style="font-size:17px">Formation à distance,</li>
							<li  style="font-size:17px">Formation continue.</li>
						</ul>
						<p  style="font-size:17px">Le diplôme peut être préparé et obtenu par la voie de la VAE.</p>
					</div>

					<div class="description-content">
						<h2>Inscription et candidature </h2>
						<br>
						<ul>
							<li  style="font-size:17px">Les candidatures pour la LSTCF sont ouvertes du 15/04/2023 au 15/09/2023</li>
							<li  style="font-size:17px">Les cours en présentiel, avec webconférences et support de cours papier et
								numériques, inscriptions ouvertes à compter du 5 juillet..</li>
							<li  style="font-size:17px">Les cours du soir avec webconférences et support de cours papier et
								numériques, inscriptions ouvertes à compter du 5 juillet.</li>
						</ul>
						<h1>Conditions d'admision</h1>
						<hr>
						<p  style="font-size:17px">Sont autorisés à suivre cette formation :</p>
						<ol>
							<li  style="font-size:17px"> La LSTCF</li>
							<li  style="font-size:17px"> une licence générale reconnue par le CAMES dans le domaine de la
								comptabilité financière, la comptabilité de gestion ou la finance</li>
							<li  style="font-size:17px"> Un DCG/DGC</li>
							<li  style="font-size:17px"> Une maitrise en gestion ou autre diplôme équivalent</li>
							<li  style="font-size:17px">Un master, DESS ou diplôme équivalent</li>
						</ol>
					</div>

					<div class="description-content">
						<h1>Conditions d'obtention</h1>
						<hr>
						<ul>
							<li  style="font-size:17px">Satisfaire aux conditions d&#39;accès</li>
							<li  style="font-size:17px">Sont reçus au master CCA les candidats ayant validé les 4 semestres
								avec une moyenne au moins égale à 10/20 à chaque semestre (sans
								note inférieure à 6/20 aux UE).</li>
						</ul>
						
						<p  style="font-size:17px">NB: Le MCCA de l’ESCAE de Niamey dispensera de 02 unités d’enseignements sur les 07 UE du DSGC Cnam-Intec à partir de l’année académique 2024 – 2025.</p>
						<br>
						<h2>Les 05 unités d’enseignement (UE) restant à valider pour obtenir le DSGC Cnam-
							Intec sont : </h2>
						<br>
						<ul>
							<li  style="font-size:17px">UE 212 Finance</li>
							<li  style="font-size:17px">UE 215 Management des systèmes d'informations</li>
							<li  style="font-size:17px">UE 211 Getions juridique , fiscale et sociale </li>
							<li  style="font-size:17px">UE 214 Comptabilité et audit </li>
							<li  style="font-size:17px">UE 217 Relations professionelles. 2 (soutenace de mémoire)</li>
						</ul>
					</div>
					<br>
					<div class="description-content">
						<h1>Les debouchés et metiers visés </h1>
					<br>
						<ol>
							<li  style="font-size:17px">Collaborateur en cabinet d’expertise comptable ou d’audit visant l’expertise
								comptable ;</li>
							<li  style="font-size:17px">Contrôleur de gestion, directeur comptable, DAF, auditeur interne en
								entreprise, association, établissements publics, collectivités locales.</li>
							<li  style="font-size:17px">Les cours du soir avec webconférences et support de cours papier et
								numériques, inscriptions ouvertes à compter du 5 juillet.</li>

						</ol>

						<h1>Poursuite d'etudes</h1>
						<hr>
						<p  style="font-size:17px">La finalisation du DSCG permet de rentrer en stage d’expertise comptable en
							cabinet. Le master CCA de l’ESCAE de Niamey donne droit à 2 UE sur les 7 UE du
							DSGC Cnam-Intec.</p>
						

							<div class="description-content">
								<h1>Unites d'enseignement constituant le diplome</h1>
								<hr>
								<ul>
									<li  style="font-size:17px">UE 211 - Gestion juridique et fiscale </li>
									<li  style="font-size:17px">UE 212 - Finance </li>
									<li  style="font-size:17px">UE 117 - Management</li>
								</ul>
							</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ./ End Courses Area section -->


	<?php include_once 'includes/footer.php'; ?><!-- ./ End Footer Area -->
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