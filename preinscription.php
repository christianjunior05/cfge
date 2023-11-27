<?php
session_start();
// Obtenez le nom du fichier actuel
$current_page = basename($_SERVER['PHP_SELF']);

include_once 'controller.php';
?>

<!doctype html>
<html class="no-js" lang="zxx">
<?php include_once 'includes/head.php'; ?>

<body class="register">
    <!-- Preloader -->
    <!-- <div id="preloader">
	<div id="status">&nbsp;</div>
</div> -->
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
                            <h1>Preinscription</h1>
                            <!-- <p><span><a href="">Home <i class='fa fa-angle-right'></i></a></span><span class="b-active"> Register</span></p> -->
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div>
    </header>
    <!--  End header section-->


    <!-- Teachers Area section -->
    <section class="register-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form action="" method="post" class="learnpro-register-form">
                        <p class="lead">formulaire de preinscription</p>
                        <p class="text-center"><strong><em>* Tous les champs sont obligatoires</em></strong></p> <br>
                        <?php
                        if (isset($error_message)) {
                            echo '<div class="alert alert-danger text-center" role="alert">' . $error_message . '</div>';
                        }
                        if (isset($message)) {
                            echo '<div class="alert alert-success text-center" role="alert">' . $message . '</div>';
                        }
                        ?>
                        <div class="row">
                            <!-- jour -->
                            <input type="hidden" name="jour" value="<?php echo date("Y-m-d H:i:s"); ?>">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <label>Vous êtes? *</label>
                                    <div class="form-group">
                                        <select name="typ" id="" class="form-control">
                                            <?php include_once 'includes/typ.php'; ?>
                                        </select>
                                    </div>
                                    <br>
                                </div>

                                <div class="col-sm-6"><label>Niveau *</label>
                                    <div class="form-group">
                                        <select name="niveau" id="" class="form-control">
                                            <?php include_once 'includes/liste-niveau.php'; ?>
                                        </select>
                                    </div>
                                </div>
                                <br>
                            </div>


                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <label>Nom *</label>
                                    <div class="form-group">
                                        <input autocomplete="off" class="form-control" placeholder="" type="text" name="nom" pattern="/^[\p{L}\s\'-]+$/u" value="<?php if (isset($_POST['nom'])) {
                                                                                                                                                                        echo $_POST['nom'];
                                                                                                                                                                    } ?>">
                                        <span class="text-danger"><?php if (isset($er_nom)) {
                                                                        echo $er_nom;
                                                                    } ?></span>
                                    </div>
                                    <br>

                                </div>

                                <div class="col-sm-6"><!-- prenom -->
                                    <label>Prénoms*</label>
                                    <div class="form-group">
                                        <input autocomplete="off" class="form-control" placeholder="" type="text" name="prenom" pattern="^[A-Za-zÀ-ÖØ-öø-ÿ -]+$" value="<?php if (isset($_POST['prenom'])) {
                                                                                                                                                                            echo $_POST['prenom'];
                                                                                                                                                                        } ?>">
                                        <span class="text-danger"><?php echo $er_prenom ?? ''; ?></span>
                                    </div>
                                    <br>

                                </div>

                            </div>

                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <!-- telephone -->
                                    <label>Téléphone *</label>
                                    <div class="form-group">
                                        <input autocomplete="off" class="required form-control" placeholder="" type="text" name="tel" pattern="^\+?[0-9\s.-]+$" value="<?php if (isset($_POST['tel'])) {
                                                                                                                                                                            echo $_POST['tel'];
                                                                                                                                                                        } ?>">
                                        <span class="text-danger"><?php echo $er_tel ?? ''; ?></span>
                                    </div>
                                    <br>
                                </div>

                                <div class="col-sm-6">
                                    <!-- mail -->
                                    <label>Email *</label>
                                    <div class="form-group">
                                        <input class="required form-control" placeholder="" type="email" name="mail" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" value="<?php if (isset($_POST['mail'])) {
                                                                                                                                                                                            echo $_POST['mail'];
                                                                                                                                                                                        } ?>">
                                        <span class="text-danger"><?php echo $er_mail ?? ''; ?></span>
                                    </div>
                                    <br>
                                </div>

                            </div>

                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <!-- Nationalité -->
                                    <label>Nationalité *</label>
                                    <div class="form-group">
                                        <select name="pays" id="" class="form-control">
                                            <option value="">Choisir</option>
                                            <?php include_once 'includes/liste-pays.php'; ?>
                                        </select>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-sm-6">
                                    <!-- formation souhaitée -->
                                    <label>Formation souhaitée *</label>
                                    <div class="form-group">
                                        <select name="form-sou" id="" class="form-control">

                                            <?php include_once 'includes/liste-formation.php'; ?>
                                        </select>
                                    </div>
                                    <br>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <!-- dernier etablissement -->
                                    <label>Dernier établissement fréquenté *</label>
                                    <div class="form-group">
                                        <input autocomplete="off" class="required form-control" placeholder="" type="text" name="last-eta" value="<?php if (isset($_POST['last-eta'])) {
                                                                                                                                                        echo $_POST['last-eta'];
                                                                                                                                                    } ?>">
                                    </div>
                                    <br>
                                </div>
                                <div class="col-sm-6">
                                    <!-- dernier diplome obtenu -->
                                    <label>Dernier diplôme obtenu *</label>
                                    <div class="form-group">
                                        <input autocomplete="off" class="required form-control" placeholder="" type="text" name="last-dip" value="<?php if (isset($_POST['last-dip'])) {
                                                                                                                                                        echo $_POST['last-dip'];
                                                                                                                                                    } ?>">
                                    </div>
                                    <br>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <!-- comment entendu parler -->
                                    <label>Comment avez-vous entendu du CIFEC ? *</label>
                                    <div class="form-group">
                                        <select name="cmt" id="" class="form-control">
                                            <?php include_once 'includes/comment.php'; ?>
                                        </select>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group register-btn col-sm-4">
                                        <input type="submit" class="btn btn-primary btn-lg" value="VALIDER" name="register">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <textarea class="form-control" placeholder="About / Bio" name="bio" rows="3" style="resize: none;"></textarea> -->
                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- ./ End Teachers Area section -->



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