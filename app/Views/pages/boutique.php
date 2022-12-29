<!-- section PROMOTED start -->
<div class=" layout_padding promoted_sectipon" style='top: -33px;position: relative;'>
	<div class="container">
		<h1 class="promoted_text">TOUS <span style="border-bottom: 5px solid #234e79;">LES PRODUITS</span></h1>
		<div class="images_main">
			<div class="row">
				<?php foreach ($produits as $produit) : ?>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="images"><a href="<?= base_url() . '/produit/' . $produit['id'] ?>"> <img src="<?= base_url() . '/images/' . $produit['image'] ?>" style="width: 100%;"></a></div>
						<button class="promoted_bt" style='box-shadow: 0px 0px 8px 0px;margin: auto 12px;'>
							<?= $produit['titre'] ?>
							<p class='text-center text-secondary' style='margin:0px;text-decoration: line-through;margin: 0px;text-decoration: line-through;position: absolute;top: 21px;left: 18px;color: red !important;'><?= ($produit['prix_pro'] == 0) ? '' : $produit['prix'] . ' Eur' ?></p>
							<p class='text-center text-secondary' style='margin:0px;color: #3ab93a !important;'> <?= ($produit['prix_pro'] <= 0) ? $produit['prix'] . ' Eur' : $produit['prix_pro'] . ' Eur' ?></p>

						</button>
						<button class="mobile_bt mb-4 btn text-center"><a href="<?= base_url() . '/pannier/' . $produit['id'] . '/#' ?>">Ajouter</a></button>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>
<!-- section PROMOTED end -->