<?php
/**
 * Страница 404 ошибки (404.php)
 * @package WordPress
 * @subpackage magl88-template
 */
get_header(); ?>
<section class="content-wrapper">
	<div class="container">
		<div class="row">
			<div class="<?php content_class_by_sidebar(); ?>">
				<h1>Ой, это 404!</h1>
				<p>Блаблабла 404 Блаблабла</p>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>