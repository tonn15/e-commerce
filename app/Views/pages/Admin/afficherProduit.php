
<!--Ajout Produits Start -->
<?= session()->getFlashdata('error') ?>
<?= service('validation')->listErrors() ?>


<div class="container-fluid pt-4 px-4">
    <div class=" bg-secondary rounded align-items-center justify-content-center pt-3 pb-3 ">
        <div class='row px-3'>
            <div class="col-md-6">
                <img src="<?=base_url().'/images/'.$produit['image']?>" alt="<?= $produit["titre"]?>" class='img img-fluid' width='454.5'>
            </div>
            <div class="col-md-6">
                        <h3>Titre</h3>
                        <p><?= $produit["titre"]?></p>
                        <h3>Detail</h3>
                        <p><?= $produit["detail"]?></p>
                        <h3>Prix</h3>
                        <p><?= $produit["prix"]?></p>
                    <a href='<?= base_url('steev-admin/produits')?>' class='mt-3 btn btn-light'>Retour</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Ajout Produits End -->