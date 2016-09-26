<?php
/**
 * Шаблон рубрики (category.php)
 * @package WordPress
 * @subpackage magl88-template
 */
get_header(); ?>
<section class="content-wrapper">
	<div class="container">
		<div class="row">
			<div class="<?php content_class_by_sidebar(); ?>">
				<div class="row">
					<div class="col-xs-12">
						<h1><?php single_cat_title(); ?></h1>
					</div>
				</div>
				<div class="row row-article">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php
					if (is_category(array(29,30,31,32,33))){
						echo "<div class='col-sm-4'>";
						get_template_part('loop-portfol');
						echo "</div>";
					}else{
						echo "<div class='col-xs-12'>";
						get_template_part('loop');
						echo "</div>";
					}
					?>

				<?php endwhile;
				else: echo "<div class='row'><div class='col-xs-12'><p>Нет записей.</p></div></div>"; endif; ?>
				</div>
				<?php echo "<div class='row'><div class='col-xs-12'>"; pagination(); echo "</div></div>"; ?>
			</div>

			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>