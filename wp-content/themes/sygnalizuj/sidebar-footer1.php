<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vre
 */

if ( ! is_active_sidebar( 'footer-1' ) or ! is_active_sidebar( 'footer-2' ) or ! is_active_sidebar( 'footer-3' ) ) {
	return;
}
?>

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">

          <!-- Content -->
          <h5 class="font-weight-bold mt-3 mb-4">
          	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
      			<strong><?php bloginfo( 'name' ); ?></strong>
      		</a></h5>
          	<p><?php bloginfo( 'description' ); ?></p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
          <?php dynamic_sidebar( 'footer-1' ); ?>
        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
			<?php dynamic_sidebar( 'footer-2' ); ?>
        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-3 mx-auto">
			<?php dynamic_sidebar( 'footer-3' ); ?>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->
