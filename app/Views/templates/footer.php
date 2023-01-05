	<!-- footer section start -->
	<div class="layout_padding footer_section">
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
	</body>

	</html>