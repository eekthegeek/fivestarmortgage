<?php
/*

Template Name: FiveStar Page - No Sidebar

*/


get_header(); ?>
<?php
$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$bannerPhrase = get_field( 'banner_phrase' );
?>
<div class="banner-page" style="background-position:top; height:410px!important; overflow: hidden;background-image:url('<?php echo $thumb[0] ?>') ">

	<div class="grid-container">
		<div class="grid-x align-right ">
			<div class="cell medium-5 large-5 banner-content">
<?php

  echo '<div class="float-right banner-headline" >'.$bannerPhrase.'</div>';
?>
			</div>
			</div>
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
