<?php
/**
 * Страница с кастомным шаблоном (page-custom.php)
 * @package WordPress
 * @subpackage magl88-template
 * Template Name: Страница автора
 */
get_header(); ?>
<section class="content-wrapper">
	<div class="container">
		<div class="row">
			<div class="<?php content_class_by_sidebar(); ?>">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</article>
				<?php endwhile; ?>
				<div class="row">
					<div class="col-md-12">
						<div class="btitle"><span>Контакты</span></div>
					</div>
					<div class="col-md-6">
						<?php echo do_shortcode('[contact-form-7 id="43" title="Написать автору"]');?>
					</div>
					<div class="col-md-6">
						<div class="cont-block">
							<div class="email"><span class="socicon">@</span>E-mail: <a href="mileto:magl88net@gmail.com">magl88net@gmail.com</a></div>
							<div class="skype"><span class="socicon">g</span>Skype: <a href="skype:magl88?chat">magl88</a></div>
							<div class="github"><span class="socicon">Q</span> GitHub: <a href="https://github.com/magl88" target="_blank">magl88</a></div>
							<div class="vk"><span class="socicon">;</span> VK.com: <a href="http://vk.com/magl88" target="_blank">magl88</a></div>
							<div class="fb"><span class="socicon">b</span> FB.com: <a href="https://www.facebook.com/magl88net" target="_blank">magl88net</a></div>

						</div>
					</div>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>

	</div>
</section>
<?php get_footer(); ?>