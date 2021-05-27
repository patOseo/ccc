<?php if(have_rows('areas_served', 'option')): ?>
	<div class="areas-served-block">
		<div class="container">
			<div class="row">
				<?php while(have_rows('areas_served', 'option')): the_row(); ?>
						<?php 
						$area = get_sub_field('city');
						$area_link = get_sub_field('area_page_link');
						?>
					<div class="col-sm-6 col-md-3">
						<div class="shadowbox card <?php if($area_link): ?>hover<?php endif; ?>">
							<span><?php if($area_link): ?><a href="<?php echo $area_link; ?>" class="stretched-link"><?php the_sub_field('city'); ?></a><?php else: the_sub_field('city'); endif; ?></span>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</div>
<?php endif;