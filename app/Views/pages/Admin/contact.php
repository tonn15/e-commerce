<div class="container">
    <?php foreach ($contact as $contacts) : ?>
        <div class="card bg-secondary p-4 mt-4">

            <h5>Email : <?= $contacts['email'] ?></h5>
            <h5>Nom : <?= $contacts['nom'] ?></h5>
            <h5>Tel : <?= $contacts['tel'] ?></h5>
            <h5 class="card bg-light p-4" style="text-align: justify;">Message :<br> <br><?= $contacts['message'] ?></h5>

        </div>
    <?php endforeach ?>
</div>