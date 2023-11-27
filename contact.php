<?php
session_start();
// Obtenez le nom du fichier actuel
$current_page = basename($_SERVER['PHP_SELF']);
include_once 'controller.php';
?>
<!doctype html>
<html class="no-js" lang="fr">

<?php include_once 'includes/head.php' ; ?>

<body class="contact">

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
                            <h1>Contactez-nous</h1>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </header>

    <section class="contact-area-02">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 contact-info">
                    <div class="col-sm-12 contact-title">
                        <h2>Nos Contacts</h2>
                    </div>
                    <div class="col-sm-12 contact-box">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 single-address-box">
                                <div class="single-address">
                                    <i class="fa fa-phone"></i>
                                    <h4>Telephone 1</h4>
                                    <p> (+225) 07 09 43 43 15</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6  single-address-box">
                                <div class="single-address">
                                    <i class="fa fa-phone"></i>
                                    <h4>Telephone 2</h4>
                                    <p>(+225) 05 56 18 54 34</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 single-address-box">
                                <div class="single-address">
                                    <i class="fa fa-phone"></i>
                                    <h4>Telephone 3</h4>
                                    <p> (+225) 05 94 77 50 59 </p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 single-address-box">
                                <div class="single-address">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>infos@cfge.ci</p>
                                    <p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cfgeci01@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 single-address-box">
                                <div class="single-address">
                                    <i class="fa fa-map-marker"></i>
                                    <h4>Adresse:</h4>
                                    <p>Carrefour Duncan après la CEI </p>
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rue K112 villa 18</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6  col-sm-offset-1 contact-form">
                    <div class="row">
                        <div class="col-sm-12 contact-title-btm">
                            <h2>Envoyer un message</h2>
                        </div>
                    </div>
                    <div class="input-contact-form">
                        <div id="contact">
                            <div id="message"></div>
                            <form method="post" action="contact-check.php" name="contactform" id="contactform">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nom" name="name" id="name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Sujet" name="subject" id="subject" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea type="text" class="form-control" rows="6" placeholder="Message" name="messages" id="comments" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="full-width">
                                            <input value="Envoyer" type="submit" id="submit">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Area section -->
    <?php include_once 'includes/footer.php'; ?>
    <!-- ./ End Footer Area section -->




    <!-- ============================
    JavaScript Files
    ============================= -->
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
</body>

</html>