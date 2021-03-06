<?php
/*
 * The template for displaying the About page
 * Template Name: Full-width layout
 * Template Post Type: post, page
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */
get_header(); ?>

<!-- hero section -->

	<div id="primary" class="home-page hero-content">
		<div class="about-main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<h3 >Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customer's smile.</h3>
			<?php endwhile; // end of the loop. ?>

		</div><!-- .main-content -->
	</div><!-- #primary -->

<!-- our services heading section -->
<section class="site-content">
    <div class="our-services">
        <h4>OUR SERVICES</h4>
        <p>We take pride in our clients and the content we create for them. Here is a brief overview of our offered services.</p>
     </div>
 </section>   

<!-- our services offered section -->


<section class="services-offered">
<div class="site-content">

	<?php $postorder=1;  ?>

<?php query_posts ('posts_per_page=4&post_type="services_offered'); ?>
<?php while (have_posts())  : the_post(); ?>

	<div class="service">

		<div class="service-title">
			<h3><?php the_title(); ?></h3>
		</div>

		<?php
		if ($postorder==1) { 
		   echo('<div class="service-container">');
		   echo('<div class="service-text-left">');
		   echo('<p>');
		   echo get_the_content();
		   echo('</p>');
		   echo('</div>');
		   echo('<figure class="service-image service-image-right">');
		   the_post_thumbnail();
		   echo('</figure>');
		   $postorder=2;
		   echo('</div>');
		} else {
		   echo('<div class="service-container">');
		   echo('<figure class="service-image service-image-left">');
		   the_post_thumbnail();
		   echo('</figure>');
		   echo('<div class="service-text-right">');
		   echo('<p class="no-spacing">');
		   echo get_the_content();
		   echo('</p>');
		   echo('</div>');
		   echo('</div>');
		   $postorder=1;
		}
		?>
	</div>	
<?php endwhile; //end of loop.  ?>
<?php wp_reset_query(); // resets the altered query back to the original?>			
</div>		 
</section>




<!-- our contact section -->
<section class="about-cta">
 <div class="cta-container">
 	<h2>Interested in Working With Us?</h2>
    <a class="button" href="#">Contact Us</a> 
    </div> <!-- end cta-container -->
</section> 	<!-- end about-cta -->
 
			


<!-- our footer section -->
<?php get_footer(); ?>