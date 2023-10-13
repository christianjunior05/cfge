<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dashboard</h1>
    </div>

    <section class="section dashboard">
        <!-- preinscrition -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body" id="preinscription">
                    <h5 class="card-title">Préinscriptions</h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date</th>
                                <th scope="col">Nom et Prenoms</th>
                                <th scope="col">Niveau</th>
                                <th scope="col">Formation souhaitée</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php

                                $i = 1;
                                foreach ($result as $row) { ?>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $row['jour']; ?></td>
                                    <td><?= $row['nom'] . " " . $row['prenom']; ?></td>
                                    <td><?= $row['niveau']; ?></td>
                                    <td><?= $row['formation']; ?></td>
                                    <td><a class="btn btn-sm btn-outline-primary" href="detail-pre.php?voir=<?= $row['id'] ?>">Details</a></td>
                            </tr>
                        <?php $i++;
                                } ?>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>

        <br><br>

        <!-- entreprise -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body" id="entreprise">
                    <h5 class="card-title">Entreprises</h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date</th>
                                <th scope="col">Raison sociale</th>
                                <th scope="col">Mail</th>
                                <th scope="col">Telephone</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php

                                $i = 1;
                                foreach ($result1 as $row) { ?>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $row['jour']; ?></td>
                                    <td><?= $row['rs']; ?></td>
                                    <td><?= $row['mail']; ?></td>
                                    <td><?= $row['tel']; ?></td>
                                    <td><a class="btn btn-sm btn-outline-primary" href="detail-ent.php?voir2=<?= $row['id'] ?>">Details</a></td>
                            </tr>
                        <?php $i++;
                                } ?>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>

        <br><br>

        <!-- newsletter -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body" id="newsletter">
                    <h5 class="card-title">Newsletter</h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Date d'inscription</th>
                                <th scope="col">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php

                                $i = 1;
                                foreach ($result4 as $row) { ?>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $row['jour']; ?></td>
                                    <td><?= $row['email']; ?></td>
                            </tr>
                        <?php $i++;
                                } ?>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </section>

</main>