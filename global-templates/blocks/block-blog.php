<?php 

$number_of_posts = get_field('posts_to_show');
$select_posts_manually = get_field('select_posts_manually');
$centeralign = get_field('center_align');
$selectposts = get_field('select_posts');
$hidedate = get_field('hide_date');

$args = array(
	'post_type' => 'post',
	'posts_per_page' => $number_of_posts,
);




$query = new WP_Query($args);

?>

<?php if($select_posts_manually == 1): ?>

	<?php if(have_rows('select_posts')): ?>

		<div class="row<?php if($centeralign == 1) { echo " justify-content-center"; } ?>" uk-scrollspy="target: .news-box; cls: uk-animation-slide-bottom-medium; repeat: false; delay: 100;">

		<?php while(have_rows('select_posts')): the_row(); ?>

			<?php 
			$selected_post = get_sub_field('select_post'); 
			$title = get_sub_field('post_title');
			?>

			<?php if($selected_post): $postid = $selected_post->ID; ?>
					<div class="col-md-4">
						
							<div class="news-box position-relative">
								<div class="featured-img"><?php echo get_the_post_thumbnail( $selected_post->ID, 'large' ); ?></div>
								<h3><?php if($title) { echo $title; } else { echo get_the_title($selected_post->ID); } ?></h3>
								<?php if($hidedate != 1): ?>
								<div class="news-date"><?php echo get_the_date('F j, Y', $selected_post->ID); ?></div>
								<hr class="divider">
								<?php endif; ?>
								<?php echo apply_filters( 'the_content', wp_trim_words( strip_tags( $selected_post->post_content ), 18) ); ?>
								<a href="<?php the_permalink($selected_post->ID); ?>" class="btn btn-primary stretched-link">Read More</a>
							</div>
					</div>
			<?php endif; ?>

		<?php endwhile; ?>

		</div>

	<?php endif; ?>

<?php else: ?>
	<?php if($query->have_posts()): ?>
	<div class="row<?php if($centeralign == 1) { echo " justify-content-center"; } ?>" uk-scrollspy="target: .news-box; cls: uk-animation-slide-bottom-medium; repeat: false; delay: 100;">
		<?php while($query->have_posts()): $query->the_post(); ?>
			<div class="col-md-4">
				<a href="<?php the_permalink(); ?>">
					<div class="news-box">
						<div class="featured-img"><?php echo get_the_post_thumbnail( $query->ID, 'blogcrop' ); ?></div>
						<h3><?php the_title(); ?></h3>
						<div class="news-date"><?php the_date('F j, Y'); ?></div>
						<hr class="divider">
						<?php the_excerpt(); ?>
					</div>
				</a>
			</div>
		<?php endwhile; ?>
	</div>
	<?php endif; ?>
<?php endif; ?>