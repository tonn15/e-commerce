
	<!-- section PROMOTED start -->
	<div class=" layout_padding promoted_sectipon">
		<div class="container">
			<h1 class="promoted_text">PROMOTED <span style="border-bottom: 5px solid #4bc714;">ADS</span></h1>
			<div class="images_main">
				<div class="row">
				<?php foreach ($produits as $produit):?>
					<div class="col-sm-6 col-md-6 col-lg-3">
						<div class="images"><img src="<?=base_url().'/images/'.$produit['image']?>" style="width: 100%;"></div>
						<button class="promoted_bt"><?= $produit['titre']?><p class='text-center text-secondary' style='margin:0px'><?= $produit['prix']?> Ar</p>
						<p class='text-center text-secondary' style='margin:0px'>10 000 Ar</p></button>
						
						<button class="mobile_bt mb-4"><a href="#">Acheter</a></button>
					</div>
					<?php endforeach?>
				</div>
			</div>
		</div>
	</div>
	<!-- section PROMOTED end -->