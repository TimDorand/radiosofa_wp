<div class="rs-title rs-title-light" style="display:none;">
    <!--    <div style="height: 32px;font-size:1rem; text-transform: uppercase" id="back-residence"><p>Tous les residents</p>
        </div>-->
    <div id="back-residence">
        <h2>TOUS LES RESIDENTS</h2>
    </div>
</div>

<?php

class Resident
{
    public $name;
    public $residenceName;
    public $desc;
    public $image;

    function __construct($name, $residenceName, $desc, $image)
    {
        $this->name = $name;
        $this->residenceName = $residenceName;
        $this->desc = nl2br($desc);
        $this->image = $image;
    }
}

$baume = new Resident(
    "BAUME",
    "TOUT QUITTER POUR PARTIR",
    '',
    "/wp-content/uploads/2022/10/BAUME-SC.jpg");

$belaria = new Resident(
    "BELARIA",
    "VAGUES SYNTHETIQUES",
    '',
    "/wp-content/uploads/2022/10/BELARIA-SC.jpg");

$broski = new Resident(
    "BROSKI",
    "EXPÉDITION ÉLECTRONIQUE",
    "",
    "/wp-content/uploads/2022/10/BROSKI-SC.jpg");

$elonaprime = new Resident(
    "ELONA",
    "COFFEE VIBE",
    "",
    "/wp-content/uploads/2022/11/ELONA-PRIME-SC.jpg");

$charleeps = new Resident(
    "CHARLEEPS",
    "RIVIERA EXPRESS",
    "",
    "/wp-content/uploads/2022/10/CHARLEEPS-SC.jpg");

$marsoc10 = new Resident(
    "MARS O10C",
    "BREAK A LEG",
    "",
    "/wp-content/uploads/2022/10/MARS-O10C-SC.jpg");

$felix = new Resident(
    "FELIX",
    "SONORAMA",
    "",
    "/wp-content/uploads/2021/03/felix-edited-1.jpg");

$girasol = new Resident(
    "GIRASOL",
    "LATITUDES LUNATIQUES",
    '',
    "/wp-content/uploads/2022/10/GIRASOL-SC.jpg");

$matso = new Resident(
    "MATSO",
    "ADN",
    "",
    "/wp-content/uploads/2022/10/MATSO-SC.jpg");

$nofraje = new Resident(
    "NOFRAJE",
    "GLOBAL FREQUENCY",
    '',
    "/wp-content/uploads/2022/10/NOFRAJE-SC.jpg");


$planisphere = new Resident(
    "PLANISPHERE",
    "MUSIQUES POUR MOBILIER",
    '',
    "/wp-content/uploads/2022/10/PLANISPHERE-SC.jpg");


$sunaas = new Resident(
    "SUNAAS",
    "SLOW DOWN A MINUTE",
    '',
    "/wp-content/uploads/2022/10/SUNAAS-SC.jpg");


$tropicalites = new Resident(
    "TROPICALITES",
    "TRANSATLANTIQUES",
    "",
    "/wp-content/uploads/2022/10/TROPICALITÉS-SC.jpg");

$monacogza = new Resident(
    "MONACO GZA",
    "Dschungel Kosmos",
    "",
    "/wp-content/uploads/2022/10/MONACO-GZA.jpg");


$rodrigueSoulgroove = new Resident(
    "RODRIGUE SOULGROOVE",
    "LE SILLON",
    "",
    "/wp-content/uploads/2022/10/RODRIGUE-SC.jpg");


$mimi = new Resident(
    "MIMI",
    "FAUTEUIL CLUB",
    '',
    "/wp-content/uploads/2022/10/MIMI-SC.jpg");

$micropolis = new Resident(
    "MICROPOLIS",
    "MACROPHONE",
    "",
    "/wp-content/uploads/2022/10/MICROPOLIS-SC.jpg");


$taka = new Resident(
    "TAKA",
    "GOGUETTE ASTRALE",
    "",
    "/wp-content/uploads/2022/10/TAKA-SC.jpg");

$tomCoololo = new Resident(
    "TOM COOLOLO",
    "ARTEFACTS AUDITIFS",
    "",
    "/wp-content/uploads/2022/10/TOM-COOLOLO-SC.jpg");

$toniDog = new Resident(
    "TONI DOG",
    "ÂMES SENSIBLES",
    "",
    "/wp-content/uploads/2022/10/TONI-DOG-SC.jpg");

$fracas = new Resident(
    "BAXUA AND WAVEY CUTS",
    "FRACAS",
    "",
    "/wp-content/uploads/2022/10/FRACAS_-BAXUA-_-WAVEY-CUTS-EP1.png");

