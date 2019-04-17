<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="../images/icon.png" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
<link rel="stylesheet" href="../css/site.css"/>
<link rel="stylesheet" href="../css/profils.css"/>
<meta charset="utf-8"/>
<title>FIG - Profils</title>
</head>
<body>

<?php include("header.php"); ?>

<div class="content" style="max-width:1200px">
	<header>
		<h1><b>Présentation & Profils</b></h1>
		<hr/>
	</header>
  <div class="tab">
    <div class="col">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../images/tanguy.png" style="width:150px;cursor:pointer;transition:0.25s" onclick="currentDiv(1)"/>
    </div>
    <div class="col">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../images/yanis.jpg" style="width:150px;cursor:pointer;transition:0.25s" onclick="currentDiv(2)"/>
    </div>
    <div class="col">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../images/jordan.png" style="width:150px;cursor:pointer;transition:0.25s" onclick="currentDiv(3)"/>
    </div>
	<div class="col">
      <img class="demo w3-opacity w3-hover-opacity-off" src="../images/marc.png" style="width:150px;cursor:pointer;transition:0.25s" onclick="currentDiv(4)"/>
    </div>
  </div>
  
  <div class="mySlides" style="display:none">
	<!--img src="images/tanguy.png" style="width:200px"/-->
	<h1>Tanguy DESGOUTTES</h1>
	<hr/>
	<p>Étant chef de projet et concepteur du projet, celui-ci me tient particulièrement à coeur. L'idée originale de Tales of the Apocalypse peut remonter jusqu'à 3 ans, le premier prototype s'appelait alors Projet AZ. Si le jeu a beaucoup évolué au cours des années, l'objectif principal est resté inchangé: satisfaire la question que j'ai pu souvent entendre "Que ferais-je lors d'une Apocalypse?". Cette idée de jeu m'a amené à découvrir l'informatique et à me familiariser avec de nombreux langages (de GML à C++). Au fil des années, je me suis découvert un intérêt tout particulier dans le développement de jeux vidéos et plus généralement des nouvelles technologies, la prise de décision lors du développement d'un projet me fascine. Ce projet est donc pour moi une des nombreuses raisons pourquoi j'ai rejoint l'EPITA. J'ai pu rencontrer et recruter des personnes compétentes et sérieuses qui, de par leurs différentes expériences, apportent un regard nouveau sur le projet. J'ai une confiance absolue en notre groupe et en la réussite du projet.</p>
	
	<h2>Ce que j'ai fait dans le projet</h2>
	<hr/>
	<h3>Première soutenance</h3>
	<p>
		<em>Recherche : </em> Après m'être familiarisé avec Unity, je me suis renseigné sur les différents moyens d'implémenter un mode multijoueur. Pour la génération, j'ai commencé par chercher à savoir si des méthodes de génération de ville existaient déjà, malheureusement les méthodes les plus proches de ce que je désirais ne me satisfaisaient pas. J'ai donc élargi cette recherche à l'ensemble des méthodes de génération procédurale, trouvant de nombreuses méthodes. Bien que ces méthodes n'étaient pas directement utiles au projet, elles m'ont permis de repenser la notion de génération procédurale.
	</p>
	<p><em>Conception : </em> Pour la partie multijoueur nous avons choisis d'utiliser Photon. Bien que Photon permette une gestion simple du multijoueur, la compréhension et la mise en place d'un tel système fut une première pour moi, au final j'ai mis en place la partie fonctionnelle du multijoueur, c'est-à-dire la connexion au serveur et la création et recherche de salle, par la suite amélioré par Yanis.
	</p>
	<p>
	Une fois ce système mis en place, j'ai travaillé sur l'implémentation d'un système de déplacement souris nous utilisons donc la fonction "Réseau de navigation" pour déplacer les personnages, le joueur sélectionne le ou les personnages qu'il souhaite contrôler et a juste à cliquer pour les déplacer. Dans la continuité de ce système, j'ai mis en place un système de permissions qui permet au joueur de jouer en équipe contre d'autre équipe, un joueur ne peut contrôler un personnage que si ce personnage est lié à son équipe. A noter aussi que chaque joueur et chaque équipe a une couleur attribuée qui s'affiche en surbrillance autour d'un personnage sélectionné.
	</p>
	<p>
	La génération de la ville a occupé sans aucun doute la plus grande partie de mon travail. Je souhaitais pouvoir créer une ville procéduralement que le joueur puisse explorer complètement. Nos routes sont principalement caractérisés par leurs "ouvertures" dans les directions cardinals, il suffit alors de relier des points d'intérêts entre eux en "ouvrant" au fur et à mesure la route. Pour l'instant, toutes les villes ont 9 points d'interêts plus ou moins reliés entre eux, les ouvertures Nord/Sud/Est/Ouest de la ville, un centre approximatif de la ville et 4 points répartis dans chaque cadrans de la ville. Une fois ce système mis en place, j'ai commencé à réfléchir à un moyen de mettre des bâtiments dans la ville. J'ai décidé de générer des bâtiments seulement à côté des routes, tout d'abord des bâtiments de petites tailles (carré de 1x1) simple à positionner face à la route puis des bâtiments plus grands (rectangle de 2*1). Au final, ce système génère une ville satisfaisante tout en étant extrêmement modulable, l'ajout et la suppression de bâtiment ne demandant même pas de regarder le code.
	</p>
	<p><em>A faire : </em>	Pour les prochaines soutenances, je dois finaliser la génération du monde. Je vais aussi implémenter le système de santé, de combat et d’artisanat.</p>
	

	<h2>Ce que ce projet m'a apporté</h2>
	<hr/>
	<p></p>
  </div>

  <div class="mySlides" style="display:none">
	<!--img src="images/yanis.jpg" style="width:200px"/-->
	<h1>Yanis CHAABANE</h1>
	<hr/>
	<p>Je suis en Sup, en A1. Je me suis pris d'une passion pour l'informatique il y a de cela 2 ans et je m’intéresse donc dans tout ce qui touche aux nouvelles technologies, aux langages de programmations … Je prends un grand plaisir à programmer dans n’importe quel langage à chaque nouvelle séance de travaux pratiques. De par cette passion j’ai d’abord fait une Terminale S avec option ISN où j’ai fait mes premiers pas dans la programmation et où j’ai pu pour la première fois coder dans différents langages de programmations mais surtout dans les domaines du web. Ce fut une satisfaction et une opportunité pour moi afin de savoir dans quelle branche je voulais me diriger. 
	</p>
	<p>Le projet d’ISN fut un projet important qui m’a permis de développer un jeu sur de longs mois de codages et m'a permis évidemment d'améliorer mes compétences dans les différents langages de programmation mais aussi de m'exercer au travail de groupe avec la répartition des tâches ce qui va pouvoir me servir dans ce nouveau projet.
	</p>
	<p>De par cette expérience que j’ai pu avoir l’année dernière je me sens prêt à relever de nouveaux défis lors de ce projet beaucoup plus important. J’ai hâte de pouvoir voir l’avancé de notre jeu et de nos compétences. Étant organisé et perfectionniste, je me donnerais à fond dans ce projet afin d’en pouvoir tirer un réel jeu qui serait capable de sortir sur les différents marchés de jeux vidéos.
	</p>
	<h2>Ce que j'ai fait dans le projet</h2>	
	<hr/>
	<h3>Première soutenance</h3>
	<p> 
		<em>Recherche : </em> Ne connaissant rien d’unity au début du projet j’ai d’abord suivi les nombreux tutoriels mis à disposition sur le site officiel d’unity pour prendre en main le moteur de jeu. Ensuite j’ai passé de nombreuses heures à me documenter sur les moyens d’établir un jeu en multijoueur celles-ci m’ont conduit à faire approuver au groupe l’utilisation de photon. Mes recherches ont aussi été orientés vers ma tâche principale, celle des menus et interfaces utilisateurs. J’ai donc appris à utiliser les éléments proposés par Unity et à les adapter à notre jeu. Cependant mes recherches ne sont pas restées seulement sur Unity. En effet, étant en partie responsable du site Web et malgré mes quelques connaissances dans ce domaine, j’ai dû aussi rechercher des moyens de faire héberger notre site afin qu’il soit disponible sur Internet. 
	</p>
	<p>
		<em>Conception : </em> Mon travail se découpe donc en trois parties : 
		<ul>
			<li>Le multijoueur où j’ai pu aider Tanguy à mettre en place les différents moyens d’accéder au mode multijoueur, de gérer les joueurs, la recherche de salle de jeu ou la création de celles-ci.</li>
			<li>Les menus et interfaces utilisateurs : J’ai dans un premier temps implémenté le menu principal, avec différents boutons pour choisir le mode de jeu souhaité, gérer les paramètres du jeu dans lesquelles on peut choisir le volume de la musique, la qualité des graphismes, ou encore la taille de l’écran, mais aussi des boutons pour quitter ou revenir en arrière. J’ai ensuite implémenté de nombreux éléments d’interfaces utilisateurs tels que des champs où mettre son nom ou encore le nom de la salle à créer ou à rejoindre. Dans le même sens des boutons ont été ajoutés pour se connecter au serveur de photon, rejoindre une salle ou la créer. Ensuite lorsque l’on rejoint la partie, une barre de chargement a été ajouté et finalement chaque joueur possède un inventaire.</li>
			<li>Concernant le site Web, je me suis occupé de générer les différentes pages HTML. Je me suis de plus occupé de faire l'hébergement du site grâce GitHub Pages avec le nom de domaine pris grâce à namecheap.com, pour que l'on puisse accéder au site par un lien ayant un nom nous représentant, nous Filiga.</li>
		</ul>
		<em>A faire : </em> Ce que je dois implémenter pour les prochaines soutenances sont d’autres interfaces utilisateurs comme un menu de pause. Pour le site Web il faudra continuer à le mettre à jour avec les différentes informations que nous pouvons lui apporter et essayer de le rendre plus “dynamique” c’est-à-dire gérer la mise en page du site selon les différents appareils sur lesquels il peut s’afficher.
	</p>

	<h2>Ce que ce projet m'a apporté</h2>
	<hr/>
	<p></p>
  </div>

  <div class="mySlides" style="display:none">
	<!--img src="images/jordan.png" style="width:200px"-->
	<h1>Jordan FAILLOUX</h1>
	<hr/>
	<p>Je viens de Tahiti et j’ai toujours été intéressé par l’informatique,c’est pour cela que j’ai choisi de faire une Terminale S option ISN. 
	Pour mon avenir professionnel,j’hésitais alors entre la médecine et l’informatique. Étant présente sur le territoire Polynésien, j’ai décidé de d’abord faire PACES. 
	Au cours de l’année, je me suis aperçu que ça ne me plaisait pas. J’ai donc cherché des écoles d’ingénieurs informatique en France et je suis arrivé ici, à EPITA.</p>
	<p>En ISN, j’ai eu l’occasion de faire un site internet et un jeu vidéo en python en tant que projet en équipe pour le bac. Ce dernier m’a permis de prendre goût à la réalisation 
	de programme en groupe.Pour ce projet, je compte utiliser mes expériences acquises précédemment et ne pas refaire les mêmes erreurs pour avoir un meilleur résultat final.</p>

	<h2>Ce que j'ai fait dans le projet</h2>
	<hr/>
	<h3>Première soutenance</h3>
	<p><em>Recherche: </em> Mon travail a été de faire la mise en page des différentes pages et autres fonctionnalités du site. J’ai donc dû me documenter sur les différents attributs du CSS. Pour la mise en commun j’ai fais des recherches pour comprendre le système de branche de git. J’ai également commencé à apprendre les bases de Unity en suivants des tutoriels en ligne notamment sur les moyens de gérer des évènements.
	</p>
	<p>
		<em>Conception: </em> Yanis et moi étions les seuls à avoir de l’expérience dans la création de site web et de nous deux, j’avais le plus de connaissance en CSS. Par conséquent, j’étais chargé de la conception visuelle du site. Pratiquement l’intégralité du site à été réalisée en CSS sauf l’interface d’affichage des profils qui a été fait en JavaScript. Il était impossible de faire une telle interface en CSS et n’ayant aucune connaissances en JavaScript, je me suis aidé d’un modèle que j’ai modifié pour obtenir ce que je recherchais. Lorsqu’un membre du groupe veut rajouter du contenu au site, il ajoute directement sur le fichier en Html et met à jour via GitHub. Ensuite je récupère le fichier pour faire la mise en page. Après avoir fini le travail à faire sur le site web, j’ai commencé à travailler sur le jeu. Ensuite Tanguy m’a expliqué leur avancé dans la programmation et le fonctionnement de plusieurs scripts, pour enfin réaliser un cycle jour-nuit avec un système d’heure en fonction de la rotation du soleil. 
	</p>
	<p><em>A faire: </em>Je suis encore en train de me familiariser avec Unity. Nous souhaitons pour la  prochaine soutenance implémenter de nouveaux comportements des PNJ (personnages non jouables) ainsi que les premiers ennemis (mort-vivants).
