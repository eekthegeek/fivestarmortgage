<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>
<div class="grid-x grid-padding-x align-right info-bar" > <!-- Aligned to the right -->

  <div class="cell large-6 text-right" >  <?php

          dynamic_sidebar( 'top-bar' );


      ?></div>
</div>
<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
    		<ul class="menu">
			<li><?php the_custom_logo(); ?></li>
		</ul>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<li><button class="button " type="button" data-toggle="off-canvas"><i class="fa fa-bars" aria-hidden="true"></i>
</button></li>
			<!-- <li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>-->
		</ul>
	</div>
</div>
