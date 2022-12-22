
<div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;background:#234e79">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-light"><i class="fa fa-user-edit me-2"></i>E-commerce</h3>
                            </a>
                            <h3>S'inscrire</h3>
                        </div>
                        <form action="<?= base_url().'/inscription/a' ?>" method='POST' enctype='multipart/form-data'>
                            <?= csrf_field() ?>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingText" placeholder="Nom" name="nom">
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Email" name="email">
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="Mot de passe" name="password">
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="floatingPassword" placeholder="confirmer votre mot de passe" name="confirmation">
                            </div>
                            <button type="submit" class="btn btn-primary py-3 w-100 mb-4">s'inscrire</button>
                        </form>
                        <p class="text-center mb-0">Avez vous deja un compt? <br> <a href="<?=base_url('connexion')?>">Connexion</a></p>
                    </div>
                </div>
            </div>