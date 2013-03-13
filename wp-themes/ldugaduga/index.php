<?php get_header(); ?>
		<div class="mythreethumb custom-portfolio">
			<div class="row-fluid">
				<h2 style="margin-bottom:30px">Portfolio</h2>
				<?php if (have_posts()) : ?>
						<ul>
						<?php while (have_posts()) : the_post(); ?>
							<?php
							// check for thumbnail
							$thumb = get_post_meta($post->ID, 'Thumbnail', $single = true);
							// check for thumbnail class
							$thumb_class = get_post_meta($post->ID, 'Thumbnail Class', $single = true);
							// check for thumbnail alt text
							$thumb_alt = get_post_meta($post->ID, 'Thumbnail Alt', $single = true);

							?>
						<li>
							<div class="span4">
									<div class="thumbnail">
										<?php // if there's a thumbnail
										if($thumb !== '') { ?>
											<p>
											<a class="thickbox" href="<?php echo $thumb; ?>"><img width="240" src="<?php echo $thumb; ?>"
											class="<?php if($thumb_class !== '') { echo $thumb_class; } else { echo "left"; } ?>"
											alt="<?php if($thumb_alt !== '') { echo $thumb_alt; } else { echo the_title(); } ?>"
											/></a>
											</p>
										<?php } // end if statement

										// if there's not a thumbnail
										else { echo ''; } ?>
									</div>
							</div>
							<div class="span7">
								<p class="small"><strong><?php the_title(); ?></strong></p>
								<?php the_content(); ?>
								
							</div>
							<div class="clearfix"></div>
						</li>
						
						<?php endwhile; ?>
						</ul>
						<div class="clearfix"></div>
						<?php else : ?>

						<h2 class="center">Not Found</h2>
						<p class="center">Sorry, but you are looking for something that isn't here.</p>

				<?php endif; ?>
			</div>
		</div>
		<!-- /mythreethumb -->
<?php get_footer(); ?>