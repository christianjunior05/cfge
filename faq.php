<?php
session_start();
// Obtenez le nom du fichier actuel
$current_page = basename($_SERVER['PHP_SELF']);

include_once 'controller.php';
?>

<!doctype html>
<html class="no-js" lang="zxx">
<?php include_once 'includes/head.php'; ?>
<link rel="stylesheet" href="css/faq.css">
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
                            <h1>FAQ</h1>
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


 

<div class="accordion">
<h1>Inscription</h1>
   <div class="accordion-item">

    <div class="accordion-item-header">
      Nouveaux bacheliers 
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
	    <p>
                            Les nouveaux bacheliers qui s’inscrivent au CIFEC Bénin suivent les cours en première année de <a href="lstcf.php">LSTCF</a> . Cette formation leur permet à la fois de préparer le diplôme d’Etat français (DCG), le diplôme de l’INTEC (DGC) et le diplôme national de licence. 
            A l’issue de la première année, ils poursuivent  leur cursus en deuxième année.
        </p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
     <div class="accordion-item-header">
	    Etudiants en licence 2
     </div>
      <div class="accordion-item-body">
        <div class="accordion-item-body-content">
                            Lorsqu’ils valident leur deuxième année de Licence (sans notes inferieures à 6/20 aux UE avec une moyenne générale supérieure ou égale à 10/20 sur l’ensemble des semestres), les étudiants s’inscrivent en troisième année de de<a href="lstcf.php">LSTCF</a>. Dans le même temps ils se préparent pour les UE du DGC/DCG 2. 
        </div>
      </div>
  </div>

  <div class="accordion-item">
    <div class="accordion-item-header">
	       Etudiants en licence 3
    </div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
	  <p>
                            Les étudiants ayant un diplôme de niveau BAC + 2 en gestion (comptabilité, finance, économie …) ou ceux de la de <a href="lstcf.php">LSTCF</a> 2 peuvent s’inscrire en LCCA de l’INTEC de Paris et/ou en de <a href="lstcf.php">LSTCF</a> de l’ESCAE de Niamey. 
                            Les étudiants en troisième année de <a href="lstcf.php">LSTCF</a> qui valident les épreuves écrites et orales, (sans notes inferieures à 6/20 aux UE avec une moyenne générale supérieure ou égale à 10/20 sur l’ensemble des semestres), bénéficient d’une Attestation d’admission. Ils ont la possibilité de poursuivre en première année de <a href="mcca-escae">MCCA de l’ESCAE de Niamey</a> <br> 
                            Lorsqu’ils valident les épreuves écrites (sans notes inferieures à 6/20 aux UE avec une moyenne générale supérieure ou égale à 10/20 sur l’ensemble des semestres) et qu’ils n’ont pas encore soutenu (ou qu’ils n’ont pas encore déposé leur rapport de stage), ils bénéficient d’une Attestation d’admissibilité. Ils ont la possibilité également de poursuivre en première année de Master sous réserve du diplôme de Licence.
                            Attention ! Ne peuvent soutenir la de <a href="lstcf.php"> LSTCF </a>, les étudiants ayant validé les 6 semestres avec une moyenne au moins égale à 10/20 à chaque semestre (sans note inférieure à 6/20 aux UE).
                            Pour les étudiants inscrits en <a href="lcca.php">LCCA</a>  de l’INTEC de Paris, en savoir plus ici. 
                            </p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
		<div class="accordion-item-header">
	     Etudiants en master 1
		</div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
	  <p>
                            Les étudiants ayant un diplôme de niveau BAC + 3 en gestion (comptabilité, finance, économie) peuvent s’inscrire en première année de <a href="mcca-escae"> MCCA de l’ESCAE de Niamey</a>.  
                            Ceux qui valident les examens (sans notes inferieures à 6/20 aux UE avec une moyenne générale supérieure ou égale à 10/20 sur l’ensemble des semestres), bénéficient d’une Attestation de passage. Ils s’inscrivent directement en deuxième année de MCCA de l’ESCAE de Niamey.
                            Les titulaires du DGC, DCG, LCCA ou d’un BAC +4 /5 en gestion (comptabilité, finance, économie) peuvent quant à eux s’inscrire en MCCA de l’INTEC de Paris. 
                            </p>
      </div>
    </div>
  </div>
  <div class="accordion-item">
		<div class="accordion-item-header">
	     Etudiants en master 2
		</div>
    <div class="accordion-item-body">
      <div class="accordion-item-body-content">
	    <p>
                            Les étudiants en deuxième année de Master qui valident les épreuves écrites et orales, (sans notes inferieures à 6/20 aux UE avec une moyenne générale supérieure ou égale à 10/20 sur l’ensemble des semestres) bénéficient d’une Attestation d’admission.
                            <br>
                            Lorsqu’ils valident les épreuves écrites (sans notes inferieures à 6/20 aux UE avec une moyenne générale supérieure ou égale à 10/20 sur l’ensemble des semestres) et qu’ils n’ont pas encore soutenu (ou qu’ils n’ont pas encore déposé leur mémoire de stage), ils bénéficient d’une Attestation d’admissibilité.
                            Mais s’ils ont une ou plusieurs notes inferieures à 6/20, ils ne pourront bénéficier d’aucune attestation.<br>
                            <h1>Attention !</h1>
                            Ne peuvent soutenir le <a href="mcca-escae.php">MCCA de l’ESCAE de Niamey</a> , les étudiants ayant validé les 4 semestres avec une moyenne au moins égale à 10/20 à chaque semestre (sans note inférieure à 6/20 aux UE).
                            </p>
      </div>
    </div>
  </div>

  <h1>Attention</h1>
  <p>Ne peuvent soutenir le <a href="mcca-escae.php">MCCA de l’ESCAE de Niamey</a>, les étudiants ayant validé les 4 semestres avec une moyenne au moins égale à 10/20 à chaque semestre (sans note inférieure à 6/20 aux UE).</p>
  <div class="accordion-item">
		<div class="accordion-item-header">
		SUPPORT DE COURS
		</div>
    <div class="accordion-item-body">
		<div class="accordion-item-body-content">
				Les supports de cours seront mis à la disposition des étudiants, par la Direction des études, au moins trois (03) jours avant le début du cours.</p>
		</div>
    </div>
  </div>
 
  <div class="accordion-item">
		<div class="accordion-item-header">
		RETRAIT DE DOCUMENT
		</div>
    <div class="accordion-item-body">
		<div class="accordion-item-body-content">
			<p>Pour les retraits de documents excepté les supports de cours, l’étudiant doit effectuer une demande préalable au service scolarité.
									<br>
									Le service scolarité lui remettra une fiche d’information à remplir soit lui-même, soit auprès de la Direction des études, soit auprès du service comptable et financier, (éventuellement après avoir vérifié que l’étudiant a régularisé sa situation).<br>
									L’étudiant retournera cette fiche au service scolarité qui, à son tour lancera la procédure de traitement afin d’établir le document demandé.
									Enfin, l’étudiant viendra retirer ledit document en respectant le délai qui lui sera communiqué.<br>
								nb:  Les attestations d’admission, d’admissibilité, de passage et les bulletins seront exclusivement retirés auprès du service scolarité.
								Cette procédure est d’application stricte. Toute demande de document qui ne respectera pas les lignes indiquées sera rejetée.
			</p>
		</div>
    </div>
  </div>
  <div class="accordion-item">
		<div class="accordion-item-header">
		Session
		</div>
    <div class="accordion-item-body">
		<div class="accordion-item-body-content">
		<p>Les étudiants qui ne valident pas un examen (semestre ou session) ainsi que ceux qui sont absents peuvent se présenter 	à 	l’examen suivant (semestre ou session) afin de régulariser leur situation académique.Tout-e étudiant-e quel que soit son statut doit respecter les règles suivantes pour être admis-e à la reprise d’une ou de plusieurs épreuves :
                        <ul>
                            <li>apporter la preuve justifiant la non validation de l’examen ou l’absence à un examen ;</li>
                            <li>apporter le document comptable justifiant que la scolarité est soldée ;</li>
                            <li>récupérer la fiche d’examen (session) auprès de la Direction des études et la remplir ;</li>
                            <li>apporter la preuve que les frais de session ont été réglés.</li>
                        </ul>
                        Le non-respect d’une règle rend nulle toute possibilité d’être admis-e à la salle de composition.
                        L’étudiant-e ne pourra donc pas reprendre la matière souhaitée.
                        </p>
		</div>
    </div>
  </div>
  <div class="accordion-item">
		<div class="accordion-item-header">
		Rappels et modalités
		</div>
    <div class="accordion-item-body">
		<div class="accordion-item-body-content">
		<span>Les frais de session sont non remboursables.
                            <br>
                            Le candidat qui a des matières à reprendre doit : 
                            <ul>
                                <li>d’abord récupérer auprès de la direction des études une fiche de session qu’il remplira avec l’assistance de cette direction. Sur cette fiche seront indiquées les matières à reprendre.</li>
                                <li>ensuite, avec cette fiche il se rendra à la caisse pour régler les frais de session.</li>
                                <li>enfin, il retournera cette fiche accompagnée du reçu de versement à la direction des études pour signature et cachet. </li>
                            </ul>
                            <br>
                                <span>Une copie de cette fiche sera conservée pour les contrôles et vérifications ultérieures.
                                Cette fiche lui servira de convocation pour avoir accès à la salle de composition.  
                                Par conséquent, il convient de bien la conserver.
                                </span>
                                <br>
                                <span>Une copie de cette fiche sera conservée pour les contrôles et vérifications ultérieures.
                                    Cette fiche lui servira de convocation pour avoir accès à la salle de composition.  
                                    Par conséquent, il convient de bien la conserver.

                                    Seul-e-s les étudiant-e-s ayant participé aux examens de février et de mai ou juin sont habilité-e-s à se présenter à la session de septembre.<br>

                                    Lorsqu’un-e étudiant-e ne se présente pas à un examen (février ou mai ou juin), il (ou elle) doit, pour être admis-e à la session apporter la preuve justifiant cette absence.

                                    L’étudiant-e qui ne participe à aucun examen (février et mai ou juin), ne sera pas accepté-e à la session de septembre.
                                    Il (ou elle) est considéré-e comme forclos et devra reprendre son année, sauf cas de force majeure.
                                    </span>
                                    <span>L’étudiant qui ne valide pas son année a la possibilité de s’inscrire pour le niveau suivant, à condition d’avoir une moyenne d’au moins 7/20 ou 8/20 et sous réserve de régulariser sa situation (valider les matières nécessaires pour avoir la moyenne requise) au cours de l’année suivante (session suivante). 
                                    Toute moyenne inférieure à 7/20 entraine automatiquement la reprise de l’année (l’étudiant devra reprendre son année).
                                    </span>
                        </span>
		</div>
    </div>
  </div>
  <div class="accordion-item">
		<div class="accordion-item-header">
		MISE EN RELATION DES ETUDIANTS (L3 & M2) AVEC LES ENCADREURS
		</div>
    <div class="accordion-item-body">
		<div class="accordion-item-body-content">
		        <p>Les étudiants en année de Licence et de Master doivent, pour soutenir leurs rapports de stage ou mémoire, avoir         effectué un stage ou une activité dans une entité privée ou publique pendant au moins 8 semaines.
                        <br>
                        Il est possible pour ceux qui ont déjà effectué un stage ou qui ont été en activité au cours d’une période passée (un ou deux ans au plus), de présenter leur travail de rédaction.<br>
                        Cependant, la possibilité de présenter leur travail de rédaction en vue de la soutenance doit respecter certaines conditions :
                        <ul>
                            <li>la notification à l’administration de l’ESCAE que l’étudiant est en stage ou a effectué un stage ou une activité dans une structure au cours de l’année en cours ou au cours d’une période passée (1 ou 2 ans)</li>
                            <li>apporter la preuve de cette information (fiche d’évaluation du stagiaire, attestation de stage ou tout autre document dument signé et cacheté par l’employeur)</li>
                            <li>l’envoi préalable de la notice d’agrément qui doit être acceptée sans réserves ou acceptée sous réserves de certaines modifications</li>
                        </ul>
            </p>
                        <p>Si ces conditions sont satisfaites, l’étudiant sera mis en relation avec un encadreur (habilité et spécialisé dans le domaine de formation du candidat) proposé par l’Administration de l’ESCAE.
                        C’est donc en accord avec son encadreur et compte tenu de ses tâches et travaux en entreprise que l’étudiant trouvera le thème de son travail de rédaction.<br>
                        N.B : ces conditions cumulatives sont d’application stricte et le non-respect de l’une d’entre elles entrainera l’annulation de la procédure.</p>
		</div>
    </div>
  </div>
  <div class="accordion-item">
		<div class="accordion-item-header">
		    DEMANDES DE DIPLOMES
		</div>
    <div class="accordion-item-body">
        <div class="accordion-item-body-content">
                        <p>Pour obtenir leurs diplômes, les étudiants doivent respecter deux conditions cumulatives :
                            <li>Valider les épreuves écrites et orales </li>
                            <li>Et déposer à l’administration de l’ESCAE les dossiers nécessaires à l’établissement du Diplôme.</li>
                            </p>
                        <p>
                                    <p>Dossiers de demande du diplôme de licence :</p>
                                    <br>
                                    <li >Le BAC ou équivalent</li>
                                    <li>L’attestation de stage</li>
                                    <li>Les bulletins des classes de licence</li>
                                    <li>Attestation d’admission de LSTCF</li>
                        </p>
                        <hr>
                        <p>
                                    <p>Dossiers de demande du diplôme de Master :</p>
                                    <br>
                                    <li>Le BAC </li>
                                    <li>Le diplome de licence</li>
                                    <li>Les bulletins des classes de Master</li>
                                    <li>Attestation d’admission du MCCA </li>
                        </p>
		</div> 
    </div>
  </div>
</div>
<h5 class="text-center">NB: Concernant les diplômes Français (INTEC & ETAT), l’étudiant doit se rapprocher de la direction des études.</h5>
<br><br>

    <!-- Footer Area section -->
    <?php include_once 'includes/footer.php'; ?>
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
    <script src="js/faq.js"></script>
</body>
</html>