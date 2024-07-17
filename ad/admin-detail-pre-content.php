<main id="main" class="main">

    <div class="pagetitle">
        <h1>Detail</h1>
        <!-- <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Users</li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav> -->
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <!-- <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <h2></h2>
                        <h3>Web Designer</h3>
                        <div class="social-links mt-2">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>

            </div> -->

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <h5 class="card-title">Details du profile</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Date de canditure</div>
                                    <div class="col-lg-9 col-md-8"><?= $result2['jour']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Nom et Prenoms</div>
                                    <div class="col-lg-9 col-md-8"><?= $result2['nom'] ." ". $result2['prenom']; ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Telephone</div>
                                    <div class="col-lg-9 col-md-8"><?= $result2['tel']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8"><?= $result2['mail']; ?>r</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nationalité</div>
                                    <div class="col-lg-9 col-md-8"><?= $result2['nationalite']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Niveau</div>
                                    <div class="col-lg-9 col-md-8 text-danger">
                                        <strong><?= $result2['niveau']; ?></strong>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Dernier Etablissement fréquenté</div>
                                    <div class="col-lg-9 col-md-8"><?= $result2['etab']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Dernier diplôme obtenu</div>
                                    <div class="col-lg-9 col-md-8"><?= $result2['dip']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Formation souhaitée</div>
                                    <div class="col-lg-9 col-md-8 text-danger">
                                        <strong><?= $result2['formation']; ?></strong>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Comment avez-vous entendu parlé du CIFEC BENIN?
                                    </div>
                                    <div class="col-lg-9 col-md-8"><?= $result2['moyen']; ?></div>
                                </div>

                                <div class="col*sm-2">
                                    <button class="btn btn-sm btn-primary text-light" onclick="history.back()">
                                        Retour</button>
                                    <button class="btn btn-sm btn-danger text-light" onclick="history.back()">
                                        Supprimez</button>
                                    <button class="btn btn-sm btn-success text-light" onclick="history.back()">
                                        Telecharger</button>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>