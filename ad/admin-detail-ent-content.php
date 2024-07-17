<main id="main" class="main">

    <div class="pagetitle">
        <h1>Detail</h1>
    </div>

    <section class="section profile">
        <div class="row">
            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <h5 class="card-title">Details de la requete</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Date de somussion</div>
                                    <div class="col-lg-9 col-md-8"><?= $result3['jour']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Raison sociale</div>
                                    <div class="col-lg-9 col-md-8"><?= $result3['rs']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8"><?= $result3['mail']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Adresse</div>
                                    <div class="col-lg-9 col-md-8"><?= $result3['adresse']; ?>r</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Telephone</div>
                                    <div class="col-lg-9 col-md-8"><?= $result3['tel']; ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Objet</div>
                                    <div class="col-lg-9 col-md-8 text-danger">
                                        <strong><?= $result3['objet']; ?></strong>
                                    </div>
                                </div>

                                <div class="col*sm-2">
                                    <button class="btn btn-sm btn-primary text-light" onclick="history.back()">
                                        Retour</button>
                                    <button class="btn btn-sm btn-danger text-light" onclick="history.back()">
                                        Supprimez</button>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>