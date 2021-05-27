<?php
/**
 * The template for displaying all single posts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) {
	the_post();
	$featuredimg = get_the_post_thumbnail_url();
	$posttitle = get_the_title();
	$date = get_the_date('F j, Y');
}

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<?php
				while ( have_posts() ) {
					the_post();
					get_template_part( 'loop-templates/content', 'single' );
				}
				?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<footer class="site-footer" id="colophon">

	<div class="wrapper" id="wrapper-footer">

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

<?php
get_footer();
