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
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/BAUME.jpg");

$belaria = new Resident(
    "BELARIA",
    "VAGUES SYNTHETIQUES",
    '',
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/BELARIA.jpg");

$broski = new Resident(
    "BROSKI",
    "EXPÉDITION ÉLECTRONIQUE",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/BROSKI.jpg");

$elonaprime = new Resident(
    "ELONA",
    "COFFEE VIBE",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/ELONA-PRIME.jpg");

$charleeps = new Resident(
    "CHARLEEPS",
    "RIVIERA EXPRESS",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/CHARLEEPS.jpg");

$marsoc10 = new Resident(
    "MARS O10C",
    "BREAK A LEG",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/MARS-O10C.jpg");

$felix = new Resident(
    "FELIX",
    "SONORAMA",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/FELIX.jpg");

$girasol = new Resident(
    "GIRASOL",
    "LATITUDES LUNATIQUES",
    '',
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/GIRASOL.jpg");

$matso = new Resident(
    "MATSO",
    "ADN",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/MATSO.jpg");

$nofraje = new Resident(
    "NOFRAJE",
    "GLOBAL FREQUENCY",
    '',
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/NOFRAJE.jpg");


$planisphere = new Resident(
    "PLANISPHERE",
    "MUSIQUES POUR MOBILIER",
    '',
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/PLANISPHERE.jpg");


$sunaas = new Resident(
    "SUNAAS",
    "SLOW DOWN A MINUTE",
    '',
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/SUNAAS.jpg");


$tropicalites = new Resident(
    "TROPICALITES",
    "TRANSATLANTIQUES",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/TROPICALITES.jpg");

$monacogza = new Resident(
    "MONACO GZA",
    "Dschungel Kosmos",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/MONACO-GZA.jpg");


$rodrigueSoulgroove = new Resident(
    "RODRIGUE SOULGROOVE",
    "LE SILLON",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/RODRIGUE.jpg");


$mimi = new Resident(
    "MIMI",
    "FAUTEUIL CLUB",
    '',
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/MIMI-S.jpg");

$micropolis = new Resident(
    "MICROPOLIS",
    "MACROPHONE",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/MICROPOLIS.jpg");


$taka = new Resident(
    "TAKA",
    "GOGUETTE ASTRALE",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/TAKA.jpg");

$tomCoololo = new Resident(
    "TOM COOLOLO",
    "ARTEFACTS AUDITIFS",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/TOM-COOLOLO.jpg");

$toniDog = new Resident(
    "TONI DOG",
    "ÂMES SENSIBLES",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/TONI-DOG.jpg");

$fracas = new Resident(
    "BAXUA AND WAVEY CUTS",
    "FRACAS",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/BAXUA-_-WAVEY-CUTS.jpg");

$waveyCuts = new Resident(
    "WAVEY CUTS",
    "Aint Easy Being Wavey",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/WAVEY-SC.jpg");

$SBN6 = new Resident(
    "SBN6",
    "Lovecast",
    "",
    "/wp-content/uploads/2023/02/SBN6-lovecast-ep2.png");

$saintMisere = new Resident(
    "SAINT MISERE",
    "NEW PHONE. WHO DIS ?",
    "",
    "/https://www.radio-sofa.com/wp-content/uploads/2023/12/SAINT-MISERE.jpg");


$slim = new Resident(
    "SLIM SLIM",
    "Hot Chose",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/SLIM-SIM.jpg");


$kenzzza = new Resident(
    "KENZZZA",
    "Silky witchcraft",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/KENZZZA.jpg");


$paradisFiscal = new Resident(
    "PARADIS FISCAL",
    "Synthetic Music Company",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/PARADIS-FISCAL.jpg");

$maxKlank = new Resident(
    "MAX KLANK",
    "TAR",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/MAX-KLANK.jpg");


$kimKenis = new Resident(
    "KIM KENIS",
    "Same As It Ever Was",
    "",
    "/https://www.radio-sofa.com/wp-content/uploads/2023/12/KIM-KENIS.jpg");

$janAstasia = new Resident(
    "JAN ASTASIA",
    "Face A/B",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/JAN-ASTASIA.jpg");

$h2o = new Resident(
    "H2O",
    "Deep Dive",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/H2O.jpg");

$blanca = new Resident(
    "BLANCA BRUSCI",
    "Poetic Weapons",
    "",
    "https://www.radio-sofa.com/wp-content/uploads/2023/12/BLANCA-BRUSCI.jpg");

$troiscenttrois = new Resident(
        "/303",
  "Deep Ewing Show",
  "",
  "/wp-content/uploads/2023/12/303.jpg"
);

$boboxa = new Resident(
        "BOBOXA",
  "",
  "",
  "https://www.radio-sofa.com/wp-content/uploads/2023/12/BOBOXA.jpg"
);

$ensemble = new Resident(
        "Ensemble",
  "",
  "",
  "https://www.radio-sofa.com/wp-content/uploads/2023/12/ENSEMBLE-PODCAST.jpg"
);

$genouFragile = new Resident(
        "Genou Fragile",
  "Cataplasme",
  "",
  "https://www.radio-sofa.com/wp-content/uploads/2023/12/GENOU-FRAGILE.jpg"
);

$julojulo = new Resident(
        "Julo Julo",
  "Contemplation",
  "",
  "https://www.radio-sofa.com/wp-content/uploads/2023/12/JULO-JULO.jpg"
);


$residents = [$tomCoololo, $h2o, $blanca, $genouFragile, $fracas, $toniDog, $kenzzza, $paradisFiscal, $marsoc10, $julojulo, $saintMisere, $planisphere, $sunaas, $kimKenis, $slim, $janAstasia, $troiscenttrois, $nofraje, $taka, $maxKlank, $ensemble, $SBN6, $charleeps, $monacogza, $elonaprime, $boboxa, $matso, $tropicalites, $girasol, $felix, $baume, $micropolis, $rodrigueSoulgroove, $waveyCuts, $mimi, $belaria, $broski];
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

        $image = str_replace("<img", "<img loading=\"lazy\"", $image);
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


