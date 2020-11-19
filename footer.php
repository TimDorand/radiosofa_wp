<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package radiosofa
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
            contact.radiosofa@gmail.com
			<!--<span class="sep"> | </span>-->
		</div>
        <div class="footer-line">
            <hr/>
        </div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="<?php echo site_url();?>/wp-content/themes/radiosofa/js/jquery_min_213.js"></script>
<script>
    $(function() {
        $("audio + a").click(function(e) {
            e.preventDefault();
            var song = $(this).prev('audio').get(0);

            if (song.paused) {
                song.play();
//         $(this).text("❙ ❙");
                $(this).addClass("pause");
                $(this).removeClass("play");
            }
            else {
                song.pause();
//         $(this).text("▶");
                $(this).addClass("play");
                $(this).removeClass("pause");
            }
        });
    });
</script>

</body>
</html>
