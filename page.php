<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
$headerimg = get_field('header_background_image');
$default_bg = get_field('default_header_background_image', 'option');
if($headerimg) { 
	$bgimg = $headerimg; 
}
else {
	$bgimg = $default_bg;
}
?>
<style>
.page-header:before {background: linear-gradient(rgba(0,0,0,0.58),rgba(0,0,0,0.58)), url('<?php echo $bgimg; ?>') no-repeat center center;background-color:white;background-size:cover;}
</style>
<div class="page-header">
	<h1><?php the_title(); ?></h1>
	<?php
	if ( function_exists('yoast_breadcrumb') ) {
	  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
	}
	?>
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<?php if(get_field('select_sub_menu')): $submenu = get_field('select_sub_menu'); ?>
	<div class="sub-menu-section">
		<button class="btn btn-primary sub-menu-toggle collapsed" data-toggle="collapse" data-target="#cccSubMenu" href="#cccSubMenu" role="button" aria-expanded="false" aria-controls="cccSubMenu">Sub Menu <i class="fa fa-chevron-down"></i></button>
		<div id="cccSubMenu" class="sub-menu-collapse collapse"><?php wp_nav_menu(array('menu' => $submenu)); ?></div>
	</div>
	<?php endif; ?>

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/content', 'page' );
					}
					?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

<?php if(get_field('json_schema')): ?>
	<?php the_field('json_schema'); ?>
<?php endif; ?>


<?php
get_footer();
