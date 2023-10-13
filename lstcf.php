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
                            <h1>LSTCF</h1>
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
						<h1>Description: </h1>
						<p style="font-size:17px">La LSTCF se déroule comme suit :
							<li style="font-size:17px">année d&#39;entrée : bac</li>
                            <li style="font-size:17px">année de sortie : bac+3</li> <br>
                            <li style="font-size:17px"> durée des études : à temps plein, 3 ans en moyenne</li>
                            <li style="font-size:17px">La formation peut-être à temps complet selon un parcours défini par le CIFEC ou à la
                                carte selon vos souhaits et besoins. En parallèle d’une activité professionnelle, en
                                        auditeur libre, en présentiel ou en distanciel.</li>
                        </p>
					</div>
                    <div class="description-content">
						<h1>Presentation et objectifs: </h1>
						<p style="font-size:17px"> Reconnue par l’enseignement supérieur français et le CAMES, la LSTCF est un
                            diplôme de grade BAC + 3 délivré par l’ESCAE de Niamey. Elle permet à l’étudiant
                            d’acquérir les connaissances de base en comptabilité, gestion et finance d’entreprise.
                            La LSTCF permet également de mieux préparer le DGC Intec et permet la poursuite
                        en Master Comptabilité, Contrôle, Audit (MCCA).
					</div>
					<div class="description-content">
						<h1>Modalité d'enseignement: </h1>
						<br>
						<ol>
							<li style="font-size:17px">Formation initiale</li>
							<li style="font-size:17px">Formation à distance,</li>
							<li style="font-size:17px">Formation continue.</li>
						</ol>
						<p style="font-size:17px">Le diplôme peut être préparé et obtenu par la voie de la VAE.</p>
					</div>
					<div class="description-content">
						<h1>Conditions d'admitions: </h1>
						<br>
						<ol>
							<li style="font-size:17px">satisfaire aux conditions d&#39;accès</li>
							<li style="font-size:17px">Sont reçus en LSTCF les candidats ayant validé les 6 semestres avec
							une moyenne au moins égale à 10/20 sur l’ensemble des semestres
							(sans note inférieure à 6/20 aux UE).</li>
							
						</ol>
						<h3>Classes de préparations renforcées DCG 1, DCG 2 et DCG 3</h3>
						<p style="font-size:17px">LE CIFEC BENIN à travers la Licence des Sciences Techniques Comptables et
                            Financières (LSTCF), propose un programme de classes renforcées pour la
                            première, la deuxième et la troisième année de DCG, avec un encadrement et un
                            suivi personnalisé sur la préparation des 13 UE.</p>
					</div>
					<div class="description-content">
						<h1>Les 05 unités d’enseignement (UE) restant à valider pour obtenir le DGC Intec sont</h1>
						<br>
						<ul>
										<li style="font-size:17px">UE 112 -Droit des sociétés,</li>
										<li style="font-size:17px">UE 113 - Droit social,</li>
										<li style="font-size:17px">UE 114 - Droit fiscal,</li>
										<li style="font-size:17px"> UE 117 - Management,</li>
										<li style="font-size:17px"> UE 120 - Comptabilité approfondie.</li>
									</ul>
					</div>
				
					<div class="count-list">
						<h1>Presentation et objectifs: </h1>
						<hr>
						<p style="font-size:17px">La LSTCF dispensera de 08 unités d’enseignements sur les 13 UE du DGC
							Intec à partir de l’année académique 2024 – 2025.</p>
							<ol>
								<li style="font-size:17px">UE 111 - Fondamentaux du droit</li>
								<li style="font-size:17px">UE 112 - Droit des sociétés et des groupements d'affaires</li>
								<li style="font-size:17px">UE 113 - Droit social</li>
								<li style="font-size:17px">UE 114 - Droit fiscal</li>
								<li style="font-size:17px">UE 115 - Économie contemporaine</li>
								<li style="font-size:17px">UE 116 - Finance d&#39;entreprise</li>
								<li style="font-size:17px">UE 117 - Management</li>
								<li style="font-size:17px">UE 118 - Système d&#39;information de gestion</li>
								<li style="font-size:17px">UE 119 - Comptabilité</li>
								<li style="font-size:17px">UE 120 - Comptabilité approfondie</li>
								<li style="font-size:17px">UE 121 - Contrôle de gestion</li>
								<li style="font-size:17px">UE 122 - Anglais appliqué aux affaires</li>
								<li style="font-size:17px">UE 123 - Communication professionnelle(rapport de stage)</li>
								<li style="font-size:17px">UE 118 - Système d&#39;information de gestion</li>
								<li style="font-size:17px">UE 119 - Comptabilité</li>
							</ol>
					</div>
				</div>
			</div>				
		</div>
	</div>	
</div>
<!-- ./ End Courses Area section -->

<!-- Footer Area section -->

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
