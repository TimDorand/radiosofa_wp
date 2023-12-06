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
    public $id;
    public $name;
    public $residenceName;
    public $desc;
    public $image;

    function __construct($name, $residenceName, $desc, $image, $id)
    {
        $this->name = $name;
        $this->residenceName = $residenceName;
        $this->desc = nl2br($desc);
        $this->image = $image;
        if(!$id){
            $this->id = $name;
        }else{
            $this->id = $id;
        }
    }
}

$baume = new Resident(
    "BAUME",
    "TOUT QUITTER POUR PARTIR",
    '',
    "/wp-content/uploads/2023/12/BAUME.jpg", null);

$belaria = new Resident(
    "BELARIA",
    "VAGUES SYNTHETIQUES",
    '',
    "/wp-content/uploads/2023/12/BELARIA.jpg", null);

$broski = new Resident(
    "BROSKI",
    "EXPÉDITION ÉLECTRONIQUE",
    "",
    "/wp-content/uploads/2023/12/BROSKI.jpg", null);

$elonaprime = new Resident(
    "ELONA",
    "COFFEE VIBE",
    "",
    "/wp-content/uploads/2023/12/ELONA-PRIME.jpg", null);

$charleeps = new Resident(
    "CHARLEEPS",
    "RIVIERA EXPRESS",
    "",
    "/wp-content/uploads/2023/12/CHARLEEPS.jpg", null);

$marsoc10 = new Resident(
    "MARS O10C",
    "BREAK A LEG",
    "",
    "/wp-content/uploads/2023/12/MARS-O10C.jpg", null);

$felix = new Resident(
    "FELIX",
    "SONORAMA",
    "",
    "/wp-content/uploads/2023/12/FELIX.jpg", null);

$girasol = new Resident(
    "GIRASOL",
    "LATITUDES LUNATIQUES",
    '',
    "/wp-content/uploads/2023/12/GIRASOL.jpg", null);

$matso = new Resident(
    "MATSO",
    "ADN",
    "",
    "/wp-content/uploads/2023/12/MATSO.jpg", null);

$nofraje = new Resident(
    "NOFRAJE",
    "GLOBAL FREQUENCY",
    '',
    "/wp-content/uploads/2023/12/NOFRAJE.jpg", null);


$planisphere = new Resident(
    "PLANISPHERE",
    "MUSIQUES POUR MOBILIER",
    '',
    "/wp-content/uploads/2023/12/PLANISPHERE.jpg", null);


$sunaas = new Resident(
    "SUNAAS",
    "SLOW DOWN A MINUTE",
    '',
    "/wp-content/uploads/2023/12/SUNAAS.jpg", null);


$tropicalites = new Resident(
    "TROPICALITES",
    "TRANSATLANTIQUES",
    "",
    "/wp-content/uploads/2023/12/TROPICALITES.jpg", null);

$monacogza = new Resident(
    "MONACO GZA",
    "Dschungel Kosmos",
    "",
    "/wp-content/uploads/2023/12/MONACO-GZA.jpg", null);


$rodrigueSoulgroove = new Resident(
    "RODRIGUE SOULGROOVE",
    "LE SILLON",
    "",
    "/wp-content/uploads/2023/12/RODRIGUE.jpg", null);


$mimi = new Resident(
    "MIMI",
    "FAUTEUIL CLUB",
    '',
    "/wp-content/uploads/2023/12/MIMI-S.jpg", null);

$micropolis = new Resident(
    "MICROPOLIS",
    "MACROPHONE",
    "",
    "/wp-content/uploads/2023/12/MICROPOLIS.jpg", null);


$taka = new Resident(
    "TAKA",
    "GOGUETTE ASTRALE",
    "",
    "/wp-content/uploads/2023/12/TAKA.jpg", null);

$tomCoololo = new Resident(
    "TOM COOLOLO",
    "ARTEFACTS AUDITIFS",
    "",
    "/wp-content/uploads/2023/12/TOM-COOLOLO.jpg", null);

$toniDog = new Resident(
    "TONI DOG",
    "ÂMES SENSIBLES",
    "",
    "/wp-content/uploads/2023/12/TONI-DOG.jpg", null);

$fracas = new Resident(
    "BAXUA AND WAVEY CUTS",
    "FRACAS",
    "",
    "/wp-content/uploads/2023/12/BAXUA-_-WAVEY-CUTS.jpg", null);

$waveyCuts = new Resident(
    "WAVEY CUTS",
    "Aint Easy Being Wavey",
    "",
    "/wp-content/uploads/2023/12/WAVEY-SC.jpg", null);

$SBN6 = new Resident(
    "SBN6",
    "Lovecast",
    "",
    "/wp-content/uploads/2023/02/SBN6-lovecast-ep2.png", null);

$saintMisere = new Resident(
    "SAINT MISERE",
    "NEW PHONE. WHO DIS ?",
    "",
    "/wp-content/uploads/2023/12/SAINT-MISERE.jpg", null);


$slim = new Resident(
    "SLIM SLIM",
    "Hot Chose",
    "",
    "/wp-content/uploads/2023/12/SLIM-SIM.jpg", null);


$kenzzza = new Resident(
    "KENZZZA",
    "Silky witchcraft",
    "",
    "/wp-content/uploads/2023/12/KENZZZA.jpg", null);


$paradisFiscal = new Resident(
    "PARADIS FISCAL",
    "Synthetic Music Company",
    "",
    "/wp-content/uploads/2023/12/PARADIS-FISCAL.jpg", null);

$maxKlank = new Resident(
    "MAX KLANK",
    "TAR",
    "",
    "/wp-content/uploads/2023/12/MAX-KLANK.jpg", null);


$kimKenis = new Resident(
    "KIM KENIS",
    "Same As It Ever Was",
    "",
    "/wp-content/uploads/2023/12/KIM-KENIS.jpg", null);

$janAstasia = new Resident(
    "JAN ASTASIA",
    "Face A/B",
    "",
    "/wp-content/uploads/2023/12/JAN-ASTASIA.jpg", null);

$h2o = new Resident(
    "H2O",
    "Deep Dive",
    "",
    "/wp-content/uploads/2023/12/H2O.jpg", null);

$blanca = new Resident(
    "BLANCA BRUSCI",
    "Poetic Weapons",
    "",
    "/wp-content/uploads/2023/12/BLANCA-BRUSCI.jpg", null);

$troiscenttrois = new Resident(
        "/303",
  "Deep Ewing Show",
  "",
  "/wp-content/uploads/2023/12/303.jpg",
  "303"
);

$boboxa = new Resident(
        "BOBOXA",
  "Mind The Gap",
  "",
  "/wp-content/uploads/2023/12/BOBOXA.jpg",
  null
);

$ensemble = new Resident(
        "Ensemble",
  "",
  "",
  "/wp-content/uploads/2023/12/ENSEMBLE-PODCAST.jpg",
  null
);

$genouFragile = new Resident(
        "Genou Fragile",
  "Cataplasme",
  "",
  "/wp-content/uploads/2023/12/GENOU-FRAGILE.jpg",
  null
);

$julojulo = new Resident(
        "Julo Julo",
  "Contemplation",
  "",
  "/wp-content/uploads/2023/12/JULO-JULO.jpg",
  null
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

    $categoryArticles = get_category_by_slug($resident->id);
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


