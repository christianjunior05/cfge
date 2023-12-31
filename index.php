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
						<img src="img/P_accueil_CAMES.webp" alt="Sky" class="rev-slidebg">
						<!-- BEGIN BASIC TEXT LAYER -->
						<!-- LAYER NR. 1 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1" data-x="left" data-hoffset="0" data-y="center" data-voffset="-140" data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif; serif; white-space: nowrap;font-weight:700;">Bienvenu au CFGE

						</div>

						<!-- LAYER NR. 2 -->
						

						<!-- LAYER NR. 3 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-p" data-x="left" data-hoffset="0" data-y="center" data-voffset="-10" data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif; serif; white-space: nowrap;">La nouvelle solution de l’Expertise Comptable, qui vous donne la possibilité de <br> devenir <strong>EXPERT-COMPTABLE STAGIAIRE</strong> en 5 ans après le BAC.

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
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1" data-x="left" data-hoffset="0" data-y="center" data-voffset="-140" data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif; serif; white-space: nowrap;font-weight:700;">Intégrez le CFGE
						</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4  header-1 title-line-2" data-x="left" data-hoffset="0" data-y="center" data-voffset="-80" data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif; serif; white-space: nowrap;font-weight:700;">et devenez Expert-comptable
						</div>

						<!-- LAYER NR. 3 -->
						<div class="tp-caption font-lora sfb tp-resizeme letter-space-5 header-p" data-x="left" data-hoffset="0" data-y="center" data-voffset="-10" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif; serif; white-space: nowrap;">Préparez avec nous la LCCA et le MCCA de l’INTEC de Paris comme si vous y étiez <br> et entrez directement en stage d’expertise comptable.
						</div>

						<!-- LAYER NR. 4 -->
						<div class="tp-caption lfb tp-resizeme header-btn" data-x="left" data-hoffset="0" data-y="center" data-voffset="90" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 8;"><a href="#programme" class="el-btn-regular slider-btn-left">Nos Programmes</a> <a href="contact.php" class="el-btn-regular">Nous contacter</a>
						</div>
					</li>
					<li data-transition="random" data-title="Slide Title" data-param1="Additional Text" data-thumb="img/CIFEC-18.jpg">
						<div class="slider-overlay"></div>
						<!-- SLIDE'S MAIN BACKGROUND IMAGE -->
						<img src="img/19.jpg" alt="Sky" class="rev-slidebg">
						<!-- BEGIN BASIC TEXT LAYER -->
						<!-- LAYER NR.1 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4 header-1 title-line-1" data-x="left" data-hoffset="0" data-y="center" data-voffset="-140" data-frames='[{"delay":0,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif; serif; white-space: nowrap;font-weight:700;">
						</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption sfr font-extra-bold tp-resizeme letter-space-4  header-1 title-line-2" data-x="left" data-hoffset="0" data-y="center" data-voffset="-80" data-frames='[{"delay":1000,"speed":3000,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; font-size:60px; color:#fff; font-family: 'Montserrat', sans-serif; serif; white-space: nowrap;font-weight:700;">
						</div>

						<!-- LAYER NR. 3 -->
						<div class="tp-caption font-lora sfb tp-resizeme letter-space-5 header-p" data-x="left" data-hoffset="0" data-y="center" data-voffset="-10" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:top;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 6; line-height:25px; font-size:15px; color:#fff; font-family: 'Open Sans', sans-serif; serif; white-space: nowrap;">
						</div>

						<!-- LAYER NR. 4 -->
						<div class="tp-caption lfb tp-resizeme header-btn" data-x="left" data-hoffset="0" data-y="center" data-voffset="90" data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' style="z-index: 8;">
					</li>
				</ul><!-- END SLIDES LIST -->

			</div><!-- END SLIDER CONTAINER -->
		</div><!-- END SLIDER CONTAINER WRAPPER -->
	</header>

	<!-- bienvenu -->
	<section class="Welcome-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header">
					<h2>BIENVENU AU CFGE</h2>
					<p>Le Centre de Formation à la Gestion des Entreprises (CFGE) de la Côte d'Ivoire, 
						est une grande école spécialisée dans les métiers de la comptabilité,
					    le contrôle de gestion, l’audit et la finance et qui forme principalement les experts comptables. </p>
				</div><!-- ends: .section-header -->
			</div>
		</div>	
			
		<div class="row">
			<div class="col-sm-4 wel-ful-box-2">
				<div class="wel-text-box">
					<div class="wel-icon">
						<img src="images/index-02/welcome-01.png" alt="">
					</div>
					<div class="wel-text">
						<h3>Formation d’excellence</h3>
						<p>Optez pour notre formation d'excellence et développez vos compétences de manière
						   approfondie dans les domaines de la comptabilité, la finance et l’audit.</p>
						   <br>
					</div>
				</div>
			</div>

			<div class="col-sm-4 wel-ful-box-2">
				<div class="wel-text-box">
					<div class="wel-icon">
						<img src="images/index-02/welcome-02.png" alt="">
					</div>
					<div class="wel-text">
						<h3 class="text-color">Corps Professoral qualifié</h3>
						<p>Une équipe pédagogique formée de professionnels expérimentés et dévoués à offrir une formation 
						   de qualité préparant les étudiants à réussir sereinement leurs futures carrières. </p>
					</div>
				</div>					
			</div>

			<div class="col-sm-4  wel-ful-box-2">
				<div class="wel-text-box">
					<div class="wel-icon">
						<img src="images/index-02/welcome-03.png" alt="">
					</div>
					<div class="wel-text ">
						<h3>Triple reconnaissance</h3>
						<p>Nos diplômes sont reconnus par l’Enseignement Supérieur Français, par le CAMES et l’Etat de Côte d'Ivoire. </p>
						<br>
						<br>
					</div>
				</div>				
			</div>
		</div>
	</div>
