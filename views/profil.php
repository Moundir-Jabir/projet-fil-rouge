<main class="container"> <br>
    <div class="row justify-content-center">
        <div class="col-md-5 col-sm-10">
            <div class="card" style="width: 18rem;margin: auto;">
                <img style="width: 100%;" src="<?= URL.$profil->imageProfil ?>" class="card-img-top" alt="photo profil">
                <div class="card-body">
                    <h5 class="card-title"><?= $profil->nomClient ?></h5>
                    <p class="card-text">Email : <?= $profil->emailClient ?></p>
                    <p class="card-text">N° Tél : <?= $profil->telephone ?></p>
                    <p class="card-text">Ville : <?= $profil->villeCompte ?></p>
                    <p class="card-text">Adresse de livraison : <?= $profil->adresseCompte ?></p>
                    <a href="<?= URL."logout" ?>"><button class="btn orange">Se Déconnecter</button></a>
                </div>
                </div>
            </div>
            <div class="col-md-7 col-sm-10">
                <h2>Mes Commandes</h2>
                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">N°Commande</th>
                        <th scope="col">Date Commande</th>
                        <th scope="col">Etat</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($commandes as $commande) { ?>
                            <tr>
                                <td><?= $commande->idCommande ?></td>
                                <td><?= $commande->dateCommande ?></td>
                                <td><?= $commande->etat ?></td>
                                <td><?= $commande->total ?> dh</td>
                                <td><a href="<?= URL."profil/".$commande->idCommande ?>">Détails</a></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
</main>