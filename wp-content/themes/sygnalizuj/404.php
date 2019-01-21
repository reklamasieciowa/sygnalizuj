<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
            <h1 class="h4-responsive font-weight-bold mt-sm-5 pt-xl-4 text-center text-shadow">
      				<?php
      					esc_html_e( 'Oops! That page can&rsquo;t be found.', 'sygnalizuj' ); 
      				?>
            </h1>
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

	<div id="primary" class="content-area my-5">
		<div class="container">
			<main id="main" class="site-main">

				<section class="error-404 not-found">

					<div class="page-content">
						<div class="card p-3 my-5">
						<h2 class="h4-responsive"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'sygnalizuj' ); ?></h2>

						<?php
							get_search_form();
						?>
						</div>
						<div class="card p-3 my-5">
						<?php
							the_widget( 'WP_Widget_Recent_Posts' );
						?>
						</div>
						<div class="widget widget_categories card p-3 my-5">
							<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'sygnalizuj' ); ?></h2>
							<ul>
								<?php
								wp_list_categories( array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								) );
								?>
							</ul>
						</div><!-- .widget -->

						<div class="card p-3 my-5">
						<?php
						/* translators: %1$s: smiley */
						$sygnalizuj_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'sygnalizuj' ), convert_smilies( ':)' ) ) . '</p>';
						the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$sygnalizuj_archive_content" );
						?>
						</div>
						<div class="card p-3 my-5">
						<?php
						the_widget( 'WP_Widget_Tag_Cloud' );
						?>
						</div>
					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php
get_footer();
