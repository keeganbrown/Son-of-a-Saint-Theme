<?php
/**
 * Template Name: Homepage
 * 
 * @package son-of-a-saint
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?> 
				<div class="heros-box" id="main-column">
					<div class="main-floating-cta floating-hero-cta-wrap">
					<div class="floating-hero-cta">
					<div class="hero-content-box container">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
						<a href="/" class="btn btn-default">Learn More</a>
					</div>
					</div>
					</div>
					<div class="hero-item" style="background-image: url('<?php echo get_stylesheet_directory_uri().'/img/hero-christopher.jpg'; ?>');">
						<div class="floating-hero-cta-wrap">
						<div class="floating-hero-cta">
						<div class="hero-content-box container">
							<h2>Meet <br>
								Christopher</h2>
						</div>
						</div>
						</div>
					</div>
					<div class="hero-item" style="background-image: url('<?php echo get_stylesheet_directory_uri().'/img/hero-aaron.jpg'; ?>');">
						<div class="floating-hero-cta-wrap">
						<div class="floating-hero-cta">
						<div class="hero-content-box container">
							<h2>Meet <br>
								Aaron</h2>
						</div>
						</div>
						</div>
					</div>
					<div class="hero-item" style="background-image: url('<?php echo get_stylesheet_directory_uri().'/img/hero-kush.jpg'; ?>');">
						<div class="floating-hero-cta-wrap">
						<div class="floating-hero-cta">
						<div class="hero-content-box container">
							<h2>Meet <br>
								Kush</h2>
						</div>
						</div>
						</div>
					</div>
				</div>
				<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
					<main id="main" class="container site-main" role="main">
						<?php 
						while (have_posts()) {
							the_post();

							get_template_part('content', 'homepage');

						} //endwhile;
						?> 
					</main>
					<aside class="donate-cta row">
						<div class="donate-wrap container">
						<div class="donate-copy">
							<h3>Help us make our house a home.</h3>
							<p>The Son of a Saint Clubhouse is the heart of our organization. It&rsquo;s a second home for our boys. A place they feel safe and can be themselves as they spend time with their brothers and mentors. This is the place we break bread, where we convene for homework and tutoring, counseling sessions, speakers series, cooking lessons, cookouts, art, yoga and music lessons.  With your help it will be our permanent home. <br>
							<strong>Support the Son of a Saint Clubhouse Fund.</strong></p>
							<a href="/" class="btn btn-default btn-invert">Make a Donation</a>
						</div>
						</div>
					</aside>
				</div>

<?php get_footer(); ?> 