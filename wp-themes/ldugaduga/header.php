<!DOCTYPE html>
<html>
  <head>
    <title>
    	<?php if (function_exists('is_tag') && is_tag()) {
		          single_tag_title('Tag Archive for &quot;'); echo '&quot; - ';
		    } elseif (is_archive()) {
		          wp_title(''); echo ' Archive - ';
		    } elseif (is_search()) {
		          echo 'Search for &quot;'.wp_specialchars($s).'&quot; - ';
		    } elseif (!(is_404()) && (is_single()) || (is_page())) {
		          wp_title(''); echo ' - ';
		    } elseif (is_404()) {
		          echo 'Not Found - ';
		    }
		    if (is_home()) {
		          bloginfo('name'); echo ' - '; bloginfo('description');
		    } else {
		          bloginfo('name');
		    }
		    if ($paged > 1) {
		          echo ' - page '. $paged;
		    } ?>
		
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/style.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="http://louiedugaduga.com/site/wp-content/uploads/2013/03/favicon.png">
	<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="container">
		<div class="header">
			<div class="circle">
				<h1>L</h1>
			</div>
			<h2 style="margin-bottom:0"><?php bloginfo('name'); ?></h2>
			<p><em><?php bloginfo('description'); ?></em></p>
			<ul class="mynav">
				<li><a href="<?php echo get_option('home'); ?>/">Home</a></li> 
				<li><a target="_blank" href="/site/wp-content/uploads/2013/03/louie-cv.pdf">CV</a></li>
				<li><a href="<?php echo get_option('home'); ?>/portfolio">Portfolio</a></li> 
				<li><a href="<?php echo get_option('home'); ?>/contact">Contact</a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
		<!-- header -->
		
		<?php if (is_front_page()) { ?>
		<div class="intro">
			<h3>Hello! I'm Louie Dugaduga from Philippines, I am a passionate freelance web developer. I build responsive website designs and Wordpress Themes from scratch or configure Paid Themes depends on Client wants.
				</h3>
		</div>
		<!-- /intro -->
		
		<div class="featured">
			<div id="myCarousel" class="carousel slide">
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			    <li data-target="#myCarousel" data-slide-to="1"></li>
			    <li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>
			  <!-- Carousel items -->
			  <div class="carousel-inner">
			    <div class="active item">
			    		<div class="thumbnail">
							<img width="760" src="<?php bloginfo('stylesheet_directory'); ?>/img/carousel/ld.png" alt="">
						</div>
						<div class="carousel-caption">
							<h4 style="margin-top:20px;">Louie Dugaduga</h4>
							<p><em>Type of Work:</em> Wordpress Theme from scratch using Twitter Bootstrap Framework<br>
							<em>Url:</em> <a href="http://louiedugaduga.com">www.louiedugaduga.com</a></p>
						</div>
			    </div>
			    <div class="item">
			    			<div class="thumbnail">
								<img width="760" src="<?php bloginfo('stylesheet_directory'); ?>/img/carousel/tcp.png" alt="">
							</div>
							<div class="carousel-caption">
								<h4 style="margin-top:20px;">TCP Group Ireland</h4>
								<p><em>Type of Work:</em> HTML,CSS,Wordpress Paid Themes Customisation<br>
								<em>Url:</em> <a href="http://www.tcp.ie/">www.tcp.ie</a></p>
							</div>
			    </div>
			    <div class="item">
			    		<div class="thumbnail">
							<img width="760" src="<?php bloginfo('stylesheet_directory'); ?>/img/carousel/3.png" alt="">
						</div>
						<div class="carousel-caption">
							<h4 style="margin-top:20px;">Altwebservices</h4>
							<p><em>Type of Work:</em> Web Design,HTML,CSS,Wordpress Integration<br>
							<em>Url:</em> <a href="http://altwebservices.com">www.altwebservices.com</a></p>
						</div>
			    </div>
			  </div>
			  <!-- Carousel nav -->
			  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
			  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>			
		</div>
		
		<?php } else { ?>
			
		<?php } ?>	