</p>

	<h2>Ce que ce projet m'a apporté</h2>
	<hr/>
	<p></p>
  </div>

  <div class="mySlides" style="display:none">
	<!--img src="images/marc.png" style="width:200px"-->
	<h1>Marc-Emmanuel RAIFFE</h1>
	<hr/>
	<p>J’ai toujours été intéressé par les sciences et ai été à l’aise dans ce domaine. Ces deux raisons m’ont assez naturellement orienté vers un bac S-SI et l’affection que 
	j’avais pour la programmation m’a amenéà EPITA. Même si je n’avais jamais vraiment appris de languages informatiques avant mes études supérieures je reste confiant pour le 
	projet car les travaux de groupes sont les activités où je suis le plus productif et j’ai toujours beaucoup apprécié les jeux vidéos ce qui m’a permis d’acquérir beaucoup de 
	connaissances maintenant utiles.</p>
	<p>En terme de compétence plus strictes je me suis découvert un niveau suffisant en programmation malgré le manque d’expérience. Cela dit je maîtrise
	certains logiciels comme magicvoxel qui permettront de créer les modèles 3D et illustrations utiles au projet.</p>

	<h2>Ce que j'ai fait dans le projet</h2>
	<hr/>
	<h3>Première soutenance</h3>
	<p><em>Recherche : </em> Après une familiarisation avec git et unity j’ai dû me renseigner sur le logiciel MagicaVoxel, bien que je l’utilisais déjà auparavant je ne savais pas comment exporter des modèles et comment leur attribuer certaines textures ou propriétés. J’ai également dû apprendre à utiliser un Animator sous Unity pour pouvoir mettre en place l’animation ainsi que me renseigner sur le fonctionnement des agents NavMesh pour les utiliser. Enfin j’ai fait un travail de recherches sur des choses que je n’ai pas encore eu l’occasion d’implémenter, notamment tout ce qui touche à une modification procédurale des modèles 3D qui nous permettrait d’avoir une diversité dans le jeu sans avoir à créer un nombre important de modèles différent.
	</p>
	<p>
	<em>Conception : </em>Comme prévu tous les modèles faits pour le jeu l'ont été en voxel. Le travail de modélisation a commencé avec des essais d'importation sous Unity avec le premier modèle fait pour le jeu, un réfrigérateur. Ce modèle a été suivi par beaucoup d'autres qui avaient pour but de supporter la génération procédurale et la recherche de chemin. Ainsi ont suivi des modèles de routes et de structures de bâtiments. Au vue de l'avancement prévu, la priorité était de trouver une génération viable avant de se lancer dans la conception globale. Une fois la génération finie j'ai pu me lancer dans la modélisation de bâtiments de différentes tailles et formes ainsi que d'objets qui seront interactifs. 
	</p>
	<p>
	J'ai débuté le travail d'animation entre la conception des premiers modèles de test et le début de conception des modèles finaux. 
	Il a fallu dans un premier temps créer nos personnages, premières cibles de notre animation. Initialement les modèles pensés pour les personnages devaient se faire sans membres animés mais ont vite évolués pour profiter des options que propose Unity. Ainsi le premier modèle en "T-POSE", posture standard pour l'animation où le personnage est debout, les bras levés sur le côté (comme un T), a vu le jour. Il a fallu le munir d'un squelette puis j'ai pu utiliser la banque d'animation humanoïde de Mixamo pour tester les animations (figure 15). Après quelques essais infructueux avec différents modèles arrivés à ce stade j'ai enfin pu trouver le style de modèles qui ont le meilleur rendu en animation. Il a ensuite simplement fallu me constituer une banque d'animation pour commencer à travailler sous Unity.
	</p>
	<p>
	Enfin j’ai utilisé ces animations dans un animator de unity et j’ai utilisé les informations que renvoyaient notre recherche de chemin pour passer d’un cube glissant sur une surface a notre modele marchant courant et tournant selon les endroits où il doit passer.
	</p>
	<p>
	<em>A faire : </em> D'ici les prochaines soutenances nous souhaitons avoir une progression linéaire de la création de modèles et d'éléments du jeu pour ne pas être pris de court, ce sera donc un travail de fond. Pour ce qui est de la forme nous souhaitons introduire des animations pour d'autres objets que nos personnages (ex : porte) mais également pouvoir ajouter des objets visibles sur les modèles 3D depuis le jeu lors de leur utilisation (ex : torche).
	</p>

	<h2>Ce que ce projet m'a apporté</h2>
	<hr/>

  </div>
</div>

<?php include("footer.php");?>

<script>
function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>

</body>
</html>