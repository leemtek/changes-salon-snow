<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Changes_Salon
 */

?>

<footer>
	<div class="container">
		<div class="row">
			<!-- main left side -->
			<div class="col-md-4">
				<div class="row">
					<div class="col-md-3">
						<p>
							<strong>Address</strong>
						</p>
					</div>
					<div class="col-md-9">
						<p>Changes Salon &amp; Day Spa
							<a class="text-white" href="https://www.google.com/maps/place/Changes+Salon+%26+Day+Spa,+Inc./@37.9004142,-122.062696,17z/data=!3m1!4b1!4m2!3m1!1s0x808561c004540a81:0x6939f68cdf804d95">
								<br /> 1475 North Broadway
								<br /> Walnut Creek, CA 94596
								<br />
								<hr />
							</a>
						</p>
					</div>
				</div>

				<!-- mail -->
				<div class="row">
					<div class="col-md-3">
						<p>
							<strong>Mail</strong>
						</p>
					</div>
					<div class="col-md-9">
						<p><a class="text-white" href="mailto:info@changessalon.com">info@changessalon.com</a>
							<br />
							<hr />
						</p>
					</div>
				</div>

				<!-- phone -->
				<div class="row">
					<div class="col-md-3">
						<p>
							<strong>Phone</strong>
						</p>
					</div>
					<div class="col-md-9">
						<p><a class="text-white" href="tel:19259471814">925-947-1814</a></p>
					</div>
				</div>
			</div><!-- /col-md-4 -->
			<div class="col-md-4">
				<p>
					<strong>Hours</strong>
					<br /> Sunday 9:00 am - 5:30 pm
					<br /> Monday 9:00 - 3:00 pm
					<br /> Tuesday - Thursday 9:00 am - 9:30 pm
					<br /> Friday and Saturday 8:00 am - 6:30 pm
				</p>
			</div><!-- /col-md-4 -->
			<div class="col-md-4">
				<form name="ccoptin" action="https://ccprod.roving.com/roving/d.jsp" target="_blank" method="post">
					<div><a class="btn btn-default button-black" href="https://www.demandforced3.com/www/etile_scheduler_popup.jsp?d3cp_exid=changessalon&d3cp_source=My%20Website" target="_blank">Schedule an Appointment</a></div>
					<div class="space-top-10"><a class="btn btn-default button-black" href="">Join Our Mailing List</a></div>
					<div class="space-top-10">
						<input type="email" class="form-control" name="ea" />
						<input type=hidden name="m" value="1011215259327">
						<input type=hidden name="p" value="oi">
					</div>
					<div class="space-top-10"><input class="btn btn-danger" type="submit" name="Submit" value="Go"></div>
				</form>
			</div><!-- /col-md-4 -->
		</div><!-- /row -->
	</div>
</footer>

<section id="subfooter">
	<div class="container">
		<div class="row">
			<address class="col-md-4">
				<p>&copy; <?php echo date("Y"); ?> Changes Salon &amp; Day Spa All Rights Reserved</p>
			</address>
			<div class="col-md-4">
				<a href="http://50.255.49.145/login.asp">
					<p>Employee Login</p>
				</a>
			</div>
			<div class="col-md-4">
				<p>Web Development by <a href="http://www.duaneleem.com" target="_blank">Duane Leem</a></p>
			</div>
		</div>
	</div>
</section>

<!-- ===============================================
    Promotion
=============================================== -->
<?php $promotionPage = 1118; ?>
<?php if (get_field("isActivatedPromotion", $promotionPage) === true) { ?>
	<style>
		/* Makes room for Promo */
		body { padding-bottom: 54px; }
		
		/* Properties of red callout on footer. */
		#page-footer-wrapper {
			position: fixed !important;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: #A20505; 
			border-color: #780505;
			z-index: 100;
		} /* #page-footer-wrapper */
	</style>

	<div id="page-footer-wrapper">
		<div class="row" style="padding: 10px;">
			<div class="col-lg-12 text-white text-center">
				<?php echo get_field("verbiage", $promotionPage) ?> <a class="btn btn-primary" href="<?php echo get_field("landing_page_url", $promotionPage) ?>" onclick="trackOutboundLink('Promotions', '<?php echo get_field("verbiage", $promotionPage) ?>'); return false;"><?php echo get_field("button_label", $promotionPage) ?></a>
			</div><!-- /col -->
		</div><!-- /row -->
	</div><!-- /#page-footer-wrapper -->
<?php } ?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/bower_components/jQuery/dist/jquery.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://d1xrp9zhb3ks3c.cloudfront.net/web/changessalon/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- LeemTek JS -->
<script src="<?php bloginfo("template_directory"); ?>/assets/js/leemtek.js"></script>

<?php wp_footer(); ?>

</body>
</html>
