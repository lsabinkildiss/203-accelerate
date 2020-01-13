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
<?php while (have_posts())  : the_post(); 	

	<h3><?php the_title(); ?></h3>

	<div class="service">

		<?php
		if ($postorder==1) { 
		   echo('<div class="service-text">');
		   echo('<p>');
		   get_the_content();
		} else {

		}

		?>
		   <?php echo get_the_content(); ?></p>
		</div>
		<figure class="service-image">
		<?php the_post_thumbnail(); ?>
		</figure>
	</div>	
<?php endwhile; //end of loop.  ?>
<?php wp_reset_query(); // resets the altered query back to the original?>			
</div>		
</section>




<!-- our contact section -->
<section class="services-contact-container">
<div class="site-content"
	<div class="services-question">
		<h3>Interested in working with us?</h3>
	</div>
	<div class="service-button">
		<a class="button" href="#">Contact Us</a>
	</div>
</div>			
</section>	

<!-- our footer section -->
<?php get_footer(); ?>