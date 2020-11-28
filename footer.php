<!-- Start Footer Area -->
<footer class="footer" style="background-color : #22021">
	<!-- Footer Top -->
	<div class="footer-top section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
					<!-- Single Widget -->
					<div class="single-footer about">
						<div class="logo">
							<a href="<?= base_url('/') ?>"><img src="<?= base_url('/img/logo/' . $identitas['logo'] . '') ?>" alt="#"></a>
						</div>
						<p class="text"><?= $identitas['deskripsitoko'] ?></p>
						<p class="call"><span><a href="tel:<?= $identitas['nomortoko'] ?>"><?= $identitas['nomortoko'] ?></a></span></p>
					</div>
					<!-- End Single Widget -->
				</div>
				<div class="col-lg-6 col-md-6 col-12">
					<!-- Single Widget -->
					<div class="single-footer social">
						<h4>SIlahkan Hubungi Kami</h4>
						<!-- Single Widget -->
						<div class="contact">
							<ul>
								<li><?= $identitas['alamattoko'] ?></li>
								<li><?= $identitas['emailtoko'] ?></li>
								<li><?= $identitas['nomortoko'] ?></li>
								<li><?= $identitas['keterangantoko'] ?></li>
							</ul>
						</div>
						<!-- End Single Widget -->
						<ul>
							<!--<li><a href="#"><i class="ti-facebook"></i></a></li>-->
							<!--<li><a href="#"><i class="ti-twitter"></i></a></li>-->
							<!--<li><a href="#"><i class="ti-flickr"></i></a></li>-->
							<!--<li><a href="#"><i class="ti-instagram"></i></a></li>-->
						</ul>
					</div>
					<!-- End Single Widget -->
				</div>
			</div>
		</div>
	</div>
	<!-- End Footer Top -->
	<div class="copyright">
		<div class="container">
			<div class="inner">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="left">
							<!--<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a> - All Rights Reserved.</p>-->
							<p>Copyright © 2020 <a href="http://komputerkit.com/" target="_blank">
							bestfood.com</a> - <a href="http://www.wpthemesgrid.com" target="_blank">wkwkwk</a>.</p>
						</div>
					</div>
					<div class="col-lg-6 col-12">
						<div class="right">
							<!--<img src="./template/images/payments.png" alt="#">-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- /End Footer Area -->

<!-- Jquery -->
<script src="<?= base_url('/template/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('/template/js/jquery-migrate-3.0.0.js') ?>"></script>
<script src="<?= base_url('/template/js/jquery-ui.min.js') ?>"></script>
<!-- Popper JS -->
<script src="<?= base_url('/template/js/popper.min.js') ?>"></script>
<!-- Bootstrap JS -->
<script src="<?= base_url('/template/js/bootstrap.min.js') ?>"></script>
<!-- Color JS -->
<script src="<?= base_url('/template/js/colors.js') ?>"></script>
<!-- Slicknav JS -->
<script src="<?= base_url('/template/js/slicknav.min.js') ?>"></script>
<!-- Owl Carousel JS -->
<script src="<?= base_url('/template/js/owl-carousel.js') ?>"></script>
<!-- Magnific Popup JS -->
<script src="<?= base_url('/template/js/magnific-popup.js') ?>"></script>
<!-- Fancybox JS -->
<script src="<?= base_url('/template/js/facnybox.min.js') ?>"></script>
<!-- Waypoints JS -->
<script src="<?= base_url('/template/js/waypoints.min.js') ?>"></script>
<!-- Countdown JS -->
<script src="<?= base_url('/template/js/finalcountdown.min.js') ?>"></script>
<!-- Nice Select JS -->
<script src="<?= base_url('/template/js/nicesellect.js') ?>"></script>
<!-- Flex Slider JS -->
<script src="<?= base_url('/template/js/flex-slider.js') ?>"></script>
<!-- ScrollUp JS -->
<script src="<?= base_url('/template/js/scrollup.js') ?>"></script>
<!-- Onepage Nav JS -->
<script src="<?= base_url('/template/js/onepage-nav.min.js') ?>"></script>
<!-- Easing JS -->
<script src="<?= base_url('/template/js/easing.js') ?>"></script>
<!-- Active JS -->
<script src="<?= base_url('/template/js/active.js') ?>"></script>
</body>

</html>
<?= $this->renderSection('footer') ?>