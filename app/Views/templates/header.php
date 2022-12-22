<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	<title>E-commerce | <?= $title ?></title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() . '/css/bootstrap.min.css' ?>">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="<?= base_url() . '/css/style.css' ?>">
	<!-- Responsive-->
	<link rel="stylesheet" href="<?= base_url() . '/css/responsive.css' ?>">
	<!-- fevicon -->
	<link rel="icon" href="images/fevicon.png" type="<?= base_url() . '/image/gif' ?>" />
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="<?= base_url() . '/css/jquery.mCustomScrollbar.min.css' ?>">
	<!-- Tweaks for older IEs-->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<!-- owl stylesheets -->
	<link rel="stylesheet" href="<?= base_url() . '/css/owl.carousel.min.css' ?>">
	<link rel="stylesheet" href="<?= base_url() . '/css/owl.theme.default.min.css' ?>">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>

<body>
	<!-- user section start -->
	<?php if (isset($_SESSION['email'])) : ?>
		<a href="#" class="an-user"><i class=" fa-solid fa-user fa-1x"></i> <?=$_SESSION['email']?></a>
	<?php else:?>

	<?php endif?>
	<!-- user section end -->
	<!-- header section start -->
	<div class="header_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-3">
					<div class="logo"><a href="<?= base_url() . '/' ?>"><img style='width: 92px;' src="<?= base_url('images/E-Commerce.png') ?>" class='img img-fluid '></a>
						<h1 class="a-logo ">E-commerce</h1>
					</div>
				</div>
				<div class="col-sm-6">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
							<div class="navbar-nav">
								<a class="nav-item nav-link" href="<?= base_url() . '/accueil' ?>">Accueil</a>
								<a class="nav-item nav-link" href="<?= base_url() . '/boutique' ?>">Boutique</a>
								<a class="nav-item nav-link" href="<?= base_url() . '/about' ?>">A propos</a>
								<a class="nav-item nav-link" href="<?= base_url() . '/client' ?>">Clients</a>
								<a class="nav-item nav-link" href="<?= base_url() . '/contact' ?>">Contacts</a>
							</div>
						</div>
					</nav>
				</div>
				<div class="col-sm-6 col-lg-3">
					<div class="search_main">
						<?php if (isset($_SESSION['email'])) : ?>
							<button class="submit_bt"><a href="<?= base_url('deconnexion') ?>"><i class="fa-sharp fa-solid fa-right-to-bracket"></i><span class="doctor"></span>deconnection</a></button>
						<?php else : ?>
							<button class="submit_bt"><a href="<?= base_url('connexion') ?>"><i class="fa-sharp fa-solid fa-right-to-bracket"></i><span class="doctor"></span>connexion</a></button>
						<?php endif ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- header section end -->