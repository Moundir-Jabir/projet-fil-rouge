<?php
$total = 0;
?>
<main class="container mt-5">
        <h4 class="text-center">Mon Panier</h4>
        <?php if($message != ""){ ?>
                <div class="alert alert-danger">
                        <?php echo $message; ?>
                </div>
                <?php } ?>
        <section class="overflow-scroll" id="panierFsection">
        <div class="d-flex PanierContentC mt-5 mb-3 pb-3">
            <div class="w-50"><span>Produit</span></div>
            <div class="d-flex justify-content-around w-50"><span>Prix unitaire</span><span>Quantite</span><span>TOTAL</span></div>
        </div>
        <?php if(isset($_SESSION['panier'])){
            foreach ($_SESSION['panier'] as $key => $value) { ?>
                <div class="d-flex justify-content-between align-items-center PanierContentC mb-3 pb-3">
                    <img style="width: 100px;" src="<?= URL.$value->imageProduit ?>">
                    <span><a class="product" href="<?= URL."ficheproduit/$key" ?>"> <?= $value->nomProduit; ?> </a> </span>
                    <span><?= $value->prixProduit ?> dh</span>
                    <span><?= $value->nombre ?></span>
                    <span class="active"><?= $value->prixProduit * $value->nombre ?> dh</span>
                </div>
            <?php $total += $value->prixProduit * $value->nombre; }} ?>
    </section>
    <section class="d-flex flex-column align-items-end mt-4 mb-5 secondSectPanier">
        <div class="w-50">
        <div class="mb-4">
            <h4 class="fw-bolder pb-2 PanierContentC w-100">Total Commande</h4>
        </div>
        <div class="d-flex flex-column flex-sm-row justify-content-between mt-2 my-3"><span>TOTAL</span><span class="fw-bold"><?= $total ?> dh</span></div>
        <button onclick="window.location.href = '<?= URL."panier/valider" ?>'" class="w-100 submit" id="ProceedButt">Valider la commande</button>
        </div>
    </section>
</main>