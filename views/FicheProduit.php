<?php
$today = date("Y-m-d");
$isPromo = false;
$stock = "";
if($data->quantiteStock > 10){
    $stock = "En Stock";
}elseif($data->quantiteStock > 0){
    $stock = "Moins de 10 articles en stock !!";
}else{
    $stock = "En Rupture de stock !!";
}
if($data->finPromotion > $today){ $isPromo = true; }
?>

<main class="container mt-5 mb-5">
        <section class="d-flex flex-column flex-md-row justify-content-evenly mb-5">
            <div style="width: 30%;" id="ProductImage"><img style="width:100%;" src="<?= URL.$data->imageProduit; ?>"></div>
            <div>
                <?php if($message != ""){ ?>
                <div class="alert alert-danger">
                        <?php echo $message; ?>
                </div>
                <?php } ?>
                <h3 class="mb-3"><?= $data->nomProduit; ?></h3>
                <?php if($isPromo){ ?>
                <span class="active">En promotion avant le : <?= $data->finPromotion; ?></span>
                <div class="my-3">
                <span class="fw-bold"><del><?= $data->prixProduit; ?> dh</del></span>
                <span class="active ms-4 fw-bold"><?= $data->prixProduit - ($data->prixProduit * $data->promotion / 100); ?> dh</span>
                <?php }else{ ?>
                <div class="my-3">
                <span class="fw-bold"><?= $data->prixProduit; ?> dh</span>
                <?php } ?>
                </div>
                <p><?= $stock; ?></p>
                <div style="width: 30px; height: 30px; border-radius: 100%;border: 1px solid black; background-color: <?= $data->couleur; ?>"></div> <br>
                <?php if($data->faceId == 1){ ?>
                    <img style="width: 60px;" src="<?= URL."assets/img/faceid.png" ?>">
                <?php } ?>
                <?php if($data->touchBar == 1){ ?>
                    <img style="width: 60px;" src="<?= URL."assets/img/touchbar.png" ?>">
                <?php } ?>
                <?php if($data->touchId == 1){ ?>
                    <img style="width: 60px;" src="<?= URL."assets/img/touchid.webp" ?>">
                <?php } ?>
                <?php if($data->quantiteStock > 0){ ?>
                <div class="d-flex justify-content-between mt-4">
                    <form action="" method="POST">
                        <input required style="width: 50px;" type="number" name="nombre">
                        <button type="submit" id="addToCart">Ajouter au panier</button>
                    </form>
                </div>
                <?php } ?>
                </div>
            </div>
        </section>
        <hr>
        <section class="mt-5">
            <h4 class="text-center fw-bolder">Description</h4>
            <article class="mt-5 d-flex flex-column flex-md-row justify-content-between">
                <div id="Desc1conta">
                    <p><?= $data->descriptionProduit; ?></p>
                </div>
                <div id="DescSeparator"></div>
                <div id="Desc2conta">
                    <h5 class="fw-bolder mb-4">Caractéristique techniques :</h5>
                    <ul><?php if($data->categorie == "mac" || $data->categorie == "iphone" || $data->categorie == "ipad"){ ?>
                        <li>Processeur : <?= $data->puce ?></li>
                        <li>Nbr de pouces : <?= $data->pouces ?> pouces</li>
                        <li>Stockage : <?= $data->stockage ?> GO SSD</li>
                        <li>Memoire RAM : <?= $data->memoire ?> GO</li>
                        <?php }if($data->categorie == "iphone" || $data->categorie == "ipad"){ ?>
                        <li>Appareil Photo : <?= $data->camera ?> px</li>
                        <?php } ?>
                    </ul>
                </div>
            </article>
        </section>
    </main>