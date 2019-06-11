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
	
		<div class="col-lg-12">
			<div class="entry-content">
			<?php if(has_post_thumbnail()): ?>
			<div class="view overlay rounded z-depth-2 float-lg-left single-thumbnail mr-4 mb-4">
				
					<?php the_post_thumbnail('blogmini', ['class' => 'img-fluid', 'title' => esc_attr( get_the_title( $post_id ) )]); ?>
					<div class="mask rgba-white-slight"></div>
				
			</div>
			<?php endif; ?>

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
						<?php
						if ( 'post' === get_post_type() ) :
							?>
							<div class="entry-meta text-muted">
								<hr>
								<small>
									<i class="fas fa-calendar-day grey-text mr-2"></i><?php the_time('j/m/y'); ?> <i class="fas fa-info-circle grey-text mx-2"></i><?php the_category(', ') ?>

									<?php 
									$post_tags = get_the_tags();

									if ( $post_tags ):
										?>
										<?php  
										foreach( $post_tags as $tag ) {
											echo '<i class="fas fa-tag grey-text mx-2"></i><a class="post-tag" href="'.esc_url( home_url( '/' ) ).'/tag/'.$tag->slug.'">'.$tag->name.'</a> '; 
										}
										?>

									<?php endif; ?>
								</small>
								<?php
				//sygnalizuj_posted_on();
				//sygnalizuj_posted_by();
								?>
							</div><!-- .entry-meta -->
						<?php endif; ?>

						<?php if ( is_category() || is_archive() && has_excerpt() ): ?>
						<div class="excerpt mt-3">
							<a class="btn btn-sm btn-info m-0" href="<?php echo get_permalink(); ?>" role="button">Więcej <i class="fas fa-angle-double-right"></i></a>
						</div>
					<?php endif; ?>

					<?php //sygnalizuj_entry_footer(); ?>
				</footer><!-- .entry-footer -->
			</div>
			<!-- end col-lg-8 or col-lg-12 -->
		</article><!-- #post-<?php the_ID(); ?> -->
