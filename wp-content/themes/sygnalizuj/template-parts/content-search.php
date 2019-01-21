<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sygnalizuj
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="entry-title h5-responsive font-weight-bold mb-3"><a class="text-body" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<?php sygnalizuj_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

						<footer class="entry-footer">
						<?php
						if ( 'post' === get_post_type() ) :
							?>
							<div class="entry-meta text-muted">
								<small>
									<i class="fas fa-calendar-day grey-text mr-2"></i><?php the_time('j/m/y'); ?> <i class="fas fa-info-circle grey-text mx-2"></i><?php the_category(', ') ?>

									<?php 
									$post_tags = get_the_tags();

									if ( $post_tags ):
										 
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

											<div class="excerpt mt-3">
							<a class="btn btn-sm btn-info m-0" href="<?php echo get_permalink(); ?>" role="button">Więcej <i class="fas fa-angle-double-right"></i></a>
						</div>

				</footer><!-- .entry-footer -->
	<hr>
</article><!-- #post-<?php the_ID(); ?> -->
