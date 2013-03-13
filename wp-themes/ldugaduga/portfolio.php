<?php
/*
	Template Name: Portfolio
*/
?>

<?php get_header(); ?>
		<div class="mythreethumb">
			<div class="row-fluid">
						<h2>Portfolio</h2>
						<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
								<div class="span4" style="margin-left:0">
										<div class="thumbnail">
											<?php the_post_thumbnail(array('class' => '')); ?>
										</div>
										<p class="small">
											<strong><?php the_title(); ?></strong><br>
											<?php the_content(); ?>
										</p>
								</div>		
								<div class="clearfix" style="margin-bottom:50px"></div>
								<?php endwhile; ?>
								<?php else : ?>

								<h2 class="center">Not Found</h2>
								<p class="center">Sorry, but you are looking for something that isn't here.</p>

						<?php endif; ?>

			</div>
		</div>
		<!-- /mythreethumb -->
<?php get_footer(); ?>