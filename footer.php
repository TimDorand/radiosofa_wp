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
</div> <!-- .page-body -->

<footer id="colophon" class="site-footer">
    <div class="site-info">
        <!--<p>contact.radiosofa@gmail.com</p>-->
        <!--<span class="sep"> | </span>-->
    </div>
    <!--<div class="footer-line">
        <hr/>
    </div>--><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>


    // MENU
    $(document).ready(function () {
        $("#menu-toggle").click(function () {
            $("#primary-menu").toggle();
        });
    });


    var ladate = new Date();
    var tab_jour = new Array("dimanche", "lundi", "mardi", "mercredi", "jeudi", "vendredi", "samedi");
    console.log("Nous sommes un " + tab_jour[ladate.getDay()]);

    function findMyText(needle, replacementText) {
        var myOldString = $("#vsel").html();
        var myNewString = myOldString.replaceAll(needle, replacementText);
        $("#vsel").html(myNewString);

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
        } else {
            var boldText = "            " + needle + "            ";
            replaced = haystackText.replace(match, boldText);
        }
        console.warn(match)
        document.getElementById("vsel").innerHTML = replaced;
    }

    document.addEventListener("DOMContentLoaded", (event) => {
        findMyText(tab_jour[ladate.getDay()], "Aujourd'hui");
        /*findMyText(tab_jour[ladate.getDay() + 1], "Demain");*/
    });

    $(document).ready(function () {
        $("iframe").hide();
        $(".btn-replay").click(function(){
            $('audio').each(function(){
                this.pause(); // Stop playing
                this.currentTime = 0; // Reset time
            });
            $(this).parent().find("iframe").show();

        })

    })


</script>

</body>
</html>
