<!-- Produits Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row  bg-secondary rounded align-items-center justify-content-center ">
        <div class="col-md-11 text-center mt-3 mb-3">
                        <h1 class='text-center'>Page des Produits</h1>
                        <hr class='hr w-100'>
                        <div class='an-tableau '>
                            <table class="table text-center">
                                <tr class="table-dark">
                                    <th>Image</th>
                                    <th>Titre</th>
                                    <th>Details</th>
                                    <th>Prix en Ar</th>
                                    <th colspan="2">Actions</th>
                                </tr>
                                <?php foreach ($produits as $produit ):?>
                                <tr>
                                    <td class="align-middle"><img src="<?=base_url().'/images/'.$produit['image']?>" width="60px;" height='60px;'></td>
                                    <td class="align-middle"><a href="#"><?= $produit['titre']?> </a></td>
                                    <td class='align-middle'><?= $produit['detail']?></td>
                                    <td class="align-middle"><?= $produit['prix']?> </td>
                                    <td class="align-middle">
                                        <form action="<?= base_url('steev-admin/modifierProduit') ?>" method='POST'>
                                            <?= csrf_field() ?>
                                            <input type="hidden" class='form-control' name='id' value ='<?= $produit['id']?>'>
                                            <button type='submit' class="btn btn-warning">Modifier</button>
                                        </form> 
                                    </td>
                                    <td class="align-middle">
                                        <form action="<?= base_url('steev-admin/s/supprimerProduit') ?>" method='POST'>
                                            <?= csrf_field() ?>
                                            <input type="hidden" class='form-control' name='id' value ='<?= $produit['id']?>'>
                                            <button type='submit' class="btn btn-danger">Supprimer</button>
                                        </form>    
                                    </td>
                                </tr>
                                <?php endforeach?>
                            </table>
                        <a href="<?= base_url('steev-admin/ajoutProduit')?>" class="btn btn-success d-block">Ajouter</a>
                        </div>
        </div>
    </div>
</div>
<!-- Prosuits End -->