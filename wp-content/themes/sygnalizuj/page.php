<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sygnalizuj
 */

get_header();
?>

<!-- Full Page Intro -->
  <div class="view page-intro" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient-blue-syg d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-md-12 white-text text-center text-md-left mt-6 mt-lg-3">
            <span class="h1-responsive font-weight-bold mt-sm-5 pt-xl-4 text-center text-shadow">
      				<?php
      					if ( is_singular() ) :
      						the_title( '<h1 class="entry-title mb-1">', '</h1>' );
      					endif;
      				?>
            </span>
            <p class="text-center">
            	bread
            </p>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->

	<div id="primary" class="container-fluid mb-5 mt-6">
		<div class="container">
			<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->
		</div>
	</div><!-- #primary -->
<?php
//get_sidebar();
get_footer();