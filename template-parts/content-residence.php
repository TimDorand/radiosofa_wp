<div class="rs-title rs-title-light" style="display:none;">
    <!--    <div style="height: 32px;font-size:1rem; text-transform: uppercase" id="back-residence"><p>Tous les residents</p>
        </div>-->
    <div id="back-residence">
        <h2>TOUS LES RESIDENTS</h2>
    </div>
</div>

<?php
include('residents-data.php');

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
    if (isset($id)) {
      $this->id = $id;
    } else {
      $this->id = $name;
    }
  }
}



// $residents = [$tomCoololo, $h2o, $blanca, $genouFragile, $fracas, $toniDog, $kenzzza, $paradisFiscal, $marsoc10, $julojulo, $saintMisere, $planisphere, $sunaas, $kimKenis, $slim, $janAstasia, $troiscenttrois, $nofraje, $taka, $maxKlank, $ensemble, $SBN6, $charleeps, $monacogza, $elonaprime, $boboxa, $matso, $tropicalites, $girasol, $felix, $baume, $micropolis, $rodrigueSoulgroove, $waveyCuts, $mimi, $belaria, $broski];
$residents = [];

sort($all_residents);
foreach($all_residents as $resident) {
 $new_resident = new Resident($resident[0], $resident[1],$resident[2], $resident[3],$resident[4]);
 array_push($residents, $new_resident);
}

echo '<div class="rs-block-columns replay-images">';
foreach ($residents as $resident) {
  if(isset($resident->image) && $resident->image !== '') {
    echo '<div class="rs-block-column resident-item" data-resident-id="'. $resident->id . '">
    <figure class="rs-block-image size-large is-resized">
    <img src="' . $resident->image . '" alt="' . $resident->name . '" width="376" height="376"/>
    </figure>
    <div class="rs-title-mini rs-title-light">
    <div><h2>' . $resident->name . '</h2></div>
    </div>
    </div>';
    }
}
echo '</div>';

foreach ($residents as $resident) {
  if (!$resident->desc) {
    $resident->desc = "Redécouvrez les résidences de " . $resident->name . " ci dessous.";
  }

  echo '
    <div id="residence-' . $resident->id . '" class="residence-details">
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


