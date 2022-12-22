
<!--Ajout Produits Start -->


<div class="container-fluid pt-4 px-4" style='top: -33px;position: relative;'>
    <div class="  rounded align-items-center justify-content-center pt-3 pb-3 ">
        <div class='row px-3'>
            <div class="col-md-6">
                <img src="<?=base_url().'/images/'.$produit['image']?>" alt="<?= $produit["titre"]?>" class='img img-fluid' width='454.5'>
            </div>
            <div class="col-md-6">
                    <div class='an-tableau '>
                            <table class="table text-center">
                                <tr class="table-dark">
                                    <th>Produit</th>
                                    <th>Details</th>
                                    <th>Prix en Ar</th>
                                </tr>
                                <tr>
                                    <td class="align-middle"><?= $produit['titre']?></td>
                                    <td class='align-middle'><?= $produit['detail']?></td>
                                    <td class="align-middle"><?= $produit['prix']?></td>
                                </tr>
                            </table>
                    </div>
                    <form action="">
                        <div class='form-group'>
                            <label for="">Nombre:</label>
                            <input type="number" name="" id="" style='width:52px;' placeholder='0'>
                        </div>
                        <div class='form-group'>
                            <label for="">Couleur:</label>
                            <input type="color" name="" id="" style='width:52px;'>
                        </div>
                        <button type="submit" class='search_bt'>Ajouter</button>
                    </form>
            </div>

            </div>
        </div>
    </div>
</div>
<!-- Ajout Produits End -->