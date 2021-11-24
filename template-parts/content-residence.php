<div class="rs-title" style="display:none;width: 200px;height: 32px;">
    <div style="height: 32px;" id="back-residence"><p>Tous les residents</p></div>
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
    'Baume DJ/Producteur/Label Manager (Records or not Records) influencé par Hunee/Antal/Joe Claussel/Moby/Bicep  producteur des "love Edit" 
    
     Collectifs : White Label Radio, Rave Factory, Disco House Session, Soundmotion  Labels : Records or not Records, Fresh Take Records, Sengiley Recordings, The Third Turntable, Nymphony Records, Ghost of the Self, Soundmotion  
     
      Nom Résidence :   Je n\'ai pas de thème en particulier, j\'ai surtout envie de partager ma résidence avec des DJ qui m\'ont touchés musicalement/humainement, qui méritent d\'être écoutés et mis en avant. 
       J\'ai donc pensé au nom de "Tout quitter pour partir". Et comme ça dans les textes de présentations ça peut faire des phrases du genre :   "Aujourd\'hui, c\'est au tour de Baume de présenter sa nouvelle résidence : "Tout quitter pour partir" avec "Nom du DJ".  ou   "Au tour de Baume de nous présenter son nouvel invité pour sa résidence mensuelle : "Tout quitter pour partir" en compagnie de "Nom du DJ".  
       Enfin vous voyez l\'idée ? J\'suis partie un peu loin mais je vous avoue c\'est pas simple de trouver un nom, surtout sans thème en particulier    
       
       Citation Sofa :    "Do, Si, La, So, Fa, Mi, Ré, Do"  "Sur le plus beau Sofa du monde, on est jamais assis que sur son cul"  "Que celui qui est bien assis ne soit pas pressé de se lever"   
       Voilà les citations que j\'ai trouvé, la première je l\'ai inventé de toute pièce, c\'est un jeu d\'mot bidon que je viens de trouver haha (vous avez le droit de trouver ça nul hein). Les 2 autres sont des citations connues que j\'ai trouvé sur internet. Elles sont dans l\'ordre de mes préférences, j\'ai mis la dernière si vous cherchiez un truc plus "simple" et mignon, mais sinon je préfère les 2 premières.',
    "wp-content/uploads/2021/03/Baume-1.jpeg");

$belaria = new Resident(
    "BELARIA",
    "VAGUES SYNTHETIQUES",
    "Jeune DJ parisienne au futur plus que prometteur, Belaria a rejoint le collectif et label Friendsome en 2018. Depuis, elle a pu mixer dans des lieux phares de la capitale comme Les Bains, le Seguin ou encore à l'Hôtel Bourbon en tant que résidente. Ce sont ses influences disco et new-wave qui furent sa plus grande source d'inspiration, bien que l’éclectisme soit son mot d’ordre. Ses sets oscillent entre world-house, italo-disco ou encore indie dance. Elle a récemment pris part au collectif Le Venus Club ayant pour objectif de promouvoir la place de la femme au sein de la musique électronique. Retrouvez la aux côtés de ses acolytes avec leur nouveau trio OOO (Out Of Office), et prochainement pour ses premières sorties.",
    "/wp-content/uploads/2021/03/belaria-1-edited.jpeg");

$broski = new Resident(
    "BROSKI",
    "EXPÉDITION ÉLECTRONIQUE",
    "",
    "/wp-content/uploads/2021/03/broski-scaled.jpeg");

$charleeps = new Resident(
    "CHARLEEPS",
    "",
    "",
    "/wp-content/uploads/2021/03/charleeps.jpeg");

$falafef = new Resident(
    "FALAFEF",
    "",
    "",
    "/wp-content/uploads/2021/03/falafef-1-edited-1.jpg");

$felix = new Resident(
    "FELIX",
    "",
    "",
    "/wp-content/uploads/2021/03/felix-edited-1.jpg");

