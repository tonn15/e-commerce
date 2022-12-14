<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>e-commerce | Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <!-- link rel="preconnect" href="https://fonts.googleapis.com"-->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"-->

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('admin/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('admin/css/style.css') ?>" rel="stylesheet">
    <?php
    if (!isset($title)) {
        $title = 'admin';
    } else if ($title === 'accueil') {
        ##<!-- Template Stylesheet -->
        include_once('css.php');
    }
    ?>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="<?= base_url('steev-admin') ?>" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>E-commerce</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?= base_url('admin/img/user.jpg') ?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Steev</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?= base_url('steev-admin') ?>" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?= base_url('steev-admin/accueil') ?>" class="dropdown-item">Accueil</a>
                            <a href="<?= base_url('steev-admin/produits') ?>" class="dropdown-item">Produits</a>
                            <a href="<?= base_url('steev-admin/contact') ?>" class="dropdown-item">Contact</a>
                        </div>
                    </div>
                    <a href="<?= base_url('steev-admin/commentaire') ?>" class="nav-item nav-link "><i class="fa fa-bell me-lg-2 "></i>Commentaire</a>

                </div>
            </nav>
        </div>
        <!-- Sidebar End -->
        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary  navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                            <?php if (isset($c) && $c > 0) : ?>
                                <span class="text-light bg-danger an-notif"><?= (isset($c)) ? $c : ''; ?></span>
                            <?php else : ?>
                            <?php endif ?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <?php if (isset($co)) : ?>
                                <?php foreach ($co as $comment) : ?>
                                    <?php if ($comment['valide'] == 1) : ?>
                                        <form action="<?= base_url() . '/modificationCommentaire/' ?>" method='POST'>
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="id_com" value="<?= $comment['id'] ?>">
                                            <input type="hidden" name="valide" value="0">
                                            <input type="hidden" name="id" value="<?= $comment['id_prod'] ?>">
                                            <button type="submit" class="dropdown-item">
                                                <div class="d-flex align-items-center">
                                                    <i class=" fa-solid fa-user fa-1x" style="border: solid 1px white;padding: 9px;border-radius: 50%;"></i>
                                                    <div class="ms-2">
                                                        <h6 class="fw-normal mb-0" style="color: #fff;"><?= $comment['email'] ?></h6>
                                                        <small class="d-inline-block text-truncate" style="max-width: 150px;"><?= $comment['comment'] ?></small>
                                                    </div>
                                                </div>
                                            </button>
                                        </form>
                                        <hr class="dropdown-divider">
                                    <?php endif ?>
                                <?php endforeach ?>
                            <?php endif ?>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?= base_url('admin/img/user.jpg') ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Steev</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="<?= base_url('/') ?>" class="dropdown-item">E-commerce
                            </a>
                            <a href="<?= base_url('deconnexion') ?>" class="dropdown-item">Deconnexion</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->