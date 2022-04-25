<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script async>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TF3L3K');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-51669576-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-51669576-1');
  gtag('config', 'AW-8008781961');
</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<?php wp_head(); ?>
<!-- Facebook Pixel Code -->
<script async>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '154806398256826');
fbq('track', "PageView");</script>

<!-- End Facebook Pixel Code -->
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TF3L3K"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Facebook Pixel Code Noscript -->
<noscript><img height="1" width="1" alt="facebook-pixel" style="display:none"
src="https://www.facebook.com/tr?id=154806398256826&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

<?php if(!is_singular('landing_pages')): ?>
	<!-- Top Bar -->
	<div class="top-bar">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-sm-9">
					<div class="contact-item"><i class="fa fa-phone d-none d-md-inline"></i><a href="tel:<?php the_field('phone_number', 'option'); ?>"><?php the_field('phone_number', 'option'); ?></a></div> 
					<span class="divide">|</span> 
					<div class="contact-item"><i class="fa fa-envelope d-none d-md-inline"></i> <a href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a></div>
				</div>
				<div class="col-3 d-none d-sm-block">
					<?php if(have_rows('social_media', 'option')): ?>
						<div class="top-social-links">
							<?php while(have_rows('social_media', 'option')): the_row(); ?>
								<a href="<?php the_sub_field('link', 'option'); ?>" target="_blank" rel="noopener,noreferrer"><span class="sr-only">Canadian Carpet Cleaning on <?php the_sub_field('name'); ?></span><i class="fa <?php the_sub_field('icon'); ?>"></i></a>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<?php if(get_field('enable_alert_bar', 'option') == TRUE): ?>
		<!-- Alert Bar -->
		<div class="alert-bar">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<?php the_field('alert_bar', 'option'); ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav id="main-nav" class="navbar navbar-light navbar-expand-xl" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

			<div class="container-fluid">

					<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" itemprop="url"><img src="/wp-content/uploads/2015/11/logo-transparent.png" alt="Canadian Carpet Cleaning"></a>



				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				);
				?>

			</div>


		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
<?php endif;