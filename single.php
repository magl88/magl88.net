<?php
/**
 * Шаблон отдельной записи (single.php)
 * @package WordPress
 * @subpackage magl88-template
 */
get_header(); ?>
<section class="content-wrapper">
	<div class="container">
		<div class="row">
			<div class="<?php content_class_by_sidebar(); ?>">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1><?php the_title(); ?></h1>
						<div class="meta">
							<p>Категория: <?php the_category(',') ?> <?php the_tags('<span>Тэги: ', ',', '</span>'); ?></p>
						</div>
						<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
				<div class="row">
					<div class="col-md-6">
						<?php previous_post_link('%link', '<- Предыдущий пост: %title', TRUE); ?>
					</div>
					<div class="col-md-6">
						<?php next_post_link('%link', 'Следующий пост: %title ->', TRUE); ?>
					</div>
				</div>
				<?php  if (comments_open() || get_comments_number()) comments_template('', true); ?>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
