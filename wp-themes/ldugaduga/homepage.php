<?php 

// Template Name: Homepage

get_header(); ?>
		<div class="mythreethumb">
			<div class="row-fluid">
				<!-- <h2>Random Post</h2> -->
				<ul class="rand-thumb">
					<?php $posts = get_posts('orderby=rand&numberposts=3'); foreach($posts as $post) { ?>
						
						<?php
						
						// check for thumbnail
						$thumb = get_post_meta($post->ID, 'Thumbnail', $single = true); 
						?>
						
						<li class="span4" <?php if(!$count % 3) echo 'class="last"'; ?>>
							
								<div class="thumbnail"><a class="thickbox" href="<?php echo $thumb; ?>"><img width="240" src="<?php echo $thumb; ?>" alt=""></a></div>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
							
							
						</li>
				<?php } ?>
				</ul>
				
			</div>
		</div>
		<!-- /mythreethumb -->
<?php get_footer(); ?>