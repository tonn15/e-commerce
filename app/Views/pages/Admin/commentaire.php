<div class="container p-4  ">
    <?php foreach ($commentaire as $comment) : ?>
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
    <?php endforeach ?>
</div>