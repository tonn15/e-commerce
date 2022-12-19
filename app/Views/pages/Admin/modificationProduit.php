
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
                <form action="<?= base_url().'/modificationProduits/'?>" method='POST' enctype='multipart/form-data'>
                <?= csrf_field() ?>
                    <input type="hidden" class='form-control' name='id' value ='<?= $produit["id"]?>' >

                    <div class='form-group mt-3'>
                        <label for="">Titre</label>
                        <input type="text" class='form-control' name='titre' value ='<?= $produit["titre"]?>' >
                    </div>
                    <div class='form-group mt-3'>
                        <label for="">Detail</label>
                        <input type="text" class='form-control' name='detail' value ='<?= $produit["detail"]?>'>
                    </div>
                    <div class='form-group mt-3'>
                        <label for="">Popular</label>
                        <input type="checkbox" name="popular" value='1' <?= ($produit["popular"] == 1 )? 'checked' :''?>   >
                        
                    </div>
                    <div class='form-group mt-3'>
                        <label for="">Prix</label>
                        <input type="number" class='form-control' name='prix' value ='<?= $produit["prix"]?>'>
                    </div>
                    <div class='form-group mt-3'>
                        <label for="">Image</label>
                        <input type="file" class='form-control' name='image' value ='<?= $produit["image"]?>'>
                    </div>
                    <button type='submit' class='mt-3 btn btn-light'>Modifier</button>
                    <a href='<?= base_url('steev-admin/produits')?>' class='mt-3 btn btn-light'>Retour</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Ajout Produits End -->