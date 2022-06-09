<?php
/*

Template Name: Contact Page

*/


get_header(); ?>
<?php

$bus_location = get_field('business_map', 'option');
?>
<div class="banner-page" style="height:340px!important; ">
    <div class="acf-map contact-map	">
<div class="marker" data-lat="<?php echo $bus_location['lat']; ?>" data-lng="<?php echo $bus_location['lng']; ?>"></div>
</div>

</div>
	<div class="content grid-container">

		<div class="inner-content grid-x grid-margin-x grid-padding-x ">

		    <main class="main small-12 large-12 medium-12 cell" role="main"> 
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>

			    <?php endwhile; endif; ?>

			</main> <!-- end #main -->



		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
