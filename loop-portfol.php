<?php
/**
* Запись в цикле (loop.php)
* @package WordPress
* @subpackage magl88-template
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<h2><?php the_title(); ?></h2>
	<?php if ( has_post_thumbnail() ) {
		$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
		echo '<div class="img-wrap"><a class="thumbnail fancybox" href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
		the_post_thumbnail('big-thumb');
		echo '</a></div>';
	 } ?>
	<div class="meta">
		<p>Категория: <?php the_category(',') ?></p>
	</div>
	<div class="text">
		<?php the_content(''); ?>
	</div>
</article>