<!--Ajout Produits Start -->
<div class="container-fluid pt-4 px-4" style='top: -33px;position: relative;'>
  <div class="  rounded align-items-center justify-content-center pt-3 pb-3 ">
    <div class='row px-3'>
      <div class="col-md-6">
        <img src="<?= base_url() . '/images/' . $produit['image'] ?>" alt="<?= $produit["titre"] ?>" class='img img-fluid mb-4' width='454.5'>
        <form action="<?= base_url('commentaire') ?>" method='POST'>
          <?= csrf_field() ?>
          <div class="form-group">
            <input type="hidden" name="email" value="<?= $_SESSION['email'] ?>">
            <input type="hidden" name="id_prod" value="<?= $produit['id'] ?>">
            <input type="hidden" name="valide" value="1">
            <input type='textarea' class="massage-bt" style="background: aliceblue;" placeholder="Laisser un commentaire" rows="5" id="comment" name="message">
          </div>
          <div class="form-group">
            <button type='submit' class="search_bt btn">Soumettre</button>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <div class='an-tableau '>
          <?php ($produit['prix_pro'] > 0) ? $prix = $produit['prix_pro'] : $prix = $produit['prix']; ?>
          <table class="table text-center">
            <tr class="table-dark">
              <th>Produit</th>
              <th>Details</th>
              <th>Prix en Euro</th>
            </tr>
            <tr>
              <td class="align-middle"><?= $produit['titre'] ?></td>
              <td class='align-middle'><?= $produit['detail'] ?></td>
              <td class="align-middle"><?= $prix ?></td>
            </tr>
          </table>
        </div>
        <a class="search_bt mb-4 btn p-3 text-light" href="<?= base_url() . '/pannier/' . $produit['id'] ?>">Ajouter</a>

        <div class="row d-flex ">
          <div class="col-md-12">
            <div class="card shadow-0 border" style="background-color: #f0f2f5;">
              <div class="card-body p-4">
                <?php if ($com == true) : ?>
                <?php else : ?>
                  <p>Auccun commentaire.</p>
                <?php endif ?>
                <?php foreach ($comments as $comment) : ?>
                  <?php if ($comment['id_prod'] == $produit['id']) : ?>
                    <div class="card mb-4">
                      <div class="card-body">
                        <p><?= $comment['comment'] ?></p>

                        <div class="d-flex justify-content-between">
                          <div class="d-flex flex-row align-items-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(4).webp" alt="avatar" width="40" height="40" style="border-radius: 50%;" class="img img-fluid" />
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

                    <?php if (isset($comment['admin_comment']) && $comment['admin_comment'] != '') : ?>
                      <div class="card mb-4" id='admin-comment'>
                        <div class="card-body">
                          <p><?= $comment['admin_comment'] ?></p>

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
                  <?php endif ?>
                <?php endforeach ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
</div>
</div>

<!-- Ajout Produits End -->