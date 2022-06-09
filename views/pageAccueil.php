<main>
      <section class="container d-flex justify-content-between mt-lg-5">
        <div id="firstSectionContent">
          <h1>iStore</h1>
          <h1>Maroc</h1>
          <p>
            Un large choix des produits Apple<br />avec le meilleur prix au
            Maroc.<br />Découvrez les derniers nouveauté de<br />la gamme et nos
            offres de promotions
          </p>
          <a class="text-dark" href="<?= URL."produits" ?>">Découvrir</a>
        </div>
        <div class="firstSectionImg d-none d-lg-block"></div>
      </section>
      <div
        class="container AcceuilIconsC d-flex flex-column flex-md-row justify-content-between align-items-center"
      >
        <div class="d-flex align-items-center">
          <img src="assets/icons/icon.svg" alt="Delivrey man" />
          <div class="ms-4">
            <span class="d-block fw-bold"> Livraison gratuite </span>
            <span> Sous 48 heures </span>
          </div>
        </div>
        <div class="d-flex align-items-center mt-5 mt-md-0">
          <img src="assets/icons/icone-apple-symbole-logo-bleu.svg" alt="Apple icon" />
          <div class="ms-4">
            <span class="d-block fw-bold"> Revendeur agree </span>
            <span> Produits garantis </span>
          </div>
        </div>
        <div class="d-flex align-items-center mt-5 mt-md-0">
          <img src="assets/icons/cash.svg" alt="Cash Icon" />
          <div class="ms-4">
            <span class="d-block fw-bold"> Cash on Delivery </span>
            <span> Partout au Maroc </span>
          </div>
        </div>
      </div>
      <section class="container mt-5">
        <h3 class="text-center">Nos Categories</h3>
        <div class="row">
          <div onclick="window.location.href = '<?= URL."produits/mac" ?>'" class="hover col-xl-4 col-md-6 col-12 text-center mt-5 mt-xl-4">
            <img src="assets/img/mac.png" alt="Mac" />
            <span class="d-block mt-3">Mac</span>
          </div>
          <div onclick="window.location.href = '<?= URL."produits/iphone" ?>'" class="hover col-xl-4 col-md-6 col-12 text-center mt-5 mt-xl-4">
            <img src="assets/img/iphone.png" alt="iphone" />
            <span class="d-block mt-3">iPhone</span>
          </div>
          <div onclick="window.location.href = '<?= URL."produits/ipad" ?>'" class="hover col-xl-4 col-md-6 col-12 text-center mt-5 mt-xl-4">
            <img src="assets/img/iPad.png" alt="iPad" />
            <span class="d-block mt-3">iPad</span>
          </div>
          <div onclick="window.location.href = '<?= URL."produits/watch" ?>'" class="hover col-xl-4 col-md-6 col-12 text-center mt-5 mt-xl-4">
            <img src="assets/img/watch.png" alt="Watch" />
            <span class="d-block mt-3">Watch</span>
          </div>
          <div onclick="window.location.href = '<?= URL."produits/airpods" ?>'" class="hover col-xl-4 col-md-6 col-12 text-center mt-5 mt-xl-4">
            <img src="assets/img/airpods.png" alt="Air Pods" />
            <span class="d-block mt-3">Air Pods</span>
          </div>
          <div onclick="window.location.href = '<?= URL."produits/accessoires" ?>'" class="hover col-xl-4 col-md-6 col-12 text-center mt-5 mt-xl-4">
            <img src="assets/img/Accessoires.png" alt="Accessoires" />
            <span class="d-block mt-3">Accessoires</span>
          </div>
        </div>
      </section>
      <section class="container mt-5">
        <h3 class="text-center">Nos Promotions</h3>
        <div class="row">
          <?php foreach ($promos as $promo) {?>
              <div class="col-xl-4 col-md-6 col-12 text-center mt-5 mt-xl-4 position-relative">
                <div class="d-flex justify-content-center" id="soldedOrNew">
                  <span>-<?= $promo->promotion; ?>%</span>
                </div>
                <img style="width: 50%;" src="<?= URL.$promo->imageProduit; ?>"/>
                <span class="d-block mt-3 mb-3"><?= $promo->nomProduit; ?></span>
                <span><del class="me-3"><?= $promo->prixProduit; ?> dh</del><?= $promo->prixProduit - ($promo->prixProduit * $promo->promotion / 100) ?> dh</span>
              </div>
            <?php } ?>
        </div>
      </section>
    </main>