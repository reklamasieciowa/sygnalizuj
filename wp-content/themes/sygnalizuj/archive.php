<?php
/**
 * The template for displaying archive pages
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
    <div class="mask rgba-gradient-blue d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-md-12 white-text text-center text-md-left mt-6 mt-lg-3">
            <span class="font-weight-bold mt-sm-5 pt-xl-4 text-center text-shadow">
      				<?php
      					the_archive_title( '<h1 class="h2-responsive page-title">', '</h1>' );
      					the_archive_description( '<div class="archive-description">', '</div>' );
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

	<div id="primary" class="container-fluid my-5">
		<div class="container">
			<main id="main" class="site-main">

			<?php if ( have_posts() ) : ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					if ($wp_query->current_post % 2 == 0):
				       $evenness = 'even';
				    else:
				        $evenness = 'odd';
				    endif;

				    set_query_var( 'evenness', $evenness );

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */

					 get_template_part( 'template-parts/content', get_post_type()); 

					 echo '<hr class="">';

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

			</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
