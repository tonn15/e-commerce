<div class="container-fluid pt-4 px-4">
    <div class="row  bg-secondary rounded align-items-center justify-content-center ">
        <div class="col-md-12  mt-3 mb-3">
            <h1 class='text-center'>Page d'ajout des Produits</h1>
            <hr class='hr w-100'>
            <form action="<?= base_url() . '/steev-admin/a/ajouter' ?>" method='POST' enctype='multipart/form-data'>
                <?= csrf_field() ?>
                <div class='form-group'>
                    <label for="">Titre</label>
                    <input type="text" class='form-control' name='titre'>
                </div>
                <div class='form-group'>
                    <label for="">Detail</label>
                    <input type="text" class='form-control' name='detail'>
                </div>
                <div class='form-group'>
                    <label for="">Prix</label>
                    <input type="number" class='form-control' name='prix'>
                </div>
                <div class='form-group'>
                    <label for="">Prix promo</label>
                    <input type="number" class='form-control' name='prix_pro'>
                </div>
                <div class='form-group'>
                    <label for="">Image</label>
                    <input type="file" class='form-control' name='image'>
                </div>
                <button type='submit' class='mt-3 btn btn-light'>Ajouter</button>
                <a href='<?= base_url('steev-admin/produits') ?>' class='mt-3 btn btn-light'>Retour</a>
            </form>
        </div>
    </div>
</div>
<!-- Ajout Produits End -->