<main style="margin: 20px;">
<div class="d-flex justify-content-between">
        <h2 class="h2">Produits mis en vente</h2>
</div>
    <div class="table-responsive"> <br>
    <table class="table align-middle">
  <thead>
    <tr>
      <th scope="col">N°Commande</th>
      <th scope="col">Etat</th>
      <th scope="col">Date Commande</th>
      <th scope="col">Somme Total</th>
      <th scope="col"></th>
    </tr>
  </thead>
    <?php foreach ($commandes as $commande) { ?>
    <tr>
    <form action="<?= URL."gestioncommandes/$commande->idCommande" ?>" method="POST">
        <td><?= $commande->idCommande ?></td>
        <td><select style="width: 250px;" name="etat">
        <option <?php if($commande->etat == "en cours de traitement"){echo "selected";} ?> value="en cours de traitement">en cours de traitement</option>
        <option <?php if($commande->etat == "en cours de livraison"){echo "selected";} ?> value="en cours de livraison">en cours de livraison</option>
        <option <?php if($commande->etat == "livrée"){echo "selected";} ?> value="livrée">livrée</option>
    </select> <button type="submit">Changer état</button></td>
    <td><?=$commande->dateCommande?></td>
    <td><?=$commande->total?> dh</td>
    <td><a href="<?= URL."gestioncommandes/$commande->idCommande/$commande->idClient" ?>">plus d'info</a></td>
</form>
</tr>
<?php } ?>
  </tbody>
</table>
</div>
</main>