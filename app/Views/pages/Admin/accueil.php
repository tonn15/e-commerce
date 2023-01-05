<div class="container p-4">
	<div class="bg-light">
		<!-- header section start -->
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
									<a class="nav-item nav-link" href="<?= base_url() . '/about' ?>"> Apropos</a>
									<a class="nav-item nav-link" href="<?= base_url() . '/client' ?>">Clients</a>
									<a class="nav-item nav-link" href="<?= base_url() . '/contact' ?>">Contacts</a>
								</div>
							</div>
						</nav>
					</div>
					<div class="col-sm-6 col-lg-3">
						<div class="search_main">
							<?php if (isset($_SESSION['pannier'])) : ?>
								<button class="an-pa" onclick="pannier()"><i class="fa-solid fa-cart-shopping"> <span class="text-light bg-danger an-notif"><?= count($_SESSION['pannier']) ?></span></i></button>
							<?php else : ?>
								<button class="submit_bt"><a href="<?= base_url('connexion') ?>"><i class="fa-sharp fa-solid fa-right-to-bracket"></i><span class="doctor"></span>connexion</a></button>
							<?php endif ?>
						</div>
						<div class="search_main" style="display: none;">
							<?php if (isset($_SESSION['email'])) : ?>
								<button class="submit_bt"><a href="<?= base_url('deconnexion') ?>"><i class="fa-sharp fa-solid fa-right-to-bracket"></i><span class="doctor"></span>deconnection</a></button>
							<?php else : ?>
								<button class="submit_bt"><a href="<?= base_url('connexion') ?>"><i class="fa-sharp fa-solid fa-right-to-bracket"></i><span class="doctor"></span>connexion</a></button>
							<?php endif ?>
						</div>
					</div>
					<div class="row pannier" style="z-index: 3;display: none;">
						<div class=" bg-light col-2 pb-4" style="position: absolute;right: 0;top: 50px;box-shadow: 0px 0px 8px 0px;">
							<h3 class='text-center mt-3'>Pannier <i onclick="pannierNone()" class="fa-regular mt-2 fa-circle-xmark btn-supp"></i></h3>
							<hr class="hr">
							<?php if (isset($_SESSION['pannier'])) : ?>
								<?php foreach ($_SESSION['pannier'] as $key => $pannier) : ?>

									<div class="card mb-3" style="max-width: 540px;">
										<div class="row ">
											<div class="col-3">
												<img src="<?= base_url() . '/images/' . $pannier['image'] ?>" class="img-fluid rounded-start" alt="...">
											</div>
											<div class="col-6">
												<div class="">
													<h5 class="mt-2" style="font-size: 9px;"><?= $pannier['titre'] ?></h5>
												</div>
											</div>
											<div class="col-3">
												<a href="<?= base_url('pannier/supprimer/') . '/' . $key ?>" class="text-secondary link"><i class="fa-regular mt-2 fa-circle-xmark"></i></a>
											</div>
										</div>
									</div>
								<?php endforeach ?>
								<a href='<?= base_url('pannier') ?>' class="an-submit_btn btn text-light" onclick="pannier()" style="font-size: 12px;padding: 5px;">Mon pannier</a>
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- header section end -->
		<!-- banner section start -->
		<div class="layout_padding banner_section" style="background-image: url(../images/<?= $imageH ?>);">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-3">
								<form action="<?= base_url() . '/modificationImageHeader/' ?>" method='POST' enctype='multipart/form-data'>
									<?= csrf_field() ?>
									<div class="input-group mb-3">

										<input type="file" name="image" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
										<button class="btn btn-outline-danger" type="submit" id="inputGroupFileAddon03">Modifier</button>
									</div>
								</form>
							</div>
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

		<!-- section PROMOTED start -->
		<div class=" layout_padding promoted_sectipon">
			<div class="container">
				<h1 class="promoted_text"> <span style="border-bottom: 5px solid #234e79;">Nos</span> PRODUITS</h1>
				<div class="images_main">
					<div class="row">
						<?php foreach ($produits as $key => $produit) : ?>
							<?php if ($key == 8) break; ?>
							<div class="col-sm-6 col-md-6 col-lg-3">
								<div class="images"><a href="<?= base_url() . '/produit/' . $produit['id'] ?>"><img src="<?= base_url() . '/images/' . $produit['image'] ?>" style="width: 100%;"></a></div>
								<button class="promoted_bt"><?= $produit['titre'] ?><p class='text-center text-secondary' style='margin:0px'><?= $produit['prix'] ?> Ar</p>
									<p class='text-center text-secondary' style='margin:0px'>10 000 Ar</p>
								</button>

								<button class="mobile_bt mb-4 btn"><a href="#">Acheter</a></button>
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
				<h1 class="popular_taital text-light">Magasins <span style="border-bottom: 5px solid #234e79;">Populaire</span></h1>
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
										<button class="view_bt"><a href="#">Ajouter</a></button>
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
									<h1 class="promoted_text"> <span style="border-bottom: 5px solid #234e79;">Avis</span> des clients</h1>
									<div class="client_img"><img src="<?= base_url('images/client-img.png') ?>" width='350' style='border-radius: 50%;'></div>
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
									<div class="client_img"><img src="<?= base_url('images/client-img-1.jpg') ?>" width='350' style='border-radius: 50%;'></div>
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
									<div class="client_img"><img src="<?= base_url('images/client-img-2.jpg') ?>" width='350' style='border-radius: 50%;'></div>
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
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="input_main">
							<div class="container">
								<form action="<?= base_url() . '/a/ajouter' ?>" method='POST'>
									<?= csrf_field() ?>
									<div class="form-group">
										<input type="text" class="email-bt" placeholder="Nom" name="nom">
									</div>
									<div class="form-group">
										<input type="email" class="email-bt" placeholder="Email" name="email">
									</div>
									<div class="form-group">
										<input type="tel" class="email-bt" placeholder="Tel" name="tel">
									</div>

									<div class="form-group">
										<input type='textarea' class="massage-bt" placeholder="Massage" rows="5" id="comment" name="message">
									</div>

									<div class="form-group mt-3">
										<button type='submit' class="search_bt">Soumettre</button>
									</div>
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
		<!-- footer section start -->

		<div class="layout_padding " style="width: 100%;background-color: #1b1b1b;height: auto;">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="logo"><a href="<?= base_url('') ?>"><img style='width: 92px;' src="<?= base_url('images/E-Commerce.png') ?>" class='img img-fluid '></a>
							<h1 class="a-logo ">E-commerce</h1>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<h1 class="quick_text">Liens</h1>
						<a class="chevron_arrow" href="<?= base_url('contact') ?>"><i class="fa-solid fa-chevron-right" style='color: #234e79;'></i><span class="padding-left">Rejoignez-nous</span></a>
						<a class="chevron_arrow" href="<?= base_url('boutique') ?>"><i class="fa-solid fa-chevron-right" style='color: #234e79;'></i><span class="padding-left">Boutique</span></a>
						<a class="chevron_arrow" href="<?= base_url('about') ?>"><i class="fa-solid fa-chevron-right" style='color: #234e79;'></i><span class="padding-left">A-propos</span></a>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<h1 class="subscribe_text">Sponsore</h1>
						<a href="https://tonn15.github.io/antonio_cv.com/"><img src="<?= base_url('images/avitech.jpg') ?>" alt="" class="img-fluid" width="80"></a>

					</div>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<h1 class="quick_text">Contact</h1>
						<div class="map_flag"><i class="fa-solid fa-location-dot"></i><span class="padding-left">Cité de la Chapelle</span></div>
						<div class="dolor_text"><i class="fa-solid fa-envelope"></i><span class="padding-left">steev@gmail.com</span></div>
						<div class="dolor_text"><i class="fa-solid fa-phone"></i><span class="padding-left">+261 34 21 208 03</span></div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer section end -->
		<!-- copyright section start -->
		<div class="copyright">
			<p class="copyright_text">2022 Tous droits réservés. Conception par <a href="#"> Steev</p>
		</div>
		<!-- copyright section end -->
		<!-- Javascript files-->
		<script src="<?= base_url() . '/js/jquery.min.js' ?>"></script>
		<script src="<?= base_url() . '/js/popper.min.js' ?>"></script>
		<script src="<?= base_url() . '/js/bootstrap.bundle.min.js' ?>"></script>
		<script src="<?= base_url() . '/js/jquery-3.0.0.min.js' ?>"></script>
		<script src="<?= base_url() . '/js/plugin.js' ?>"></script>
		<!-- sidebar -->
		<script src="<?= base_url() . '/js/jquery.mCustomScrollbar.concat.min.js' ?>"></script>
		<script src="<?= base_url() . '/js/custom.js' ?>"></script>
		<!-- javascript -->
		<script src="<?= base_url() . '/js/owl.carousel.js' ?>"></script>
		<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
		<script>
			$(document).ready(function() {
				$(".fancybox").fancybox({
					openEffect: "none",
					closeEffect: "none"
				});

				$(".zoom").hover(function() {

					$(this).addClass('transition');
				}, function() {

					$(this).removeClass('transition');
				});
			});

			function pannier() {
				$(".pannier").show();
			}

			function pannierNone() {
				$(".pannier").hide();
			}
		</script>
		<?= ($title == 'pannier') ? ' <script src="https://js.stripe.com/v3/"></script>' : '' ?>
	</div>
</div>