<main id="main" class="main">

    <div class="pagetitle">
        <h1>Administrateur</h1>
    </div>

    <section class="section profile">
        <div class="row">
           
            <div class="col-xl-12">

                <div class="card">
                    <div class="card-body pt-3">
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#listeAdmin">Liste des Admins</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Modifier le Password</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="listeAdmin">

                                <br><br>
                                <div class="col-12">
                                    <div class="card recent-sales overflow-auto">



                                        <div class="card-body" id="">
                                            <h5 class="card-title">Liste des Admins </h5>

                                            <table class="table table-borderless datatable">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Password</th>
                                                        <th scope="col">Créé le</th>
                                                        <th scope="col">Modifié le</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <?php

                                                        $i = 1;
                                                        foreach ($r as $row) { ?>
                                                            <th scope="row"><?= $i; ?></th>
                                                            <td><?= $row['username']; ?></td>
                                                            <td>
                                                                <select>
                                                                    <option selected>...</option>
                                                                    <option><?= $row['pass']; ?></option>
                                                                </select>
                                                            </td>
                                                            <td><?= $row['cree_le']; ?></td>
                                                            <td><?= $row['modifie_le']; ?></td>

                                                    </tr>
                                                <?php $i++;
                                                        } ?>
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>
                                </div>

                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                <form method="post" action="">
                                    <input name="id" type="hidden" class="form-control" id="id" value="<?= $p['id']; ?>">
                                    <div class="row mb-3">
                                        <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="username" type="text" class="form-control" id="username" value="<?= $p['username']; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-lg-3 col-form-label">Ancien Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password" type="text" class="form-control" id="password" value="<?= $p['pass']; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-lg-3 col-form-label">Nouveau Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="new_password" type="password" class="form-control" id="new_password">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <input type="submit" name="modifier" class="btn btn-primary" value="Modifier">
                                    </div>
                                </form>

                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>