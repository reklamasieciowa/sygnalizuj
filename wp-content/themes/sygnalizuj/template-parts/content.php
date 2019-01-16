<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sygnalizuj
 */

?>

<article class="row my-5" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if(!has_post_thumbnail()): ?>
		<div class="col-lg-4 <?php echo (get_query_var('evenness') == 'odd') ? 'order-lg-1' : 'order-lg-2'; ?>">

	      <div class="view overlay rounded z-depth-2 mb-lg-0 mb-4">
	      	<a href="<?php esc_url(get_permalink());?>" title="<?php the_title(); ?>">
	        <!-- <img class="img-fluid" src="<?php //sygnalizuj_post_thumbnail('medium'); ?>" alt=""> -->
	        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/img%20(28).jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
	        <a>
	          <div class="mask rgba-white-slight"></div>
	        </a>
	      </div>
		</div>

		<!-- start col-lg-8	 -->
		<div class="col-lg-8 <?php echo (get_query_var('evenness') == 'odd') ? 'order-lg-2' : 'order-lg-1'; ?>">

	<?php else: ?>
		<div class="col-lg-12">
	<?php endif; ?>
	<!-- else col-lg-12 dla wpisów bez obrazów -->
	
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title h3-responsive mb-3">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title h4-responsive mb-3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				sygnalizuj_posted_on();
				sygnalizuj_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->



	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'sygnalizuj' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sygnalizuj' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php sygnalizuj_entry_footer(); ?>
	</footer><!-- .entry-footer -->


		</div>
		<!-- end col-lg-8 or col-lg-12 -->

</article><!-- #post-<?php the_ID(); ?> -->
