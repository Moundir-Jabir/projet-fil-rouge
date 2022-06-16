<main>
    <div class="container">
        <div class="row justify-content-center">
            <div id="student" class="col-lg col-md-3 col-sm-5 col-11 case">
                <p>Nouvelles Commandes</p>
                <h2><?= $nbrCommande ?></h2>
            </div>
            <div id="course" class="col-lg col-md-3 col-sm-5 col-11 case">
                <p>Produits en rupture de stock</p>
                <h2><?= $nbrProduit ?></h2>
            </div>
            <div id="payment" class="col-lg col-md-3 col-sm-5 col-11 case">
                <p>Clients</p>
                <h2><?= $nbrClient ?></h2>
            </div>
        </div>
    </div>
</main>