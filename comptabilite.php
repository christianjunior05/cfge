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

<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
<header id="header">
<?php include_once 'includes/header-top.php'; ?><!-- Ends: .header-top -->

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
                            <h1>Comptabilité</h1>
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
                        <h2>Description</h2>
                        <br>
                        <p style="font-size:17px">Les conditions d&#39;inscriptions sont identiques à celle du DSGC/DSCG
                        Cependant, pour être suivie avec profit, cette formation suppose que l'étudiant ait pu
                        approfondir préalablement les concepts et les techniques de niveau Master 1re
                        année en comptabilité et gestion relevant notamment de :</p>
                        <ul>
                            <li>la comptabilité financière approfondie,</li>
                            <li>la comptabilité et le contrôle de gestion,</li>
                            <li>l'analyse financière,</li>
                            <li>les mathématiques financières.</li>
                        </ul>
                        <p>L'étudiant doit avoir la capacité de se connecter sur les sites des sociétés cotées de
                        l'Union européenne et d'y récupérer les informations financières correspondantes.</p>

                        <h2>Objectifs</h2>
						<p style="font-size:17px">Le passage aux normes comptables internationales IFRS a concerné près de 7 000
                        sociétés cotées européennes. Pour permettre aux experts-comptables, cadres
                        comptables et financiers, consolideurs et contrôleurs de gestion de s'adapter à ce
                        passage aux normes comptables internationales, l'INTEC a décidé d'inclure dans ses
                        formations un certificat de spécialisation dans lequel est développé exclusivement
                        l'enseignement de cette matière.</p>

                        <p style="font-size:17px">Cette formation s&#39;adresse plus généralement à toute personne qui désire acquérir de
                        solides connaissances sur les principes et techniques de comptabilisation en normes
                        IFRS et être capable de lire et analyser des états financiers présentés selon ces
                        normes, à savoir notamment les états financiers consolidés des sociétés cotées.</p>

                        <h2>Mentions officielles</h2>
                        <p style="font-size:17px">Intitulé officiel figurant sur le diplôme : Certificat de spécialisation Normes
                            comptables internationales</p>
					
                        <h1>2. ONGLET PROGRAMME</h1>
                        <p>
                            <h2>Contenu</h2>
                            <p>Série 1.
                                    Introduction
                                    Titre 1. Comptabilité internationale - La question des sources
                                    Titre 2. Etats financiers IFRS

                                    2
                                    Titre 3. Etat (ou tableau) des flux de trésorerie de la période (IAS 7)
                                    Titre 4. Première adoption des IFRS (IFRS 1)
                                    Titre 5. IFRS pour les PME (IFRS for SMES)
                            </p>
                            <p>Série 2.
                                    Titre 6. Les actifs non courants
                                    Titre 7. La dépréciation des actifs non courants (IAS 36)
                                    Titre 8. Les autres actifs non courants
                                    Titre 9. Les actifs courants
                                    Titre 10. Les instruments financiers</p>

                                <p>Série 3.
                                    Rappel: Présentation de l'état du résultat global et catégories d'autres éléments du
                                    résultat global
                                    Titre 11. L'activité ordinaire et les produits
                                    Titre 12. Les charges et les risques supportés par l'entreprise</p>


                                <p>Série 4.
                                    Titre 13. Reporting financier
                                    Titre 14. Regroupement et comptes consolidés</p>
                            <h1>Modalité d'évaluation</h1>
                            <hr>
                            <p style="font-size:17px">Deux examens finaux écrits par année universitaire (une session normale d'examen
                                en juin et une session de rattrapage en septembre).
                                Epreuve écrite d'une durée de 3 heures.
                                Coefficient : 1.
                                L'UE TEC538 est validée si la note obtenue à l'examen final est au moins égale à
                                10/20.
                                L'UE TEC538 fait partie d'un bloc d'enseignement qui regroupe les 4 UE composant
                                l'année M2 du master CCA.
                                L'année M2 est validée à condition d'avoir obtenu à l'examen final de chaque UE une
                                note au moins égale à 10/20.
                            </p>
                            
                        </p>
                        <h2>Bbliographie</h2>
                        <p style="font-size:17px">IASB : International Financial Reporting Standards (IFRSs)
                        Collectif : Code IFRS Normes et interprétations - Groupe Revue Fiduciaire
                        S. Lefrancq, E. Albertini : Comprendre le reporting financier - Les IFRS accessibles</p>
                        <h1>3. ONGLET COMPÉTENCES</h1>
                        <h2>Compétences visés</h2>
                        <ul>
                            <li>Connaître le rôle et l&#39;articulation des normalisateurs comptables européens et
                                internationaux (IASB)</li>
                            <li>Connaître et consulter les sources de la réglementation comptable (IAS/IFRS,
                                textes des droit communautaire) ; appliquer la réglementation comptable sur
                                les points mentionnés dans le programme</li>
                            <li>Connaître et consulter les sources de la réglementation comptable (IAS/IFRS,
                                textes des droit communautaire) ; appliquer la réglementation comptable sur
                                les points mentionnés dans le programme</li>
                            <li>Connaître la notion et le contenu du cadre conceptuel comptable de l&#39;IASB</li>
                            <li>Rechercher et utiliser les règlements, avis et interprétations publiés par les
                                organismes européens et internationaux (Union européenne, IASB)</li>
                                <li>Connaître les règles d&#39;évaluation (initiale et postérieure à la comptabilisation
                                initiale)  des principaux éléments des états financiers selon les IFRS</li>
                        </ul>
                            <h2>Les diplômes et les stages préparant aux métiers :</h2>
                                <li>Responsable reporting et consolidation comptable</li>
                                <li>Responsable comptabilité</li>
                                <li>Directeur / Directrice de l&#39;administration comptable et de la gestion financière</li>
                                <li>Auditeur / Auditrice comptable</li>
                                <li>Contrôleur comptable et financier / Contrôleuse comptable et financière</li>
                                <li>Responsable consolidation comptable</li>

                            <h2>Les UE, les diplômes et les stages dans les domaines :</h2>
                            <ul>
                                <li>Normes comptables</li>
                                <li>Ecart d'acquisition</li>
                                <li>Comptabilité financière</li>
                                <li>Bilan consolidé</li>
                                <li>Goodwill</li>
                                <li>Comptabilité approfondie</li>
                                <li>Consolidation</li>
                                <li>Règlementation comptable</li>
                                <li>Comptabilité des sociétés</li>
                                <li>Compte de résultat consolidé</li>
                                <li>Comptabilité</li>
                            </ul>
                            <h1>4.Onglets et infos pratiques</h1>
                            <p style="font-size:17px">
								<h2>Contact :</h2>
                                <ul>
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