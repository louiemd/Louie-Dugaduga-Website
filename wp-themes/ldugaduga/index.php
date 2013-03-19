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
						
						<!-- pagination -->
						<?php
						
						// global $wp_query;
						// 
						// 						$total_pages = $wp_query->max_num_pages;
						// 
						// 						if ($total_pages > 1){
						// 
						// 						  $current_page = max(1, get_query_var('paged'));
						// 
						// 						  echo '<div class="page_nav">';
						// 
						// 						  echo paginate_links(array(
						// 						      'base' => get_pagenum_link(1) . '%_%',
						// 						      'format' => '/page/%#%',
						// 						      'current' => $current_page,
						// 						      'total' => $total_pages,
						// 						      'prev_text' => 'Prev',
						// 						      'next_text' => 'Next'
						// 						    ));
						// 
						// 						  echo '</div>';
						// 
						// 						}
						
						
						?>
						
						<div class="navigation">
							<div class="alignleft"><h5><?php next_posts_link('&laquo; Older Entries') ?></h5></div>
							<div class="alignright"><h5><?php previous_posts_link('Newer Entries &raquo;') ?></h5></div>						
						</div>
						
						<div class="clearfix"></div>
						<?php else : ?>

						<h2 class="center">Not Found</h2>
						<p class="center">Sorry, but you are looking for something that isn't here.</p>

				<?php endif; ?>
			</div>
		</div>
		<!-- /mythreethumb -->
<?php get_footer(); ?>