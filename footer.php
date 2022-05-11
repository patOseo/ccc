<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<?php if(!is_singular('landing_pages')): ?>
<footer class="site-footer" id="colophon">

	<div class="wrapper" id="wrapper-footer">

		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div id="text-7" class="footer-widget"><h3 class="widget-title">Areas Served</h3>			
							<div class="textwidget">
								<div class="row">
									<div class="col-lg-6">
										Ajax<br>
										Blackstock<br>
										Bowmanville<br>
										Brooklin<br>
										Cavan<br>
										Cherrywood<br>
										Claremont<br>
										Courtice<br>
										Hampton
									</div>
									<div class="col-lg-6">
										Newcastle<br>
										Newtonville<br>
										Orono<br>
										Oshawa<br>
										Pickering<br>
										Port Perry<br>
										Uxbridge<br>
										Whitby
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div id="text-6" class="footer-widget"><h3 class="widget-title">contact details</h3>			
							<div class="textwidget">
								<ul class="contact-dtl">
									<li><i class="fa fa-phone"></i><span class="txt-content">Phone Number: <a href="tel:905-619-2153">905-619-2153</a></span></li>
									<li style="margin-left: 20px;">Toll Free: <a href="tel:888-766-0128">1-888-766-0128</a></li>
									<li><i class="fa fa-fax"></i><span class="txt-content">Fax: 905-263-2116</span></li>
									<li><i class="fa fa-envelope-o"></i><span class="txt-content">Email: <a href="mailto:sales@canadiancarpetcleaning.com?subject=Inquiry on canadiancarpetcleaning.com">sales@canadiancarpetcleaning.com</a></span></li>
									</ul></div>
											</div><!-- .footer-widget --><div id="text-8" class="footer-widget"><h3 class="widget-title">find us on social media</h3>			<div class="textwidget"><ul class="social-sq">
									<li><a href="https://www.facebook.com/CanadianCarpetCleaning" target="_blank" rel="noopener"><span class="sr-only">Canadian Carpet Cleaning on Facebook</span><i class="fa fa-facebook"></i></a></li><li><a href="https://twitter.com/wecleanforu" target="_blank" rel="noopener"><span class="sr-only">Canadian Carpet Cleaning on Twitter</span><i class="fa fa-twitter"></i></a></li>
									<li><a href="https://www.linkedin.com/company/canadian-carpet-cleaning-and-janitorial-services" target="_blank" rel="noopener"><span class="sr-only">Canadian Carpet Cleaning on LinkedIn</span><i class="fa fa-linkedin"></i></a></li>
									</ul></div>
											</div><!-- .footer-widget --><div id="text-9" class="footer-widget"><h3 class="widget-title">WE ACCEPT</h3>			<div class="textwidget"><ul class="payment">
									<li><i class="fa fa-cc-visa"></i></li>
									<li><i class="fa fa-cc-mastercard"></i></li>
									<li><i class="fa fa-money"></i></li>
								</ul>
							</div>
						</div><!-- .footer-widget -->
					</div>
					<div class="col-md-4">
						<div id="text-13" class="footer-widget"><h3 class="widget-title">our locations</h3>			
							<div class="textwidget"><ul class="contact-dtl">
							<li><i class="fa fa-map-marker"></i><span class="txt-content"><a href="/contact-us/bowmanville-location/">Bowmanville Carpet Cleaning</a><br>
							<span class="footer-loc">Bowmanville, ON</span><br>
							<span class="footer-loc">2721 Regional Road 20, L1C 3K6</span>
							</span></li>
							<li><i class="fa fa-map-marker"></i><span class="txt-content"><a href="/contact-us/oshawa-location/">Oshawa Carpet Cleaning</a><br>
							<span class="footer-loc">Oshawa, ON</span><br>
							<span class="footer-loc">333 Trafalgar Ave, L1H 3V2</span><br>
							</span></li>
							<li><i class="fa fa-map-marker"></i><span class="txt-content"><a href="/contact-us/scarborough-location/">Scarborough Carpet Cleaning</a><br>
							<span class="footer-loc">Scarborough, ON</span><br>
							<span class="footer-loc">245 Manse Road, L1C 3K6</span><br>
							</span></li>
							<li><i class="fa fa-map-marker"></i><span class="txt-content"><a href="/contact-us/whitby-location/">Whitby Carpet Cleaning</a><br>
							<span class="footer-loc">Whitby, ON</span><br>
							<span class="footer-loc">6 Canadian Oaks Drive, L1N 6W8</span><br>
							</span></li>
							</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php if(have_rows('affiliations', 'option')): ?>
				<div class="container">
					<div class="row">
						<?php while(have_rows('affiliations', 'option')): the_row(); $logo = get_sub_field('logo'); $link = get_sub_field('affiliation_link'); ?>
							<div class="col-6 col-md">
								<?php if($link): ?><a href="<?= $link; ?>" target="_blank"><?php endif; echo wp_get_attachment_image($logo, 'full'); if($link): echo "</a>"; endif; ?>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>

		<div class="copyright-section">
	
			<div class="<?php echo esc_attr( $container ); ?>">
		
				<div class="row">
		
					<div class="col-md-12">
		
							<div class="site-info">
		
								© <?php echo date('Y'); ?> Canadian Carpet Cleaning | All Rights Reserved
		
							</div><!-- .site-info -->
		
					</div><!--col end -->
		
				</div><!-- row end -->
		
			</div><!-- container end -->
		</div>
	
	</div><!-- wrapper end -->

</footer><!-- #colophon -->
<?php endif; ?>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

