<!-- banner section start -->
<div class="layout_padding banner_section" style="background-image: url(../images/<?= $imageH ?>);">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<img src="<?= base_url('images/noely.png') ?>" alt="noely" class='img-fluid' width='83px' style='left: 27%;position: relative;'>
				<h1 class="banner_taital"><?= $titreHeader["titre"] ?></h1>
				<p class="browse_text" style='margin-bottom :200px'><?= $titreHeader["content"] ?></p>
			</div>
		</div>
	</div>
</div>
<!-- banner section end -->
<!-- section PROMOTED start -->
<div class=" layout_padding promoted_sectipon">
	<div class="container">
		<h1 class="promoted_text"><span style="border-bottom: 5px solid #234e79;">Nos</span> PRODUITS</h1>
		<div class="images_main">
			<div class="row">
				<?php foreach ($produits as $key => $produit) : ?>
					<?php if ($key >= 8) break; ?>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="images"><a href="<?= base_url() . '/produit/' . $produit['id'] ?>"> <img src="<?= base_url() . '/images/' . $produit['image'] ?>" style="width: 100%;"></a></div>
						<button class="promoted_bt" style='box-shadow: 0px 0px 8px 0px;margin: auto 12px;'>
							<?= $produit['titre'] ?>
							<p class='text-center text-secondary' style='margin:0px;text-decoration: line-through;margin: 0px;text-decoration: line-through;position: absolute;top: 21px;left: 18px;color: red !important;'><?= ($produit['prix_pro'] == 0) ? '' : $produit['prix'] . ' $' ?></p>
							<p class='text-center text-secondary' style='margin:0px;color: #3ab93a !important;'> <?= ($produit['prix_pro'] <= 0) ? $produit['prix'] . ' $' : $produit['prix_pro'] . ' $' ?></p>

						</button>
						<button class="mobile_bt mb-4 btn text-light"><a href="<?= base_url() . '/pannier/' . $produit['id'] ?>">Ajouter</a></button>
					</div>
				<?php endforeach ?>
			</div>
		</div>
		<a href="<?= base_url('boutique') ?>" class="btn btn-outline-info mt-5 form-control">Affiche plus</a>
	</div>

</div>
<!-- section PROMOTED end -->
<!-- section POPULAR STORES start -->
<div class="layout_padding popular_section">
	<div class="container">
		<h1 class="popular_taital">MAGASINS <span style="border-bottom: 5px solid #234e79;">POPULAIRES</span></h1>
		<div id="main_slider" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<?php foreach ($produits as $key => $produit) : ?>

					<?php if ($produit['popular'] == 1) : ?>
						<?php
						$tabs[] = $key;
						?>
						<div class="carousel-item <?= ($key == $tabs[0]) ? 'active' : ' '; ?>">
							<div class="popular_section_2">
								<div class="slider_img img img-fluid"><a href="<?= base_url() . '/produit/' . $produit['id'] ?>"> <img src="<?= base_url() . '/images/' . $produit['image'] ?>" style="width: 400px;border-radius:20px"></a></div>
								<h2 class="electronic_text"><?= $produit['titre'] ?></h2>
								<p class="contrary_text"><?= $produit['detail'] ?></p>
								<button class="view_bt"><a href="<?= base_url() . '/pannier/' . $produit['id'] ?>">Ajouter</a></button>
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
			<div class="col-sm-12">
				<h1 class="about_taital"><?= $about["titre"] ?></h1>
				<p class="lorem_text"><?= $about["content"] ?></p>
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
							<h1 class="promoted_text"><span style="border-bottom: 5px solid #234e79;">AVIS</span> DES CLIENTS</h1>
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

							<div class="form-group">
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