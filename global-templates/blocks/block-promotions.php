<?php

if(get_field('show_promotions') && have_rows('promotions', 'option')): ?>

	<div class="promotions">
		<div class="row justify-content-center">
		<?php while(have_rows('promotions', 'option')): the_row(); ?>

			<?php if(get_sub_field('active') == 1): ?>
			<div class="col-md-4 mb-4">
				<div class="promotion d-flex-column shadowbox hover card p-4 h-100 position-relative">
					<h3 class="h4"><a href="/free-quote/?promo=<?php the_sub_field('promo_code'); ?>" class="stretched-link"><?php the_sub_field('name'); ?></a></h3>
					<hr class="divider red">
					<?php if(get_sub_field('description')): the_sub_field('description'); endif; ?>
					<?php if(get_sub_field('promo_code')): ?>
						<p>
							PROMO CODE: 
							<strong><?php the_sub_field('promo_code'); ?></strong>
						</p>
					<?php endif; ?>
					<span class="mt-auto btn btn-md btn-primary d-block w-auto">Book Now</span>
				</div>
			</div>
			<?php endif; ?>

		<?php endwhile; ?>
		</div>
	</div>
<?php endif;



