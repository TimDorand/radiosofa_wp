<?php
/* Template Name: Sofas*/
?>

	<main id="primary" class="site-main">
<?php

$post = get_page_by_title('Sofas');
$content = $post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;
?>

	</main><!-- #main -->
