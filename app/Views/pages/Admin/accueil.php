<!-- header section start -->
<div class="header_section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-3">
				<div class="logo"><a href="accueil"><img style='width: 92px;' src="<?= base_url('images/E-Commerce.png') ?>" class='img img-fluid '></a>
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
							<a class="nav-item nav-link" href="accueil">Accueil</a>
							<a class="nav-item nav-link" href="boutique">Boutique</a>
							<a class="nav-item nav-link" href="about">Apropos</a>
							<a class="nav-item nav-link" href="client">Clients</a>
							<a class="nav-item nav-link" href="contact">Contacts</a>
						</div>
					</div>
				</nav>
			</div>
			<div class="col-sm-6 col-lg-3">
				<div class="search_main">
					<button class="submit_bt"><a href="#"><span class="doctor"><img src="<?= base_url('images/doctor-icon.png') ?>"></span>Submit ads</a></button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- header section end -->
<!-- banner section start -->
<div class="layout_padding banner_section" style="background-image: url(../images/banner.png);">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div>
					<form action="<?= base_url() . '/modificationImageHeader/' ?>" method='POST' enctype='multipart/form-data'>
						<?= csrf_field() ?>
						<div class='form-group'>
							<input type="file" class='form tr' name='image'>
						</div>
					</form>
				</div>
				<form action="<?= base_url() . '/modificationTitreHeader/' ?>" method='POST'>
					<?= csrf_field() ?>
					<div class='form-group'>
						<input type="text" class='form banner_taital text-light tr' name='txt1' value="<?= $titreHeader["titre"] ?>">
					</div>
				</form>
				<form action="<?= base_url() . '/modificationTitreHeader/' ?>" method='POST'>
					<?= csrf_field() ?>
					<div class='form-group'>
						<input type="textarea" class='form browse_text text-light tr' name='content1' value="<?= $titreHeader["content"] ?>">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- banner section end -->
<!-- search box start -->
<div class="container">
	<div class="search_box">
		<div class="row">
			<div class="col-sm-9">
				<div class="form-group">
					<input type="text" class="email_boton" placeholder="Search for" name="Email">
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group">
					<button class="search_bt">Search</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- search box end -->
<!-- section PROMOTED start -->
<div class=" layout_padding promoted_sectipon">
	<div class="container">
		<h1 class="promoted_text">PROMOTED <span style="border-bottom: 5px solid #234e79;">ADS</span></h1>
		<div class="images_main">
			<div class="row">
				<?php foreach ($produits as $key => $produit) : ?>
					<?php if ($key == 8) break; ?>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="images"><a href="<?= base_url() . '/produit/' . $produit['id'] ?>"><?= $produit['titre'] ?> <img src="<?= base_url() . '/images/' . $produit['image'] ?>" style="width: 100%;"></a></div>
						<button class="promoted_bt"><?= $produit['titre'] ?><p class='text-center text-secondary' style='margin:0px'><?= $produit['prix'] ?> Ar</p>
							<p class='text-center text-secondary' style='margin:0px'>10 000 Ar</p>
						</button>

						<button class="mobile_bt mb-4"><a href="#">Acheter</a></button>
					</div>

				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>
<!-- section PROMOTED end -->
<!-- section POPULAR STORES start -->
<div class="layout_padding popular_section">
	<div class="container">
		<h1 class="popular_taital">POPULAR <span style="border-bottom: 5px solid #234e79;">STORES</span></h1>
		<div id="main_slider" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<?php foreach ($produits as $key => $produit) : ?>

					<?php if ($produit['popular'] == 1) : ?>
						<?php
						$tabs[] = $key;
						?>
						<div class="carousel-item <?= ($key == $tabs[0]) ? 'active' : ' '; ?>">
							<div class="popular_section_2">
								<div class="slider_img img img-fluid"><img src="<?= base_url() . '/images/' . $produit['image'] ?>" style="width: 400px;border-radius:20px"></div>
								<h2 class="electronic_text"><?= $produit['titre'] ?></h2>
								<p class="contrary_text"><?= $produit['detail'] ?></p>
								<button class="view_bt"><a href="#">VIEW ADS</a></button>
							</div>
						</div>
					<?php endif ?>
				<?php endforeach ?>
			</div>
			<a class="carousel-control-prev" href="#main_slider" role="button" data-slide="next">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#main_slider" role="button" data-slide="prev">
				<i class="fa fa-angle-right"></i>
			</a>

		</div>
	</div>
