<?php

/*
Template Name: Convives
*/

?>

	<main id="primary" class="site-main">
          convives

<?php

$post = get_page_by_title('Convives');
$content = $post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;
?>


	</main><!-- #main -->
