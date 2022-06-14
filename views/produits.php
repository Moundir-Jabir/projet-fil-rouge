<main class="container mt-5">
        <h2 class="text-center">Catalogues des produits<?= $categorie; ?></h2>
        <div class="d-flex flex-column flex-md-row mt-5 mb-5">
            <div class="d-flex flex-column">
                <div class="d-flex flex-column">
                    <div class="h3ContainProd p-2">
                        <h5>Categories</h3>
                    </div>
                    <div class="ps-2">
                    <ul class="list-unstyled devicesList">
                      <li><a href="<?= URL."produits" ?>" class="py-2 d-block">All</a></li>
                      <li><a href="<?= URL."produits/mac" ?>" class="py-2 d-block">Mac</a></li>
                      <li><a href="<?= URL."produits/iphone" ?>" class="py-2 d-block">iPhone</a></li>
                      <li><a href="<?= URL."produits/ipad" ?>" class="py-2 d-block">iPad</a></li>
                      <li><a href="<?= URL."produits/watch" ?>" class="py-2 d-block">Watch</a></li>
                      <li><a href="<?= URL."produits/airpods" ?>" class="py-2 d-block">Air Pods</a></li>
                      <li><a href="<?= URL."produits/accessoires" ?>" class="py-2 d-block">Accessoire</a></li>
                    </ul>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <form action="" method="POST">
                    <div class="h3ContainProd p-2">
                        <h5>Fourchette de prix</h5>
                    </div>
                    <div class="ps-2">
                        <div class="wrapper">
                            <div class="values">
                                <small id="range1">0</small>
                                <small>&dash;</small>
                                <small id="range2">100</small>
                            </div>
                            <div class="rangeCont">
                                <div class="slider-track">
                                    <div class="d-flex justify-content-between mt-3">
                                        <span>0 dh</span>
                                        <span>50000 dh</span>
                                    </div>
                                </div>
                                <input name="min" type="range" min="0" max="50000" value="<?php if(isset($_POST['min'])){ echo $_POST['min']; }else{echo "0";} ?>" id="slider-1">
                                <input name="max" type="range" min="0" max="50000" value="<?php if(isset($_POST['max'])){ echo $_POST['max']; }else{echo "50000";} ?>" id="slider-2">
                            </div>
                        </div>
                    </div>
                    <div class="ps-2 mt-4">
                        <button type="submit" class="orange btn" id="filterButt">Filtrer</button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="row ps-5">
                <?php foreach ($produits as $produit) { ?>
                <div class="col-xxl-4 col-lg-6 col-12 text-center mt-5 mt-xl-4 position-relative">
                  <img style="width: 50%;" src="<?= URL.$produit->imageProduit; ?>"/>
                  <span class="d-block mt-3 mb-3"><a class="product" href="<?= URL."ficheproduit/$produit->idProduit" ?>"> <?= $produit->nomProduit; ?> </a></span>
                  <span><?= $produit->prixProduit; ?> dh</span>
                </div>
                <?php } ?>
              </div>
        </div>
    </main>
    <script src="<?= URL."assets/script/main.js" ?>"></script>