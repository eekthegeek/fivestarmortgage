<?php
/**
 * The template for displaying the footer.
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
 ?>

				<footer class="footer" role="contentinfo">
          <div class="grid-container">
          <div class="grid-x grid-margin-x">
          <div class="large-4 cell ">
          <?php

      					dynamic_sidebar( 'footer-widget-1' );


            ?>
          </div>
          <div class="large-3 cell" >
          <?php

      					dynamic_sidebar( 'footer-widget-2' );


            ?>
          </div>
          <div class="large-3 cell" >
          <?php

      					dynamic_sidebar( 'footer-widget-3' );


            ?>
          </div>
         <div class="large-2 cell" >
          <?php

      				 dynamic_sidebar( 'footer-widget-4' );


            ?>
          </div>

        </div></div>

					<div class="inner-footer grid-x grid-margin-x grid-padding-x">

					<div class="small-12 medium-12 large-12 cell text-right copyright-row">

							<p class="source-org copyright" ><a href="/privacy-policy/">Privacy Policy</a>&nbsp; | &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
						</div>

					</div> <!-- end #inner-footer -->

				</footer> <!-- end .footer -->

			</div>  <!-- end .off-canvas-content -->

		</div> <!-- end .off-canvas-wrapper -->

		<?php wp_footer(); ?>

	</body>

</html> <!-- end page -->
