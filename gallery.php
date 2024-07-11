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
<?php include_once 'includes/header-top.php'; ?>
		<!-- Ends: .header-top -->

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
                            <h1>DCG</h1>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
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


    <div class="section-paddings gallery-images event-01">
	<div class="container px-5">

		<div class="row gallery_img_wrapper">
			<div class="col-12 col-sm-8 col-md-8 col-lg-4">
				<div class="single-gallery">
						<img src="img/2.jpg" alt="" width="600px" height="400px">
				</div>

                <div class="single-gallery">			
						<img src="img/3.jpg" alt="" width="600px" height="400px">	
				</div>
			</div>
        </div> <!-- end single-gallery -->

	<!-- end single-gallery -->
		</div>
	</div>
</div> 

<!-- ./ End Courses Area section -->
</div>
<!-- Footer Area section -->
<?php include_once 'includes/footer.php'; ?>
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

