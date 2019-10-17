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

<?php query_posts ('posts_per_page=4&post_type="services_offered'); ?>
<?php while (have_posts())  : the_post(); 
	$service_description = get_field('service_description');
	$service_offered_image = get_field('service_offered_image');
	$size = "medium";  
?>

<section class="services-offered">
		<div class="site-content">	
			<h2><?php the_title(); ?></h2>
			<p><?php echo $service_description; ?></p>
			
			<figure class="service-offered-image">
				<?php echo wp_get_attachment_image($service_offered_image, $size); ?>	
			</figure>
			<?php endwhile; //end of loop.  ?>
    <?php wp_reset_query(); // resets the altered query back to the original?>
		</div>	
</section>	

<!-- our contact section -->

<section class="services-contact">
	<h3>Interested in working with us?</h3>
	<a class="about-button" href="#">Contact Us</a>
</section>	

<!-- our footer section -->


<?php get_footer(); ?>