<?php get_header(); ?>
		<div class="mythreethumb">
			<div class="row-fluid">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php if (is_front_page()) { ?>
						<h2 style="display:none"><?php the_title(); ?></h2>
					<?php } else { ?>
						<h2 style="display:block"><?php the_title(); ?></h2>
					<?php } ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
		</div>
		<!-- /mythreethumb -->
<?php get_footer(); ?>