<?php
/**
 * Template Name: Jumbotron header
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
          <div class="col-md-12 white-text text-center text-md-left mt-xl-4 mb-5">
            <span class="h1-responsive font-weight-bold mt-sm-5 pt-xl-4 text-center text-shadow wow fadeIn" data-wow-delay="0.2s">
              <?php if( get_post_meta($post->ID, 'Header', true)): ?>
                <?php echo get_post_meta($post->ID, 'Header', true); ?>
              <?php else: ?> 
                Sygnalizuj.com
              <?php endif; ?>
            </span>
            <span class="h3-responsive mt-3 mb-4 text-center wow fadeIn" data-wow-delay="0.5s">
              <?php if( get_post_meta($post->ID, 'Subheader', true)): ?>
                <?php echo get_post_meta($post->ID, 'Subheader', true); ?>
              <?php else: ?> 
                bezpieczne zgłaszanie nieprawidłowości w firmie.
              <?php endif; ?>
            </span>

            <hr>
            <div class="text-center mt-5">
              <a class="btn btn-danger btn-lg wow fadeInUp" role="button" data-wow-delay="0.7s">Prześlij zgłoszenie <i class="fas fa-paper-plane fa-lg ml-2"></i></a>
              <a class="btn btn-success btn-lg wow fadeInUp" role="button" data-wow-delay="0.9s">Zarekomenduj Sygnalizuj.com <i class="fas fa-thumbs-up fa-lg ml-2"></i></a>
            </div>
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
