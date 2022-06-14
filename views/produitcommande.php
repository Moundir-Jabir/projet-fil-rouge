<div class="container">
<h2>Produits Commandés</h2> <br>
<div class="row ps-5">
    <?php foreach ($produits as $produit) { ?>
    <div class="col-xxl-4 col-lg-6 col-12 text-center mt-5 mt-xl-4 position-relative">
        <img style="width: 50%;" src="<?= URL.$produit->imageProduit; ?>"/>
        <span class="d-block mt-3 mb-3"><a class="product" href="<?= URL."ficheproduit/$produit->idProduit" ?>"> <?= $produit->nomProduit; ?> </a></span>
        <span><?= $produit->quantite; ?> articles</span>
    </div>
    <?php } ?>
    </div>
</div>