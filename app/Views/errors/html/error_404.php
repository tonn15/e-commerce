<?php require_once "header.php"; ?>
<style>
    div.logo {
        height: 200px;
        width: 155px;
        display: inline-block;
        opacity: 0.08;
        position: absolute;
        top: 2rem;
        left: 50%;
        margin-left: -73px;
    }

    body {
        height: 100%;
        background: #fafafa;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        color: #777;
        font-weight: 300;
    }

    h1 {
        font-weight: lighter;
        letter-spacing: normal;
        font-size: 3rem;
        margin-top: 0;
        margin-bottom: 0;
        color: #222;
    }

    .wrap {
        max-width: 1024px;
        margin: 5rem auto;
        padding: 2rem;
        background: #fff;
        text-align: center;
        border: 1px solid #efefef;
        border-radius: 0.5rem;
        position: relative;
    }

    pre {
        white-space: normal;
        margin-top: 1.5rem;
    }

    code {
        background: #fafafa;
        border: 1px solid #efefef;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        display: block;
    }

    p {
        margin-top: 1.5rem;
    }

    .footer {
        margin-top: 2rem;
        border-top: 1px solid #efefef;
        padding: 1em 2em 0 2em;
        font-size: 85%;
        color: #999;
    }

    a:active,
    a:link,
    a:visited {
        color: #dd4814;
    }
</style>

<div class="wrap text-center">
    <div class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="<?= base_url() . '/accueil' ?>">Accueil</a>
                <a class="nav-item nav-link" href="<?= base_url() . '/boutique' ?>">Boutique</a>
                <a class="nav-item nav-link" href="<?= base_url() . '/about' ?>"> A propos</a>
                <a class="nav-item nav-link" href="<?= base_url() . '/client' ?>">Clients</a>
                <a class="nav-item nav-link" href="<?= base_url() . '/contact' ?>">Contacts</a>
            </div>
        </div>
    </div>
    <hr class='hr'>
    <div class="row">
        <div class="col-6">
            <a href="<?= base_url() . '/' ?>"><img src="<?= base_url('images/ws_Hacker_Wp3_1366x768.jpg') ?>" class='img img-fluid '></a>
        </div>
        <div class="col-6">
            <h1 class="text-danger">Error 404</h1>

            <p>
                <?php if (ENVIRONMENT !== 'production') : ?>
                    <?= nl2br(esc($message)) ?>
                <?php else : ?>
                    Sorry! Cannot seem to find the page you were looking for.
                <?php endif ?>
            </p>
        </div>
    </div>
</div>
<?php require_once "footer.php"; ?>