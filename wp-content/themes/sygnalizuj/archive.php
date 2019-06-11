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
    <div class="mask rgba-gradient-blue-syg d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
        <!--Grid row-->
        <div class="row">
          <!--Grid column-->
          <div class="col-md-12 white-text text-center text-md-left mt-6 mt-lg-3">
            <span class="font-weight-bold mt-sm-5 pt-xl-4 text-center text-shadow">
      				<?php
      					//the_archive_title( '<h1 class="h2-responsive page-title">', '</h1>' );
      					echo '<h1 class="h2-responsive page-title">';
      					single_cat_title('Blog: ', true);
      					echo '</h1>';
      					the_archive_description( '<div class="archive-description">', '</div>' );
      				?>
            </span>
            <p class="text-center">
            	<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
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

	<div id="primary" class="container-fluid my-5">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
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
				<div class="col-lg-4 sidebar">
					<?php get_sidebar('Sidebar1'); ?>
					<hr>
					<h5 class="h5-responsive font-weight-bold mt-4 mb-2">Artykuły</h5>
					<?php 
					// the query
						$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'cat' => get_query_var('cat'), 'posts_per_page'=>-1)); ?>
						 
						<?php if ( $wpb_all_query->have_posts() ) : ?>
						 
						<ul class="posts-list">
						    <!-- the loop -->
						    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
						        <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
						    <?php endwhile; ?>
						    <!-- end of the loop -->
						 
						</ul>
						 
						    <?php wp_reset_postdata(); ?>
						 
						<?php else : ?>
						    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
					
				</div>
			</div>
		</div>
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
