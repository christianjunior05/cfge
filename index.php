<?php
session_start();
// Obtenez le nom du fichier actuel
$current_page = basename($_SERVER['PHP_SELF']);

include_once 'controller.php';
?>

<!doctype html>
<html class="no-js" lang="fr">

<?php include_once 'includes/head.php'; ?>

<body class="home_version_02">


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
					</div>
                    <?php include_once 'includes/logo.php'; ?>
					<div class="collapse navbar-collapse edu-nav main-menu" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav pull-right">
							<?php include_once 'includes/menu.php'; ?>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
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
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1" data-x="left" data-hoffset="0" data-y="center" data-voffset="-140" data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Bienvenu au

						</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-2" data-x="left" data-hoffset="0" data-y="center" data-voffset="-80" data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">CIFEC Bénin
						</div>

						<!-- LAYER NR. 3 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-p" data-x="left" data-hoffset="0" data-y="center" data-voffset="-10" data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;">La nouvelle solution de l’Expertise Comptable, qui vous donne la possibilité de <br> devenir <strong>EXPERT-COMPTABLE STAGIAIRE</strong> en 5 ans après le BAC.

						</div>

						<!-- LAYER NR. 4 -->
						<div class="tp-caption lfb tp-resizeme header-btn" data-x="left" data-hoffset="0" data-y="center" data-voffset="90" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 8;"><a href="#programme" class="el-btn-regular slider-btn-left">Nos programmes</a> <a href="contact.php" class="el-btn-regular">Nous contacter</a>
						</div>
					</li>
					<li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="img/CIFEC-17.jpg">
						<div class="slider-overlay"></div>
						<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
						<img src="img/CIFEC-17.jpg" alt="Sky" class="rev-slidebg">
						<!-- BEGIN BASIC TEXT LAYER -->
						<!-- LAYER NR.1 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1" data-x="left" data-hoffset="0" data-y="center" data-voffset="-140" data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">Intégrez le CIFEC Bénin
						</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4  header-1 title-line-2" data-x="left" data-hoffset="0" data-y="center" data-voffset="-80" data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif;, serif; white-space: nowrap;font-weight:700;">et devenez Expert-comptable
						</div>

						<!-- LAYER NR. 3 -->
						<div class="tp-caption font-lora sfb tp-resizeme letter-space-5 header-p" data-x="left" data-hoffset="0" data-y="center" data-voffset="-10" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif;, serif; white-space: nowrap;">Préparez avec nous la LCCA et le MCCA de l’INTEC de Paris comme si vous y étiez <br> et entrez directement en stage d’expertise comptable.
						</div>

						<!-- LAYER NR. 4 -->
						<div class="tp-caption lfb tp-resizeme header-btn" data-x="left" data-hoffset="0" data-y="center" data-voffset="90" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 8;"><a href="#programme" class="el-btn-regular slider-btn-left">Nos Programmes</a> <a href="contact.php" class="el-btn-regular">Nous contacter</a>
						</div>
					</li>
				</ul><!-- END SLIDES LIST -->

			</div><!-- END SLIDER CONTAINER -->
		</div><!-- END SLIDER CONTAINER WRAPPER -->
	</header>


	<section class="slider-content-bottom">
		<div class="container">
			<div class="row sider-btm-row-inner">

				<div class="col-sm-4 content_body slide_cont_box_02" data-aos="fade-up" data-aos-delay="400">
					<div class="slider-btm-box btm-item_02">
						<img src="images/index-02/slide-bottom-02.png" alt="" class="btm-item-icon">
						<h3>Formation d’excellence</h3>
						<p style="font-size:17px">Optez pour notre formation d'excellence et développez vos compétences de manière approfondie dans les domaines de la comptabilité, la finance et l’audit.<br><br>
						</p>
						<!-- <a href="#">read more<i class="fa fa-long-arrow-right slider-b-btn-icon"></i></a> -->
					</div>
				</div>

				<div class="col-sm-4 content_body slide_cont_box_01" data-aos="fade-up" data-aos-delay="500">
					<div class="slider-btm-box btm-item_01">
						<img src="images/index-02/slide-bottom-01.png" alt="" class="btm-item-icon">
						<h3>Corps Professoral qualifié</h3>
						<p style="font-size:17px">Une équipe pédagogique formée de professionnels expérimentés et dévoués à offrir une formation de qualité préparant les étudiants à réussir sereinement leurs futures
							carrières.
						</p>
						<!-- <a href="#">read more<i class="fa fa-long-arrow-right slider-b-btn-icon"></i></a> -->
					</div>
				</div>

				<div class="col-sm-4 content_body slide_cont_box_03" data-aos="fade-up" data-aos-delay="600">
					<div class="slider-btm-box btm-item_03">
						<img src="images/index-02/slide-bottom-03.png" alt="" class="btm-item-icon">
						<h3>Triple reconnaissance</h3>
						<p style="font-size:17px">Nos diplômes sont reconnus par l’Enseignement Supérieur Français, par le CAMES et l’Etat du Bénin. <br><br><br><br> </p>
						<!-- <a href="#">read more<i class="fa fa-long-arrow-right slider-b-btn-icon"></i></a> -->
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- bienvenu -->
	<section class="Welcome-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 Welcome-area-text" data-aos="zoom-in" data-aos-delay="400">
					<div class="row">
						<div class="col-sm-12 section-header-box">
							<div class="section-header section-header-l">
								<h2>Bienvenu au CIFEC Bénin</h2>
							</div><!-- ends: .section-header -->
						</div>
					</div>
					<p style="font-size:17px">Le Centre International de Formation à l’Expertise Comptable (CIFEC) du Bénin, est une grande école spécialisée dans les métiers de la comptabilité, le contrôle de gestion,
						l’audit et la finance et qui forme principalement les experts comptables.
					</p>
					<p style="font-size:17px">Il est réputé pour ses programmes, le nombre et la qualité de ses partenaires internationaux, ses prestigieux diplômes et ses filières d'excellence.</p>

					<a href="a-propos.php" class="read_more-btn fa fa-long-arrow-right">En savoir plus</a>
				</div><!-- Ends: . -->

				<div class="col-sm-6 welcome-img" data-aos="zoom-in" data-aos-delay="600">
					<img src="images/CIFEC_A_PROPOS.JPG" alt="" class="img-responsive">
				</div><!-- Ends: . -->
			</div>
		</div>
	</section>

	<!-- programmes -->

	<section class="Courses-area-02">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 section-header-box" data-aos="zoom-in">
					<div class="section-header">
						<h2>Nos programmes de formation</h2>
						<p style="font-size:17px">Le CIFEC BENIN forme les étudiants et auditeurs à plusieurs prestigieux diplômes notamment la Licence des Sciences Techniques Comptables et Financières (LSTCF) et le
							Master Comptabilité, Contrôle et Audit (MCCA) qui permettent respectivement de mieux préparer le Diplôme de Comptabilité et de Gestion (DCG) et le Diplôme Supérieur de
							Comptabilité et de Gestion (DSCG), diplôme conférant le titre d’expert-comptable stagiaire. <br><br>
						</p>
					</div>
				</div>
			</div>

			<div class="row courses-r-margin-bottom">
				<!-- <div class="col-sm-6 col-md-3 single-courses-box" data-aos="zoom-in" data-aos-delay="400">
					<div class="single-courses">
						<figure>
							<a href="">
								<div class="figure-img">
									<img src="images/Programme_National.jpeg" class="img-responsive">
								</div>
							</a>
						</figure>
						<div class="courses-content-box">
							<div class="courses-content">
								<h3> Programme National</h3>
								<a href="#">
									<p class="data-comment"><i class="fa fa-long-arrow-right footer-icon"></i> Licence Nationale</p>
								</a>
								<a href="#">
									<p class="data-comment"><i class="fa fa-long-arrow-right footer-icon"></i> LFCA</p>
								</a>
								<div class="d-none d-md-block">
									<p class="data-comment"><br><br><br><br></p>
								</div>

							</div>
						</div>
					</div>
				</div> -->

				<div class="col-sm-6 col-md-4 single-courses-box" data-aos="zoom-in" data-aos-delay="400">
					<div class="single-courses">
						<figure>
							<a href="">
								<div class="figure-img">
									<img src="images/Programme_CAMES.jpeg" class="img-responsive">
								</div>
							</a>
						</figure>
						<div class="courses-content-box">
							<div class="courses-content">
								<h3> CAMES</h3>
								<a href="lstcf.php">
									<p style="font-size:17px"><i class="fa fa-long-arrow-right footer-icon"></i> LSTCF</p>
								</a>
								<a href="mcca-escae.php">
									<p style="font-size:17px"><i class="fa fa-long-arrow-right footer-icon"></i> MCCA ESCAE Niamey</p>
								</a>
								<div class="d-none d-md-block">
									<p class="data-comment"><br><br></p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4  single-courses-box" data-aos="zoom-in" data-aos-delay="500">
					<div class="single-courses">
						<figure>
							<a href="">
								<div class="figure-img">
									<img src="images/Programme_Français.jpg" class="img-responsive">
								</div>
							</a>
						</figure>
						<div class="courses-content-box">
							<div class="courses-content">
								<h3> Programme Français</h3>
								<a href="dcg.php">
									<p style="font-size:17px"><i class="fa fa-long-arrow-right footer-icon"></i> DGC / DCG</p>
								</a>
								<a href="lcca.php">
									<p style="font-size:17px"><i class="fa fa-long-arrow-right footer-icon"></i> LCCA INTEC Paris</p>
								</a>
								<a href="mcca-intec.php">
									<p style="font-size:17px"><i class="fa fa-long-arrow-right footer-icon"></i> MCCA INTEC Paris</p>
								</a>
								<a href="dscg.php">
									<p style="font-size:17px"><i class="fa fa-long-arrow-right footer-icon"></i> DSGC / DSCG</p>
								</a>
								<div class="d-none d-md-block">
									<p style="font-size:17px" class="data-comment"></p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 single-courses-box" data-aos="zoom-in" data-aos-delay="600">
					<div class="single-courses">
						<figure>
							<a href="">
								<div class="figure-img">
									<img src="img/spe.jpg" alt="" class="img-responsive">
								</div>
							</a>
						</figure>
						<div class="courses-content-box">
							<div class="courses-content">
								<h3>Certificats de Spécialisation</h3>
								<a href="audit.php">
									<p style="font-size:17px"><i class="fa fa-long-arrow-right footer-icon"></i> Audit et contrôle légal des comptes</p>
								</a>
								<a href="gestion.php">
									<p style="font-size:17px"><i class="fa fa-long-arrow-right footer-icon"></i> Gestion des associations </p>
								</a>
								<a href="comptabilite-intec.php">
									<p style="font-size:17px"><i class="fa fa-long-arrow-right footer-icon"></i> Comptabilité internationale</p>
								</a>
								<a href="auditsy.php">
									<p style="font-size:17px"><i class="fa fa-long-arrow-right footer-icon"></i> Audit des SI</p>
								</a>

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!-- chiffres cles -->
	<div class="home_version_03">
		<section class="achievment-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 section-header-box" data-aos="zoom-in" data-aos-delay="400">
						<div class="section-header">
							<h2>Chiffres clés</h2>
						</div><!-- ends: .section-header -->
					</div>
				</div>

				<div class="row">

					<div class="col-sm-3 counters-item" data-aos="zoom-in" data-aos-delay="600">
						<div class="section counter-box">
							<img src="images/index/counter-icon-03.png" alt="">
							<div class="project-count counter">11</div>
							<span>Années d'expériences
						</div>
					</div>

					<div class="col-sm-3 counters-item" data-aos="zoom-in" data-aos-delay="800">
						<div class="section counter-box">
							<img src="images/index/counter-icon-01.png" alt="">
							<div class="project-count counter">1850</div>
							<span>Diplomés</span>
						</div>
					</div>

					<div class="col-sm-3 counters-item" data-aos="zoom-in" data-aos-delay="1000">
						<div class="section counter-box">
							<img src="images/index/counter-icon-01.png" alt="">
							<div class="project-count counter">3500</div>
							<span>Etudiants</span>
						</div>
					</div>

					<div class="col-sm-3 counters-item" data-aos="zoom-in" data-aos-delay="1200">
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

	<!-- rejoignez-nous -->
	<section class="events-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 section-header-box" data-aos="zoom-in">
					<div class="section-header">
						<h2>Trouvez un programme adapté à votre profil</h2>
					</div><!-- ends: .section-header -->
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4 events-full-box" data-aos="zoom-in" data-aos-delay="400">
					<div class="events-single-box">
						<div class="row">
							<div class="col-sm-12">
								<img src="images/Bacheliers.jpg" alt="" class="img-responsive">
								<div class="event-info">
									<h3>Nouveaux bacheliers</h3>
									<p style="font-size:17px">Candidats intéressés par les métiers
										de de la comptabilité, de la finance, du contrôle de gestion et de l'audit et titulaires
										(ou en cours d'obtention) d'un baccalauréat ou d'un diplôme équivalent.<br>
									</p>

									<a class="event-btn" href="admission-post-bac.php">En savoir plus<i class="fa fa-long-arrow-right events-btn-icon"></i></a>
								</div>
							</div>


						</div>
					</div>
				</div>

				<div class="col-sm-4 events-full-box" data-aos="zoom-in" data-aos-delay="600">
					<div class="events-single-box">
						<div class="row">
							<div class="col-sm-12">
								<img src="images/Titulaires_BAC_2_3.jpeg" alt="" class="img-responsive">
								<div class="event-info">

									<h3>Titulaires d’un BAC+2, 3</h3>
									<p style="font-size:17px">Etudiants ayant validé leur premier cycle et souhaitant entamer une formation en LICENCE et/ou MASTER dans les métiers de la comptabilité, de la finance, du
										contrôle de gestion et de l'audit.<br>
									</p>

									<a class="event-btn" href="admission-post-bts.php">En savoir plus<i class="fa fa-long-arrow-right events-btn-icon"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-4 events-full-box" data-aos="zoom-in" data-aos-delay="800">
					<div class="events-single-box">
						<div class="row">
							<div class="col-sm-12">
								<img src="images/Professionnels.jpg" alt="" class="img-responsive">
								<div class="event-info">

									<h3>Vous êtes un professionnel</h3>
									<p style="font-size:17px">Professionnels motivés désireux de devenir expert-comptable ou d’obtenir des certifications de l’INTEC dans le domaine de la comptabilité internationale,
										l’audit et la gestion légal des comptes …etc.
									</p>

									<a class="event-btn" href="mcca-intec.php">En savoir plus<i class="fa fa-long-arrow-right events-btn-icon"></i></a>
								</div>
							</div>


						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- comment s'inscrire -->
	<section class="Welcome-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 section-header-box" data-aos="zoom-in">
					<div class="section-header">
						<h2>Comment s'inscrire ?</h2>
					</div>
				</div>
			</div>
			<br><br>
			<div class="row">

				<div class="col-sm-4  wel-ful-box-2" data-aos="zoom-in" data-aos-delay="400">
					<div class="wel-text-box" style="background-color: #b5d56a;">
						<div class="wel-text">
							<h3 style="color:#fff;">Vous candidatez</h3>
							<p style="color:#fff; font-size: 17px;">Parlez-nous brièvement de vous et de votre parcours académique.
								Cela ne vous prendra que 3 min.</p>
							<!-- <a href="#">read more<i class="fa fa-long-arrow-right"></i></a> -->
						</div>
					</div>
				</div>

				<div class="col-sm-4 wel-ful-box-2" data-aos="zoom-in" data-aos-delay="600">
					<div class="wel-text-box" style="background-color: #4886ff;">
						<div class="wel-text">
							<h3 style="color:#fff;">On vous contacte</h3>
							<p style="color:#fff; font-size: 17px;">Le responsable des admissions vous contacte pour finaliser
								le processus d’inscription. <br> </p>
							<!-- <a href="#">read more<i class="fa fa-long-arrow-right"></i></a> -->
						</div>
					</div>
				</div>

				<div class="col-sm-4  wel-ful-box-2" data-aos="zoom-in" data-aos-delay="800">
					<div class="wel-text-box" style="background-color:#ff6f6f; ">
						<div class="wel-text">
							<h3 style="color:#fff;">Vous êtes prêt</h3>
							<p style="color:#fff; font-size: 17px;">Une fois votre inscription effectuée au sein de nos locaux,
								vous êtes prêt à débuter votre carrière.</p>
							<!-- <a href="#">read more<i class="fa fa-long-arrow-right"></i></a> -->
						</div>
					</div>
				</div>
			</div>
			<div class="events-area" data-aos="zoom-in" data-aos-delay="1000">
				<div class="col-md-12">
					<div class="event-bottom-btn">
						<a href="preinscription.php" class="view-more-item">Je Candidate</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- entreprise -->
	<div class="home_version_02">
		<section class="register-area">
			<div class="overlay-bg">
				<div class="container">
					<div class="row">

						<div class="col-sm-5" data-aos="zoom-in" data-aos-delay="400">
							<div class="row">
								<div class="form-full-box">
									<div class="header-box-top">
										<div class="col-sm-12 section-header-box">
											<div class="section-header">
												<h2>Rejoignez-nous</h2>
											</div>
										</div>
										<p style="font-size:17px">Vous trouverez les compétences dont vous avez besoin : stagiaires, jeunes diplômés, experts-comptables stagiaires,
											formation continue MCCA INTEC.
										</p>
									</div>
									<form action="" method="post">
										<div class="register-form">
											<?php
											if (isset($erreur)) {
												echo '<div class="alert alert-danger text-center" role="alert">' . $erreur . '</div>';
											}
											if (isset($message)) {
												echo '<div class="alert alert-success text-center" role="alert">' . $message . '</div>';
											}
											?>
											<div class="row">

												<!-- nom ou raison sociale -->
												<div class="col-xs-12">
													<div class="form-group">
														<input class="form-control" name="name" placeholder="Nom ou Raison sociale *" type="text" value="<?php if (isset($_POST['name'])) {
																																								echo $_POST['name'];
																																							} ?>">
													</div>
												</div>

												<!-- email -->
												<div class="col-xs-12">
													<div class="form-group">
														<input class="form-control" name="email" placeholder="Email *" type="email" value="<?php if (isset($_POST['email'])) {
																																				echo $_POST['email'];
																																			} ?>">
														<?php
														if (isset($er_mail)) {
															echo '<span class="text-danger">' . $er_mail . '</span>';
														}
														?>
													</div>
												</div>

												<!-- adresse -->
												<div class="col-xs-12">
													<div class="form-group">
														<input class="form-control" name="adresse" placeholder="Adresse *" type="text" value="<?php if (isset($_POST['adresse'])) {
																																					echo $_POST['adresse'];
																																				} ?>">
													</div>
												</div>

												<!-- phone -->
												<div class="col-xs-12">
													<div class="form-group">
														<input class="form-control" name="phone" placeholder="Téléphone *" type="text" value="<?php if (isset($_POST['phone'])) {
																																					echo $_POST['phone'];
																																				} ?>">
														<?php
														if (isset($er_tel)) {
															echo '<span class="text-danger">' . $er_tel . '</span>';
														}
														?>
													</div>
												</div>

												<!-- objet -->
												<div class="col-xs-12">
													<div class="form-group">
														<input class="form-control" name="objet" placeholder="Objet *" type="text" value="<?php if (isset($_POST['objet'])) {
																																				echo $_POST['objet'];
																																			} ?>">
													</div>
												</div>

												<div class="col-xs-12 register-btn-box">
													<input class="register-btn" type="submit" value="VALIDER" name="entreprise">
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="col-sm-7 form-content" data-aos="zoom-in" data-aos-delay="600">
							<div class="row">
								<div class="col-sm-12 section-header-box">
									<div class="section-header section-header-l">
										<h2>Devenez partenaire du CIFEC Bénin</h2>
									</div>
								</div>
							</div>
							<p style="font-size:17px">Classé parmi les meilleures écoles de Comptabilité au Bénin, le CIFEC est depuis toujours engagé dans la formation de gestionnaires de haut niveau, immédiatement
								opérationnels, aptes à comprendre les exigences de l’entreprise et à répondre à ses priorités. En devenant partenaire de notre école, vous trouverez ce que votre
								entreprise recherche : Stagiaires, jeunes diplômés, experts-comptables stagiaires, formations continues). <br><br>
								<!-- <a class="btn btn-warning" href="">En savoir plus</a> -->
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<!-- temoignages -->
	<!-- <section class="students-say-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 section-header-box" data-aos="zoom-in" data-aos-delay="400">
					<div class="section-header">
						<h2>What Students Parent SAY</h2>
					</div>
				</div>
			</div>

			<div class="row" data-aos="zoom-in" data-aos-delay="600">
				<div class="img-full-box">
					<div class="col-sm-3 col-sm-offset-4">
						<div class="carousel-images slider-nav">
							<div>
								<img src="images/index/stu-parent-01.jpg" alt="1" class="img-responsive img-circle">
							</div>
							<div>
								<img src="images/index/stu-parent-02.jpg" alt="2" class="img-responsive img-circle">
							</div>
							<div>
								<img src="images/index/stu-parent-03.jpg" alt="3" class="img-responsive img-circle">
							</div>
							<div>
								<img src="images/index/stu-parent-04.jpg" alt="3" class="img-responsive img-circle">
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-8 col-sm-offset-2">
					<div class="carousel-text slider-for">
						<div class="single-box">
							<p>Lorem ipsum dolor sit amet, consecteituer adipiscing eluit, sed diapm nonummy nibh euismod tincidunt ut laoreet dolor you magna aliquam eratm volutpat. Ut wisiyp oenim
								adefra miniumyp veniam, quis nostrud exerci tation ullavolutpat ipsum.</p>
							<ul class="list-unstyled rank-icons">
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
							</ul>
							<h3>Jhonthan Smith</h3>
							<span>Alexis, Parents</span>
						</div>

						<div class="single-box">
							<p>Maecenas ut dui vitae magna vestibulum fermentum ut non est. Fusce finibus viverra enim, et laoreet metus fringilla sit amet. Ut dui nunc, aliquet ut malesuada sit amet,
								sagittis aliquam laoreet lorem. In hac habitasse platea dictumst.</p>
							<ul class="list-unstyled rank-icons">
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
							</ul>
							<h3>Jhon Doe</h3>
							<span>Martin, Parent</span>
						</div>

						<div class="single-box">
							<p>Aenean at leo hendrerit, congue erat ut, volutpat felis. Suspendisse et sapien purus. Aenean tincidunt diam ac magna scelerisque dapibus. Quisque non elit et justo

								tristique semper. Sed a urna eros. Etiam tempus tempus leo vel aliquam.</p>
							<ul class="list-unstyled rank-icons">
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
							</ul>
							<h3>Jhonthan Smith</h3>
							<span>Alexis, Parents</span>
						</div>

						<div class="single-box">
							<p>Cras ut ipsum et erat accumsan aliquam. Cras feugiat eu dolor a imperdiet. Vestibulum ornare, nunc a pulvinar pellentesque, mi ipsum elementum velit, lobortis convallis
								lacus ipsum eget nisl. Mauris eget est lorem praesent et metus laoreet.</p>
							<ul class="list-unstyled rank-icons">
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
								<li><i class="fa fa-star"></i></li>
							</ul>
							<h3>Jessica Alaba</h3>
							<span>Martin, Parent</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<!-- Start News Area section -->
	<section class="news-area">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 section-header-box">
					<div class="section-header" data-aos="zoom-in" data-aos-delay="400">
						<h2>Actualités</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4 news-single">
					<div class="news-single-box" data-aos="zoom-in" data-aos-delay="600">
						<div class="news-img-box">
							<img src="img/b496d364-5530-4265-bcd8-b11ce11870cd.JPG" alt="" class="img-responsive">
						</div>
						<div class="news-content">
							<h3><a href="#">La nuit des Experts</a></h3>
							<p class="news-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									12 July, 2019
								</span>
								<span>
									<i class="fa fa-user"></i>
									CIFEC BENIN
								</span>

							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-4 news-single">
					<div class="news-single-box" data-aos="zoom-in" data-aos-delay="800">
						<div class="news-img-box">
							<img src="img/CIFEC-19.jpg" alt="" class="img-responsive">
						</div>
						<div class="news-content">
							<h3><a href="#">Election des délégués</a></h3>
							<p class="news-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									12 July, 2019
								</span>
								<span>
									<i class="fa fa-user"></i>
									CIFEC BENIN
								</span>

							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-4 news-single">
					<div class="news-single-box" data-aos="zoom-in" data-aos-delay="1000">
						<div class="news-img-box">
							<img src="img/bd6b2799-2475-41b7-8280-c2b947673bfc.JPG" alt="" class="img-responsive">
						</div>
						<div class="news-content">
							<h3><a href="#">La nuit de l'excellence</a></h3>
							<p class="news-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									12 July, 2019
								</span>
								<span>
									<i class="fa fa-user"></i>
									CIFEC BENIN
								</span>

							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- partenaires -->
	<div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12 section-header-box">
					<div class="section-header" data-aos="zoom-in" data-aos-delay="400">
						<br><br>
						<h2>Nos Partenaires</h2>
						<p style="font-size:17px">Les principaux partenaires du CIFEC sont la prestigieuse Ecole Supérieure de
							Commerce et d’Administration des Entreprises (ESCAE) située à Niamey au NIGER
							dont le Fondateur, Directeur Général est Mr Victor AKESSE, Expert-Comptable et
							l’Institut National des Techniques Economiques et Comptables (INTEC) de Paris.
							Viennent par la suite :
							L’Institut international de formation à l’expertise comptable (2IFEC) du Burkina
							Faso ;
							Le Centre de formation à la Gestion des entreprises (CFGE) de Côte d’Ivoire ;</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3" data-aos="zoom-in" data-aos-delay="600"><img src="img/partner-02.png" alt=""></div>
				<div class="col-md-3" data-aos="zoom-in" data-aos-delay="800"><img src="img/partner-04.png" alt=""></div>
				<div class="col-md-3" data-aos="zoom-in" data-aos-delay="1000"><img src="img/partner-03.png" alt=""></div>
				<div class="col-md-3" data-aos="zoom-in" data-aos-delay="1200"><img src="img/partner-01.png" alt=""></div>
			</div>

			<br><br>
		</div>
	</div>

	<!-- Footer Area section -->
	<?php include_once 'includes/footer.php'; ?>

	<!-- jQuery -->
	<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/assets/bootstrap.min.js"></script>
	<!-- owl carousel -->
	<script src="js/assets/owl.carousel.min.js"></script>
	<!-- Revolution Slider -->
	<script src="js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
	<script src="js/assets/revolution/jquery.themepunch.tools.min.js"></script>
	<!-- Popup -->
	<script src="js/assets/jquery.magnific-popup.min.js"></script>
	<!-- Sticky JS -->
	<script src="js/assets/jquery.sticky.js"></script>
	<!-- Counter Up -->
	<script src="js/assets/jquery.counterup.min.js"></script>
	<script src="js/assets/waypoints.min.js"></script>
	<!-- Slick Slider-->
	<script src="js/assets/slick.min.js"></script>
	<!-- Main Menu -->
	<script src="js/assets/jquery.meanmenu.min.js"></script>

	<!-- Revolution Extensions -->
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript" src="js/assets/revolution/revolution.js"></script>
	<!-- Custom JS -->
	<script src="js/custom.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

	<script>
		AOS.init();
	</script>

</body>

</html>