$waveyCuts = new Resident(
    "WAVEY CUTS",
    "Aint Easy Being Wavey",
    "",
    "/wp-content/uploads/2022/10/FRACAS_-BAXUA-_-WAVEY-CUTS-EP1.png");

$SBN6 = new Resident(
    "SBN6",
    "Lovecast",
    "",
    "/wp-content/uploads/2023/02/SBN6-lovecast-ep2.png");

$saintMisere = new Resident(
    "SAINT MISERE",
    "NEW PHONE. WHO DIS ?",
    "",
    "/wp-content/uploads/2022/06/sainte-misere-residence-scaled.jpg");

$saintMisere = new Resident(
    "SAINT MISERE",
    "NEW PHONE. WHO DIS ?",
    "",
    "/wp-content/uploads/2022/10/SAINT-MISERE-SC.jpg");


$slim = new Resident(
    "SLIM SLIM",
    "Hot Chose",
    "",
    "/wp-content/uploads/2022/10/SLIM-SIM-SC.jpg");


$kenzzza = new Resident(
    "KENZZZA",
    "Silky witchcraft",
    "",
    "/wp-content/uploads/2022/10/KENZZZA.jpg");


$paradisFiscal = new Resident(
    "PARADIS FISCAL",
    "Synthetic Music Company",
    "",
    "/wp-content/uploads/2022/10/PARADIS-FISCAL.jpg");

$maxKlank = new Resident(
    "MAX KLANK",
    "TAR",
    "",
    "/wp-content/uploads/2022/11/MAX-KLANK.jpg");


$kimKenis = new Resident(
    "KIM KENIS",
    "Same As It Ever Was",
    "",
    "/wp-content/uploads/2023/01/KIM-KENIS-01-23-1-1024x1024.png");


$residents = [$tomCoololo, $fracas, $planisphere, $sunaas, $kimKenis, $SBN6, $nofraje, $maxKlank, $charleeps, $toniDog, $slim, $kenzzza, $paradisFiscal, $monacogza, $elonaprime, $broski, $saintMisere, $matso, $taka, $marsoc10, $tropicalites, $girasol, $felix, $baume, $micropolis, $rodrigueSoulgroove, $waveyCuts, $mimi, $belaria];
/*sort($residents);*/

echo '<div class="rs-block-columns replay-images">';
foreach ($residents as $resident) {
    echo '<div class="rs-block-column resident-item">
        <figure class="rs-block-image size-large is-resized">
          <img src="' . $resident->image . '" alt="' . $resident->name . '" width="376" height="376"/>
        </figure>
          <div class="rs-title-mini rs-title-light">
            <div><h2>' . $resident->name . '</h2></div>
        </div>
    </div>';
}
echo '</div>';

foreach ($residents as $resident) {
    if (!$resident->desc) {
        $resident->desc = "Redécouvrez les résidences de " . $resident->name . " ci dessous.";
    }
    $residentId = str_replace(' ', '_', $resident->name);

    echo '
    <div id="residence-' . $residentId . '" class="residence-details">
    <div class="rs-block-columns">
        <div class="rs-block-column width-50">
            <figure class="rs-block-image size-large">
            <img loading="lazy" width="500" height="500" src="' . $resident->image . '" alt="' . $resident->name . '"></figure>
        </div>
        <div class="rs-block-column width-50">
            <div class="rs-title rs-title-light"><div><h2>' . $resident->name . '</h2></div></div>
            <h3>' . $resident->residenceName . '</h3>
            <p>' . $resident->desc . '</p>
        </div>
    </div>
    <div class="rs-block-columns">
        <div class="rs-block-column">
            <div class="rs-title rs-title-light"><div><h2>ARCHIVES</h2></div></div>
        </div>
    </div>
    <div class="rs-block-columns residence-details-archives">';

    $categoryArticles = get_category_by_slug($resident->name);
    if ($categoryArticles) {
        $posts = get_posts(["numberposts" => -1, "category" => $categoryArticles->cat_ID]);
    } else {
        $posts = [];
    }

    foreach ($posts as $post) {
        $image = get_the_post_thumbnail($post, ["300", "300"]);
        echo '<div data-post-id="' . $post->post_name . '" class="convives-post">';
        echo $image;
        if (strpos($post->post_content, 'btn-replay') !== false) {
            echo '<span class="play-hover replay-present">&#9654;</span>';
        } else {
            echo '<span class="play-hover no-replay">&#10710;</span>';
        }
        echo $post->post_content;
        echo '</div>';
    }
    echo '</div></div>';
    /*wp_reset_postdata();*/
}
?>


<div style="display:none">
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
    radiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofaradiosofa
</div>
</div>


