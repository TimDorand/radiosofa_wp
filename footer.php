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

<script>


    // MENU
    $(document).ready( function() {
        $("#menu-toggle").click(function(){
            $("#primary-menu").toggle();
        });
    });


    var ladate = new Date();
    var tab_jour = new Array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    console.log("Nous sommes un "+tab_jour[ladate.getDay()])

    function findMyText(needle, replacementText) {
        var myOldString = $(".haystack").html();
        var myNewString = myOldString.replace(needle, replacementText);
        $(".haystack").html(myNewString);

    }

    var haystackText = "";
    function findMyText2(needle, replacement) {
        if (haystackText.length == 0) {
            haystackText = document.getElementById("primary").innerHTML;
        }
        var match = new RegExp(needle, "ig");
        var replaced = "";
        if (replacement.length > 0) {
            replaced = haystackText.replace(match, replacement);
        }
        else {
            var boldText = "            " + needle + "            ";
            replaced = haystackText.replace(match, boldText);
        }
        console.warn(match)
        document.getElementById("primary").innerHTML = replaced;
    }

    document.addEventListener("DOMContentLoaded", (event) => {
        findMyText(tab_jour[ladate.getDay() -1], "Hier");
        findMyText(tab_jour[ladate.getDay()], "Aujourd'hui");
        findMyText(tab_jour[ladate.getDay() + 1], "Demain");
    });

</script>

</body>
</html>
