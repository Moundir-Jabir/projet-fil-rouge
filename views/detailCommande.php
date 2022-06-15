<main class="container">
    <h2>Information sur le client</h2>
    <div>
    <ul>
        <li>Nom Complet : <?= $profil->nomClient ?></li>
        <li>Email : <?= $profil->emailClient ?></li>
        <li>N° Tél : <?= $profil->telephone ?></li>
        <li>Ville : <?= $profil->villeCompte ?></li>
        <li>Adresse de livraison : <?= $profil->adresseCompte ?></li>
    </ul>
    </div>
    <?php include('produitcommande.php'); ?>
</main>