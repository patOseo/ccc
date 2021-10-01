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
						<?php dynamic_sidebar('footerfirst'); ?>
					</div>
					<div class="col-md-4">
						<?php dynamic_sidebar('footersecond'); ?>
					</div>
					<div class="col-md-4">
						<?php dynamic_sidebar('footerthird'); ?>
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

