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
  <div class="view home-intro" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/architecture.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
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
                <svg xmlns="http://www.w3.org/2000/svg" id="logo" viewBox="0 0 353.65 62.36"><title>Sygnalizuj.com - bezpieczne zgłaszanie nieprawidłowości w firmie.</title><path d="M80.54,76.55a15.93,15.93,0,0,0-4.92-3.07q-.68-.26-6.63-2.24a19,19,0,0,1-5.23-2.37,4.16,4.16,0,0,1-1.7-3.52,4.57,4.57,0,0,1,1.58-3.61,6.14,6.14,0,0,1,4.2-1.38,6.89,6.89,0,0,1,5.13,2A8.45,8.45,0,0,1,75.19,68h7.18V55H75.31v3.2q-2.91-4.09-9.54-4.1a12.24,12.24,0,0,0-9,3.42,12.07,12.07,0,0,0-3.44,8.93,11.16,11.16,0,0,0,2.92,8,10.89,10.89,0,0,0,3.83,2.43q1.59.64,5.47,1.8A35.67,35.67,0,0,1,72.4,81.1a4.76,4.76,0,0,1,2.37,4.41A5.46,5.46,0,0,1,73,89.83a7.11,7.11,0,0,1-4.92,1.57q-7.84,0-7.84-7.74a4.17,4.17,0,0,1,.06-.58v-.57H53V97h7.11V93.26q3.28,4.41,9.67,4.41t10.09-3.45q3.66-3.47,3.65-9.47a11.14,11.14,0,0,0-3-8.2ZM119,67H104.31v5.76h4l-6.26,15.61-5.9-15.61h4V67H84.49v5.76h3.17l10.15,24Q96.72,102,92.88,102a18.8,18.8,0,0,1-3.7-.45v6.33a30.06,30.06,0,0,0,4.62.45,10.18,10.18,0,0,0,5.62-1.28,10.76,10.76,0,0,0,3.44-4.67l13.25-29.63H119V67Zm33.32,0h-12v4.09a10.14,10.14,0,0,0-9.12-4.86,10.83,10.83,0,0,0-8.82,3.9q-3.23,3.91-3.22,10.88t3.31,11.14a10.69,10.69,0,0,0,8.73,4.1,11.11,11.11,0,0,0,9.48-4.74v4.29a6.36,6.36,0,0,1-1.73,4.77,6.63,6.63,0,0,1-4.83,1.69c-3,0-4.73-1.3-5.29-3.9h-8.45q.3,10,12.76,10,9.92,0,13.44-6c1.09-1.83,1.64-5,1.64-9.34V72.78h4.08V67Zm-13.78,20.7a5.65,5.65,0,0,1-4.77,2.4,5.74,5.74,0,0,1-4.8-2.4,10.56,10.56,0,0,1-1.83-6.56q0-9,6.63-9a5.65,5.65,0,0,1,4.8,2.37,10.82,10.82,0,0,1,1.77,6.59,10.69,10.69,0,0,1-1.8,6.56Zm51.71,3.11h-3.77V77.64q0-11.39-9.78-11.39a11.68,11.68,0,0,0-10.1,5.5V67H155v5.76h3.83v18H155v6h16.11v-6h-4.31V80.14a8.06,8.06,0,0,1,1.91-5.6,6.35,6.35,0,0,1,5-2.15,4.5,4.5,0,0,1,3.52,1.41,5.51,5.51,0,0,1,1.28,3.84V90.83h-4.32v6h16.11v-6Zm31.92,0h-3.52V76.75c0-3.67-1.05-6.34-3.13-8s-5.43-2.5-10-2.5q-6.07,0-9,2.34t-3.35,7.58h7.48q.3-4.29,5.05-4.29a6.57,6.57,0,0,1,4,1.09,3.3,3.3,0,0,1,1.49,2.75V78h-7.36q-5.78,0-8.88,2.62a10.15,10.15,0,0,0-.36,14.24,10,10,0,0,0,7.3,2.66,10.61,10.61,0,0,0,9.3-4.8v4h11.06v-6Zm-13.07-1.44a6.09,6.09,0,0,1-4.8,2.08q-4.26,0-4.26-4c0-2.73,2.5-4.09,7.48-4.09,1,0,2.25.06,3.59.19a9.29,9.29,0,0,1-2,5.86Zm31.37,1.44h-3.95V55H224.64v5.82h3.83v30h-4v6h16v-6ZM255,54.28h-8.46v8.45H255V54.28Zm3.89,36.55h-4V67H243.12v5.76H247v18h-4v6h16v-6ZM288.35,86H282v4.87H271.51l16.54-17.28V67H262.21V77h6.44V72.78h9.67L261.72,90v6.79h26.63V86ZM325.5,91h-3V67H311v5.89h3.59V83.66a8,8,0,0,1-1.92,5.57,6.41,6.41,0,0,1-4.95,2.11A4.57,4.57,0,0,1,304.16,90a5.37,5.37,0,0,1-1.28-3.81V67H291.27v5.89h3.59V86.15q0,5.89,2.4,8.64T305,97.55q5.89,0,9.73-5.51v4.74H325.5V91Zm12.16-36.74h-8.45v8.45h8.45V54.28Zm0,12.74H325.81v5.76h3.76V98.57q0,3.65-3.28,3.65a8.34,8.34,0,0,1-1.58-.13v5.7a21.19,21.19,0,0,0,4.38.57q4.71,0,6.64-2t1.93-6.69V67Z" transform="translate(-53 -46)" fill="#fff"/><polygon points="291.57 0 291.57 62.08 353.65 62.08 353.65 0 291.57 0 291.57 0" fill="#ce162b"/><path d="M350.06,93.67h-2.54v2.75h2.54V93.67Zm12.21-1.38a3.12,3.12,0,0,1-1.11,2,3.55,3.55,0,0,1-2.3.72,3.4,3.4,0,0,1-2.78-1.26,5.38,5.38,0,0,1-1-3.49,5.2,5.2,0,0,1,1-3.46,3.47,3.47,0,0,1,2.82-1.24,3.69,3.69,0,0,1,2.54.84,3.12,3.12,0,0,1,1,2.37h1.65V84.11h-1.62v1.43a4.41,4.41,0,0,0-3.7-1.76,5.76,5.76,0,0,0-4.4,1.76,7.59,7.59,0,0,0,0,9.45,5.79,5.79,0,0,0,4.43,1.75c3.28,0,5.11-1.48,5.51-4.45ZM376,85.54a6.91,6.91,0,0,0-9.15,0,7.46,7.46,0,0,0,0,9.46A6.87,6.87,0,0,0,376,95a7.55,7.55,0,0,0,0-9.46Zm-1.7,8.19A3.51,3.51,0,0,1,371.45,95a3.58,3.58,0,0,1-2.91-1.24,5.34,5.34,0,0,1-1-3.51,5.18,5.18,0,0,1,1-3.46,3.62,3.62,0,0,1,2.91-1.21,3.55,3.55,0,0,1,2.88,1.21,5.18,5.18,0,0,1,1,3.46,5.32,5.32,0,0,1-1,3.49Zm26.07,1.07h-2.08V88.21a10.1,10.1,0,0,0-.13-2,3.15,3.15,0,0,0-1-1.56,4,4,0,0,0-2.78-.9,5.27,5.27,0,0,0-4.24,2.27,3.58,3.58,0,0,0-3.72-2.27A4.92,4.92,0,0,0,382.35,86V84.11H378.2v1.62h2.05V94.8H378.2v1.62h6.31V94.8h-2.08V89.29q0-3.89,3.35-3.89a2.26,2.26,0,0,1,1.85.68,3.33,3.33,0,0,1,.56,2.13V94.8h-2.06v1.62h6.32V94.8h-2.08V89.29q0-3.89,3.35-3.89a2.27,2.27,0,0,1,1.85.68,3.33,3.33,0,0,1,.55,2.13V94.8h-2.05v1.62h6.32V94.8Z" transform="translate(-53 -46)" fill="#fff"/></svg>
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
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>rekomendacja/" class="btn btn-success btn-lg wow fadeInUp" role="button" data-wow-delay="0.9s">Zarekomenduj Sygnalizuj.com <i class="fas fa-thumbs-up fa-lg ml-2"></i></a>
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