</div>
<!-- section POPULAR STORES end -->
<!-- about section start -->
<div class="layout_padding about_section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<form action="<?= base_url() . '/modificationTitreHeader/' ?>" method='POST'>
					<?= csrf_field() ?>
					<div class='form-group'>
						<input type="text" class='form about_taital text-light tr' name='txt2' value="<?= $about["titre"] ?>">
					</div>
				</form>
				<form action="<?= base_url() . '/modificationTitreHeader/' ?>" method='POST'>
					<?= csrf_field() ?>
					<div class='form-group'>
						<input type="textarea" class='form lorem_text text-light tr' name='content2' value="<?= $about["content"] ?>">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- about section end -->
<!-- client section start -->
<div class="layout_padding clients_section">
	<div class="container">
		<div id="client_slide" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#client_slide" data-slide-to="0" class="active"></li>
				<li data-target="#client_slide" data-slide-to="1"></li>
				<li data-target="#client_slide" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="promoted_text">CLIENTS <span style="border-bottom: 5px solid #234e79;">REVIEW</span></h1>
							<div class="client_img"><img src="<?= base_url('images/client-img.png')?>" width='350' style='border-radius: 50%;'></div>
							<h1 class="client_text">STEEV DANY</h1>
							<p class="adiser_text">(adiser)</p>
							<p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="promoted_text">CLIENTS <span style="border-bottom: 5px solid #234e79;">REVIEW</span></h1>
							<div class="client_img"><img src="<?= base_url('images/client-img-1.png')?>" width='350' style='border-radius: 50%;'></div>
							<h1 class="client_text">BAKO</h1>
							<p class="adiser_text">(adiser)</p>
							<p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to</p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="promoted_text">CLIENTS <span style="border-bottom: 5px solid #234e79;">REVIEW</span></h1>
							<div class="client_img"><img src="<?= base_url('images/client-img-2.png')?>" width='350' style='border-radius: 50%;'></div>
							<h1 class="client_text">ERIC STEWARD</h1>
							<p class="adiser_text">(adiser)</p>
							<p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- client section end -->
<!-- contact section start -->
<div class="contact_section layout_padding">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6">
				<div class="input_main">
					<div class="container">
						<form action="/action_page.php">
							<div class="form-group">
								<input type="text" class="email-bt" placeholder="Your Name" name="Name">
							</div>
							<div class="form-group">
								<input type="text" class="email-bt" placeholder="Email" name="Email">
							</div>
							<div class="form-group">
								<input type="text" class="email-bt" placeholder="Phone" name="Email">
							</div>
							<form action="/action_page.php">
								<div class="form-group">
									<textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="text"></textarea>
								</div>
							</form>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="map-responsive">
					<iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="450" frameborder="0" style="border:0; width: 100%;" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- contact section end -->
<!-- footer section start -->
<div class="layout_padding footer_section">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-md-6 col-lg-3">
				<div class="logo"><a href="accueil"><img style='width: 92px;' src="<?= base_url('images/E-Commerce.png') ?>" class='img img-fluid '></a>
					<h1 class="a-logo ">E-commerce</h1>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-3">
				<h1 class="quick_text">Quick links</h1>
				<div class="chevron_arrow"><img src="<?= base_url('images/chevron-arrow.png') ?>"><span class="padding-left">Join Us</span></div>
				<div class="chevron_arrow"><img src="<?= base_url('images/chevron-arrow.png') ?>"><span class="padding-left">Maintenance</span></div>
				<div class="chevron_arrow"><img src="<?= base_url('images/chevron-arrow.png') ?>"><span class="padding-left">Language Packs</span></div>
				<div class="chevron_arrow"><img src="<?= base_url('images/chevron-arrow.png') ?>"><span class="padding-left">LearnPress</span></div>
				<div class="chevron_arrow"><img src="<?= base_url('images/chevron-arrow.png') ?>"><span class="padding-left">Release Status</span></div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-3">
				<h1 class="subscribe_text">Subcribe email</h1>
				<input type="text" class="email_text" placeholder="Your Email" name="Name">
				<button class="submit_text">Submit</button>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-3">
				<h1 class="quick_text">Contact Us</h1>
				<div class="map_flag"><img src="<?= base_url('images/map-flag.png') ?>"><span class="padding-left">London 145 United Kingdom</span></div>
				<div class="dolor_text"><img src="<?= base_url('images/email-icon.png') ?>"><span class="padding-left">adsiter@gmail.com</span></div>
				<div class="dolor_text"><img src="<?= base_url('images/phone-icon.png') ?>"><span class="padding-left">+12586954775</span></div>
			</div>
		</div>
	</div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright">
	<p class="copyright_text">2019 All Rights Reserved. Design By <a href="https://html.design"> Free Html Templates</p>
</div>