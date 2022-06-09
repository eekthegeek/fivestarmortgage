<?php
/*
Template Name: Home (No Sidebar)
*/
?>

<?php get_header();

$post_thumbnail_link = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' );
?>
<div class="banner " style="background-image:url(<?php echo $post_thumbnail_link; ?>);">
	<div class="grid-container">
		<div class="grid-x align-middle ">
		  <div class="cell medium-down-1 large-6 banner-content">
				<h1 class="headline">You're Buying More Than A House</h1>
				<h5>Let us help you get the view you've always wanted.</h5>
				<div class="banner-buttons">
					<a class="button large" href="/apply">Apply Now</a>
					<a class="button large cta-warning " href="tel:+13178318355" >Give Us A Call</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="home-grid">
	<div class="grid-container ">
		<div class="grid-x  grid-margin-x  text-center small-1 large-up-3 " >

			    <div class="cell" >
			    	<h4 class="marketing-site-features-title">We're Here to Help</h4>
			      	<p class="marketing-site-features-desc">Five Star Mortgage Solutions is an established small town community business, and we’ll answer any questions you have about the mortgage process. Give us a call or just stop in. Our door is always open. </p>
							<div class="text-center">
								<a class="button large text-center" href="/about">About Us</a>
							</div>
			    </div>
			    <div class="cell" >
			      <h4 class="marketing-site-features-title">We'll Work with You</h4>
			      <p class="marketing-site-features-desc">Just because you’ve been turned down by a major bank, doesn’t mean loans are out of reach. We’ll examine your credit to see if there are ways for you to improve it. If you already qualify, we’ll look at what you can do to improve your rate.</p>
						<a class="button large" href="/apply">Apply Now</a>
			    </div>
			    <div class="cell" >
			      <h4 class="marketing-site-features-title">We'll Return Your Call Today</h4>
			      <p class="marketing-site-features-desc">If you complete our application by 2 pm on a regular business day, we’ll call you back by the end of the day. We pride ourselves on our excellent customer service, and that relationship starts when you complete the application.</p>
						<a class="button large" href="tel:+13178318355">Call Today</a>
			  	</div>

		</div>
  </div>
</div>



<?php the_content(); ?>
<?php
$testimonial_image = get_field( 'testimonial_image' );
$testimonial_url = $testimonial_image['url'];

 ?>
<div class="full-width-testimonial" style="background-image:url(<?php echo $testimonial_url; ?>);">

  <div class="full-width-testimonial-section" >

    <div class="full-width-testimonial-content">
      <h5 class="full-width-testimonial-text">"Five Star is great. Without them we wouldn’t have been approved for our loan."
      </h5>
      <p class="full-width-testimonial-source">Angel B.</p>

    </div>
  </div>
</div>



<?php get_footer(); ?>