</section>		
<hr>
	<!-- programmes -->

	<section class="Courses-area-02">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 section-header-box" data-aos="zoom-in">
					<div class="section-header">
						<h2>Nos programmes de formation</h2>
						<p style="font-size:17px">Le CFGE forme les étudiants et auditeurs à plusieurs prestigieux diplômes notamment la Licence des Sciences Techniques Comptables et Financières (LSTCF) et le
							Master Comptabilité, Contrôle et Audit (MCCA) qui permettent respectivement de mieux préparer le Diplôme de Comptabilité et de Gestion (DCG) et le Diplôme Supérieur de
							Comptabilité et de Gestion (DSCG), diplôme conférant le titre d’expert-comptable stagiaire. <br><br>
						</p>
					</div>
				</div>
			</div>

			<div class="row courses-r-margin-bottom">

				<div class="col-sm-6 col-md-4 single-courses-box" data-aos="zoom-in" data-aos-delay="400">
					<div class="single-courses">
						<figure>
							<a href="">
								<div class="figure-img">
									<img src="images/P_accueil_CAMES.webp" class="img-responsive">
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
									<img src="img/P_accueil_PG_FR.jpg" class="img-responsive">
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
									<img src="img/z.jpg" alt="" class="img-responsive">
								</div>
							</a>
						</figure>
						<div class="courses-content-box">
							<div class="courses-content">
								<h3>Certificats de Spécialisation</h3>
								<a href="audit.php">
									<p style="font-size:17px"><i class="fa fa-long-arrow-right footer-icon"></i>Audit et contrôle légal des comptes</p>
								</a>
								<a href="gestion.php">
									<p style="font-size:17px"><i class="fa fa-long-arrow-right footer-icon"></i> Gestion des associations </p>
								</a>
								<a href="comptabilite-intec.php">
									<p style="font-size:17px"><i class="fa fa-long-arrow-right footer-icon"></i>Comptabilité internationale</p>
								</a>
								<a href="auditsy.php">
									<p style="font-size:17px"><i class="fa fa-long-arrow-right footer-icon"></i>Audit des SI</p>
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
							<div class="project-count counter">1100</div>
							<span>Diplomés</span>
						</div>
					</div>

					<div class="col-sm-3 counters-item" data-aos="zoom-in" data-aos-delay="1000">
						<div class="section counter-box">
							<img src="images/index/counter-icon-01.png" alt="">
							<div class="project-count counter">3000</div>
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
								<img src="img/P_accueil_Nvx bacheliers.jpg" alt="" class="img-responsive">
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
								<img src="images/P_accueil_titu_bac+2.jpg" alt="" class="img-responsive">
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
								<img src="images/P_accueil_vous_etes_pro.jpg" alt="" class="img-responsive">
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
										<h2>Devenez partenaire du CFGE</h2>
									</div>
								</div>
							</div>
							<p style="font-size:17px">Classé parmi les meilleures écoles de Comptabilité en Côte d'Ivoire, le CFGE est depuis toujours engagé dans la formation de gestionnaires de haut niveau, immédiatement
								opérationnels, aptes à comprendre les exigences de l’entreprise et à répondre à ses priorités. En devenant partenaire de notre école, vous trouverez ce que votre
								entreprise recherche : Stagiaires, jeunes diplômés, experts-comptables stagiaires, formations continues. <br><br>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>

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
							<img src="img/21.jfif" alt="" class="img-responsive" >
						</div>
						<div class="news-content">
							<h3><a href="#">Journée mondiale de la femme</a></h3>
							<p class="news-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									8 Mars 2023
								</span>
								<span>
									<i class="fa fa-user"></i>
									CFGE
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
									12 Juillet, 2023
								</span>
								<span>
									<i class="fa fa-user"></i>
									CFGE
								</span>
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-4 news-single">
					<div class="news-single-box" data-aos="zoom-in" data-aos-delay="1000">
						<div class="news-img-box">
							<img src="img/work1.JPG" alt="" class="img-responsive">
						</div>
						<div class="news-content">
							<h3><a href="#">La nuit de l'excellence</a></h3>
							<p class="news-time">
								<span>
									<i class="fa fa-calendar event-icon"></i>
									12 juillet 2023
								</span>
								<span>
									<i class="fa fa-user"></i>
									CFGE
								</span>

							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="students-say-area">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header-box">
				<div class="section-header">
					<h2>Ils nous ont fait confiance</h2>
				</div><!-- ends: .section-header -->
			</div>
		</div>

		<div class="row">
			<div class="img-full-box">
				<div class="col-sm-3 col-sm-offset-4">								
					<div class="carousel-images slider-nav">
						<div>
							<img src="img/c1.jpg" alt="1" class="img-responsive img-circle">
						</div>
						<div>
							<img src="img/c2.jpg" alt="2" class="img-responsive img-circle">
						</div>
						<div>
							<img src="img/bts.jpg" alt="3" class="img-responsive img-circle">
						</div>
						<div>
							<img src="img/prof.jpg" alt="3" class="img-responsive img-circle">
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-8 col-sm-offset-2">
				<div class="carousel-text slider-for">
					<div class="single-box">
						<p>Je suis très satisfait de l'enseignement offert par l'école. J'ai acquis 
								une solide compréhension des principes comptables et financiers, ce qui m'a permis de réussir mes 
								études et de me préparer efficacement à ma future carrière</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3>David Ake</h3>
						<span>Alexis, Parents</span>
					</div>

					<div class="single-box">
						<p>L'école met l'accent sur l'apprentissage pratique, ce qui est extrêmement 
								précieux. Les stages et les projets réels que j'ai pu réaliser ont 
								renforcé ma confiance en mes compétences en comptabilité.</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3>Guy-Charles </h3>
						<span>Martin, Parent</span>
					</div>

					<div class="single-box">
						<p>J'apprécie l'attention personnalisée que l'école de comptabilité CIFEC BENIN accorde à chaque élève. 
								Les professeurs sont toujours disponibles pour répondre aux questions et fournir un soutien 
								supplémentaire si nécessaire.</p>
						<ul class="list-unstyled rank-icons">
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>									
						</ul>
						<h3>Kouamé ange</h3>
						<span>Alexis, Parents</span>
					</div>

					<div class="single-box">
						<p>La préparation à l'examen de certification comptable est exceptionnelle. Grâce aux ressources et aux 
								programmes de l'école, Je me suis senti confiant et prêt à réussir mes examens professionnels..</p>
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
			</div><!-- /.block-text -->
		</div>	<!--./End row-->
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
						<p style="font-size:17px">Les principaux partenaires du CFGE sont la prestigieuse Ecole Supérieure de
							Commerce et d’Administration des Entreprises (ESCAE) située à Niamey au NIGER
							dont le Fondateur, Directeur Général est Mr Guillaume AKESSE, Expert-Comptable et
							l’Institut National des Techniques Economiques et Comptables (INTEC) de Paris.
							Viennent par la suite :
							L’Institut international de formation à l’expertise comptable (2IFEC) du Burkina
							Faso ;
							 Le Centre International de Formation à l’Expertise Comptable (CIFEC) du Bénin</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3" data-aos="zoom-in" data-aos-delay="600"><img src="img/partner-02.png" alt=""></div>
				<div class="col-md-3" data-aos="zoom-in" data-aos-delay="800"><img src="img/partner-04.png" alt=""></div>
				<div class="col-md-3" data-aos="zoom-in" data-aos-delay="1000"><img class="img" src="img/logo.jpg" alt=""></div>
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