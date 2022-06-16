<main style="margin: 20px;">
    <div class="d-flex justify-content-between">
        <h2 class="h2">Produits mis en vente</h2>
                <!-- Button trigger modal -->
        <button type="button" class="btn orange" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ajouter
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nouveau Produit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form id="produit" action="" method="POST" enctype="multipart/form-data">
                <div class="d-flex">
                    <div class="m-3">
                        <label for="nom" class="form-label">Nom Produit</label>
                        <input required type="text" class="form-control" name="nom" id="nom">
                    </div>
                    <div class="m-3">
                        <label for="prix" class="form-label">Prix</label>
                        <input required type="number" class="form-control" name="prix" id="prix">
                    </div>
                </div>
                <div class="d-flex">
                    <div class="m-3">
                        <label for="quantite" class="form-label">Nbr article</label>
                        <input required type="number" class="form-control" name="quantite" id="quantite">
                    </div>
                    <div class="m-3">
                        <label for="description" class="form-label">Description</label>
                        <input required type="text" class="form-control" name="description" id="description">
                    </div>
                </div>
                <div class="d-flex">
                    <div class="m-3">
                        <label for="couleur" class="form-label">Couleur</label>
                        <input required type="color" class="form-control form-control-color" name="couleur" id="couleur">
                    </div>
                    <div class="m-3">
                        <label for="image" class="form-label">Photo du Produit</label>
                        <input required type="file" class="form-control" name="image" id="image">
                    </div>
                </div>
                <div class="m-3">
                <label for="categorie">Catégorie</label>
                <select class="form-select" id="categorie" name="categorie">
                    <option value="mac" selected>Mac</option>
                    <option value="iphone">iPhone</option>
                    <option value="ipad">iPad</option>
                    <option value="watch">Watch</option>
                    <option value="airpods">Air Pods</option>
                    <option value="accessoires">Accessoires</option>
                </select>
                </div>
                <div id="dynamique">
                    <div class="d-flex">
                        <div class="m-3">
                            <label for="pouces" class="form-label">Nbr de pouces</label>
                            <input required type="number" class="form-control" name="pouces" id="pouces">
                        </div>
                        <div class="m-3">
                            <label for="puce" class="form-label">Puce</label>
                            <input required type="text" class="form-control" name="puce" id="puce">
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="m-3">
                            <label for="stockage" class="form-label">Stockage (GB)</label>
                            <input required type="number" class="form-control" name="stockage" id="stockage">
                        </div>
                        <div class="m-3">
                            <label for="memoire" class="form-label">Mémoire RAM</label>
                            <input required type="number" class="form-control" name="memoire" id="memoire">
                        </div>
                    </div>
                    <div class="d-flex justify-content-evenly">
                        <div class="m-3">
                            <label for="touchbar" class="form-label">Touch bar</label>
                            <input type="checkbox" name="touchbar" id="touchbar">
                        </div>
                        <div class="m-3">
                            <label for="touchid" class="form-label">Touch id</label>
                            <input type="checkbox" name="touchid" id="touchid">
                        </div>
                    </div>
                </div>
                    <button class="orange btn" type="submit">Ajouter</button>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div> <br>
    <div class="table-responsive">
    <table class="table align-middle">
  <thead>
    <tr>
      <th scope="col">Photo</th>
      <th scope="col">Nom Produit</th>
      <th scope="col">Prix</th>
      <th scope="col">Quantite en stock</th>
      <th scope="col">Promotion (%)</th>
      <th scope="col">Date fin promotion</th>
    </tr>
  </thead>
    <?php foreach ($produits as $produit) { ?>
    <tr>
    <form action="<?= URL."gestionstock/".$produit->idProduit; ?>" method="POST">
        <td><img style="width: 100px;" src="<?= $produit->imageProduit ?>"></td>
        <td><?= $produit->nomProduit ?></td>
        <td> <input type="number" name="prixProduit" value="<?= $produit->prixProduit ?>"> dh</td>
        <td class="<?php if($produit->quantiteStock == 0){echo "bg-danger";}elseif($produit->quantiteStock < 10){ echo "bg-warning"; } ?>"> <input type="number" name="quantiteStock" value="<?= $produit->quantiteStock ?>"> articles</td>
        <td> <input type="number" name="promotion" value="<?= $produit->promotion ?>"> %</td>
        <td> <input type="date" name="finPromotion" value="<?= $produit->finPromotion ?>"></td>
        <td><button type="submit">Modifier</button></td>
    </form>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</main>
<script src="assets/script/categorie.js"></script>