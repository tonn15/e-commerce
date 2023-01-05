<!--Ajout Produits Start -->



<div class="container-fluid pt-4 px-4">
    <div class=" bg-secondary rounded align-items-center justify-content-center pt-3 pb-3 ">
        <div class='row px-3'>
            <div class="col-md-6">
                <img src="<?= base_url() . '/images/' . $produit['image'] ?>" alt="<?= $produit["titre"] ?>" class='img img-fluid' width='454.5'>
            </div>
            <div class="col-md-6">
                <form action="<?= base_url() . '/modificationProduits/' ?>" method='POST' enctype='multipart/form-data'>
                    <?= csrf_field() ?>
                    <input type="hidden" class='form-control' name='id' value='<?= $produit["id"] ?>'>

                    <div class='form-group mt-3'>
                        <label for="">Titre</label>
                        <input type="text" class='form-control' name='titre' value='<?= $produit["titre"] ?>'>
                    </div>
                    <div class='form-group mt-3'>
                        <label for="">Detail</label>
                        <input type="text" class='form-control' name='detail' value='<?= $produit["detail"] ?>'>
                    </div>
                    <div class='form-group mt-3'>
                        <label for="">Popular</label>
                        <input type="checkbox" name="popular" value='1' <?= ($produit["popular"] == 1) ? 'checked' : '' ?>>

                    </div>
                    <div class='form-group mt-3'>
                        <label for="">Prix</label>
                        <input type="number" class='form-control' name='prix' value='<?= $produit["prix"] ?>'>
                    </div>
                    <div class='form-group mt-3'>
                        <label for="">Prix promo</label>
                        <input type="number" class='form-control' name='prix_pro' value='<?= $produit["prix_pro"] ?>'>
                    </div>
                    <div class='form-group mt-3'>
                        <label for="">Image</label>
                        <input type="file" class='form-control' name='image' value='<?= $produit["image"] ?>'>
                    </div>
                    <button type='submit' class='mt-3 btn btn-light'>Modifier</button>
                    <a href='<?= base_url('steev-admin/produits') ?>' class='mt-3 btn btn-light'>Retour</a>
                </form>
            </div>
        </div>
    </div>
    <div class=" mt-4 bg-secondary rounded align-items-center justify-content-center pt-3 pb-3 ">
        <div class='row px-3'>
            <?php foreach ($comments as $comment) : ?>
                <?php if ($comment['id_prod'] == $produit['id']) : ?>
                    <div class="card mb-4">
                        <div class="card-body">
                            <p><?= $comment['comment'] ?></p>

                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">
                                    <i class=" fa-solid fa-user fa-1x" style="border: solid 1px gray;padding: 9px;border-radius: 50%;"></i>
                                    <p class="small mb-0 ms-2"><?= $comment['email'] ?></p>
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                    <p class="small text-muted mb-0">Upvote?</p>
                                    <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                                    <p class="small text-muted mb-0">3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4" id='admin-comment'>
                        <div class="card-body">
                            <form action="<?= base_url() . '/modificationCommentaire/' ?>" method='POST'>
                                <?= csrf_field() ?>
                                <div class='form-group'>
                                    <input type="hidden" value="<?= $comment['id'] ?>" name="id_com">
                                    <input style="color: white;" type="text" class='form-control mb-3' name='admin_comment' value="<?= $comment['admin_comment'] ?>">
                                </div>
                            </form>

                            <div class="d-flex justify-content-between">
                                <div class="d-flex flex-row align-items-center">


                                    <img src="<?= base_url('images/E-Commerce.png') ?>" alt="avatar" width="40" height="40" />
                                    <p class="small mb-0 ms-2">Service-client</p>
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                    <p class="small text-muted mb-0">Upvote?</p>
                                    <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                                    <p class="small text-muted mb-0">3</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- Ajout Produits End -->