$girasol = new Resident(
    "GIRASOL",
    "LATITUDES LUNATIQUES",
    'Instigateur de Tropicalités, web-média avec lequel Radio Sofa fricote régulièrement, Girasol est tombé dans la potion latino-caribéenne en posant un temps ses valises outre-Atlantique, notamment au Brésil et en Colombie.  
    Mais, boulimique musical, son univers s’étend bien au-delà de ces latitudes latinas. Amoureux des musiques noires au sens le plus large qu’il soit, attaché aux racines d’un groove organique, et amateur de bizarreries proto-électroniques, Girasol érige en valeur cardinale l’éclectisme débridé et tourne ses sélections vers le soleil, tout comme la plante qui se cache derrière son petit nom. (SPOILER : le tournesol)
    
    Latitudes lunatiques est un espace d’exploration sonore exaltant la diversité musicale qui bouillonne à la surface du globe. 
    Les sonorités des deux hémisphères y dialoguent pour valoriser un groove schizophrénique qui s’assoit sur les préjugés. Attendez-vous à tout, et n’oubliez pas l’échauffement :  grands écarts géographiques et back-flips stylistiques garantis.',
    "/wp-content/uploads/2021/03/girasol-edited.jpeg");

$matso = new Resident(
    "MATSO",
    "",
    "",
    "/wp-content/uploads/2021/03/89092659_1117093465349544_8177255567056699392_o.jpeg");


$nofraje = new Resident(
    "NOFRAJE",
    "GLOBAL FREQUENCY",
    "- Qui es-tu ? 
Nofraje est un dj et collectionneur de disques.
Amateur du mix sur vinyles, chacune de ses sélections est parsemée d'influences des 4 coins du globe, sans frontière entre les genres.
Membre à part entière du collectif et label Cartes Records depuis ses débuts, il a écumé la plupart des spots de la ville lumière.


- Collectif & label ?
Cartes Records


- Le nom de ta résidence
Global Frequency


- Qu’est-ce que t’évoque le sofa en 1 ou 2 phrases ?
Modulable et moelleux, le sofa peut accueillir vos positions les plus fantasques!",
    "/wp-content/uploads/2021/03/nofraje-edited.png");


$planisphere = new Resident(
    "PLANISPHERE",
    "MUSIQUES POUR MOBILIER",
    "\"Nous avons un peu de mal pour le nom mais nous somme arrivé à : \"\"Musiques pour mobilier\"\".
On voulait faire référence à la musique d'ameublement.

Pour nous Sofa c'est :
Assis. Couché. Seul. À plusieurs. Des disques. Des siestes. Un voyage intérieur

Planisphère est un acteur de la scène de musique expérimentale francilienne. Créé en 2018, les ambiances planantes et les sonorités bruitistes définissent son identité, teintée des sons de l’au-delà. Planisphère met en lumière des artistes émergents à la croisée de l’électro, de la pop et de l’expérimental. Le collectif organise des événements pluridisciplinaires où se rencontrent musique et arts visuels. Planisphère est également un label et prévoit sa septième sortie le 14 mai 2021 avec le second EP 100% ambient de Prōtokol.
Facebook / Instagram / Bandcamp / Mixcloud / YouTube\"",
    "/wp-content/uploads/2021/03/planisphère-1-edited.jpg");


$sunaas = new Resident(
    "SUNAAS",
    "",
    "\"“Jouer ce que personne ne connaît mais que tout le monde aiment”. Voilà une phrase qui convient parfaitement à ce DJ et producteur parisien. Passionné d'électro, de breakbeat, d’UK garage, de trance, tech-house, ou encore downtempo, il n’arrête jamais d’explorer le spectre musicale dans le but de faire découvrir et de partager. Grand fan de sonorités 80’s, 90’s et 2000’s, il continue son voyage, convaincu que les meilleures tracks restent à être dénichées ou produites.

Petit mail concernant ma résidence. Vous avez mon press kit en pièce-jointe. Comme collectif/label, vous pouvez mettre La Boomerie pour le moment. 

Pour ma résidence, je pensais mettre en avant des sonorités que je n'ai pas trop l'habitude de jouer (downtempo, hip-hop, trip-hop, jazz, dub, etc..). Du coup voici quelques noms qui peuvent matcher :
- \"\"Slow down a minute\"\"
- \"\"Records under the scope\"\"
- \"\"A softer part of myself\"\"

Sinon, ce que m'évoque le sofa, je pense qu'être le cul posé dans un sofa c'est le meilleur moyen de digger et donc d'explorer la musique qu'on aime. \"",
    "/wp-content/uploads/2021/03/sunaas-1.jpeg");


