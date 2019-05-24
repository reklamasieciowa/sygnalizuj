<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Sygnalizuj
 */

get_header();
?>

<!-- Full Page Intro -->
  <div class="view page-intro" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient-blue d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-md-12 white-text text-center text-md-left mt-6 mt-lg-3">
            <span class="font-weight-bold mt-sm-5 pt-xl-4 text-center text-shadow">
      				<?php
      					the_title( '<h1 class="page-title h3-responsive ">', '</h1>' );
      				?>
            </span>
            <p class="text-center">
            	<?php
              if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<div id="breadcrumbs">','</div>' );
              }
              ?>
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


	<div id="primary" class="content-area my-5">
		<div class="container">
			<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/post', get_post_type() );

				echo '<hr>';
				//the_post_navigation();
				echo sygnalizuj_get_the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					echo '<hr>';
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
