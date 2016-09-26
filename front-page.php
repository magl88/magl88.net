<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage magl88-template
 */
get_header(); ?>
	<section class="content-wrapper">
		<div class="container">
			<div class="row">
				<div class="<?php content_class_by_sidebar(); ?>">
					<?php
					global $post;
					$postslist = get_posts( array( 'posts_per_page' => 10, 'category' => "-29,-1") );
					foreach ( $postslist as $post ) {
						setup_postdata( $post );
						?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="row"><h2 class="col-xs-12"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div>
							<div class="row">
								<?php if ( has_post_thumbnail() ) { ?>
									<div class="col-sm-3">
										<a href="<?php the_permalink(); ?>" class="thumbnail">
											<?php the_post_thumbnail(); ?>
										</a>
									</div>
								<?php } ?>
								<div class="<?php if ( has_post_thumbnail() ) { ?>col-sm-9<?php } else { ?>col-sm-12<?php } ?>">
									<?php the_content( '' ); ?>
								</div>
							</div>
						</article>
						<?php
					}
					wp_reset_postdata();
					?>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>