$tropicalites = new Resident(
    "TROPICALITES",
    "",
    "",
    "/wp-content/uploads/2021/03/tropicalites.png");


$mimi = new Resident(
    "MIMI",
    "FAUTEUIL CLUB",
    "\"#1 Qui es-tu ? 
Mimi, aujourd'hui fondatrice de CTW Podcasts, une safe place dédiée à l'expression musicale et au partage de découvertes. Un passé musical bien rempli : 13 ans de piano, membre d'un orchestre et d'une chorale, collectionneuse de vinyles depuis mes 18 ans, ayant baigné dans une culture jazz / rock via un père guitariste amateur et passionné, de musiques afro-américaines. 

#2 Collectif & Label ? 
Fondatrice de CTW Podcasts, une safe place dédiée à l'expression musicale et au partage de découvertes. Un projet créé il y a 7 ans, initialement pour l'organisation de commandes groupées de vinyles à Lille qui a peu à peu évolué vers une plateforme de podcasts et de premieres (exclusivité digitiale d'une release vinyle)

#3 Nom de ta résidence
Fauteuil Club - le nom de l'émission  


#4 Qu'est-ce que t'évoque le sofa en 1 ou 2 phrases ?  
Sofa : n.m. Un nuage de coton dans lequel on se sent en sécurité, un lieu de partage et de réconfort. \"",
    "/wp-content/uploads/2021/06/Mimi-.jpg");

$micropolis = new Resident(
    "MICROPOLIS",
    "MACROPHONE",
    "",
    "/wp-content/uploads/2021/06/MICROPOLIS-invite-LOS3SALTOS.jpg");


$residents = [$baume, $belaria, $broski, $charleeps, $falafef, $felix, $girasol, $matso, $nofraje, $planisphere, $sunaas, $tropicalites, $mimi, $micropolis];

echo '<div class="rs-block-columns replay-images">';
foreach ($residents as $resident) {
    echo '<div class="rs-block-column resident-item">
        <div class="rs-title-mini rs-title-light">
            <div><h2>' . $resident->name . '</h2></div>
        </div>

        <figure class="rs-block-image size-large is-resized">
        <img src="' . $resident->image . '" alt="' . $resident->name . '" width="376" height="376"/>
        </figure>
    </div>';
}
echo '</div>';

foreach ($residents as $resident) {
    if(!$resident->desc){
        $resident->desc = "Redécouvrez les résidences de ".$resident->name." ci dessous.";
    }
    echo '
    <div id="residence-' . $resident->name . '" class="residence-details">
    <div class="rs-block-columns">
        <div class="rs-block-column width-50">
            <figure class="rs-block-image size-large">
            <img loading="lazy" width="500" height="500" src="' . $resident->image . '" alt="' . $resident->name . '"></figure>
        </div>
        <div class="rs-block-column width-50">
            <div class="rs-title rs-title-light rs-title-min-200"><div><h2>' . $resident->name . '</h2></div></div>
            <h3>' . $resident->residenceName . '</h3>
            <p>' . $resident->desc . '</p>
        </div>
    </div>
    <div class="rs-block-columns">
        <div class="rs-block-column">
            <div class="rs-title rs-title-light"><div><h2 style="width:30vw">ARCHIVES</h2></div></div>
        </div>
    </div>
    <div class="rs-block-columns residence-details-archives">';

    $categoryArticles = get_category_by_slug($resident->name);
    if($categoryArticles){
        $posts = get_posts(["numberposts" => -1, "category" => $categoryArticles->cat_ID]);
    }else{
        $posts = [];
    }

    foreach ($posts as $post) {
        $image = get_the_post_thumbnail($post, ["300", "300"]);
        echo '<div data-post-id="' . $post->post_name . '" class="convives-post">';
        echo $image;
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


