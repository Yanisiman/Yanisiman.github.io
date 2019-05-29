<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="../images/icon.png" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
<link rel="stylesheet" href="../../css/site.css"/>
<link rel="stylesheet" href="../../css/annexes.css"/>
<link rel="stylesheet" type="text/css" href="../../css/responsive.css">
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
	<div class="paragraph">
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

	</div>

	<h3>Deuxième soutenance</h3>
	<div class="paragraph">

	<p><em>Conception : </em> Pour cette soutenance, j’ai implémenté la génération du monde, le systeme de sante, le système d’artisanat. Pour la génération du monde, j’ai tout d’abord améliore la génération de la ville avec des ruelles dynamiques et l’apparition de bâtiment 2 x 2. Le monde se génère avec des biomes différents (pour l’instant il y a le biome arid forest et plaine), des villes et des villages sont placées aléatoirement, les villages sont des villes plus petites et avec moins de connexions de routes.

Ensuite, j’ai implémenté le système de placement de meuble et de décorations. On place des emplacements caractérise par une liste de meuble avec leur chance d'apparaître dans les batiments, on n’a pas besoin de toucher au code pour ajouter des emplacements. 

Comme annoncé dans le cahier des charges, nous souhaitons donner une identité au personnages. Lors de la création d'un personnage, des traits lui sont attribués, ces traits modifient les caractéristiques du personnages, par exemple le trait "fort” donne +10 à la force du personnage. Ce système de trait permettra au joueur de s'attacher plus facilement à ses personnages, ainsi que rendre ces personnages plus mémorables. 

J’ai implémenté un système de santé relativement complexe. Chaque personnage à plusieurs parties du corps avec des spécificités différentes(tête, jambes, torses, bras, mains etc). Chaque partie du corps peut avoir des blessures. Chaque blessure pouvant avoir des effets différents (saignement, infection, fracture etc).

Avec ce système de santé existe le système de combat, chaque personnage peut s'équiper d'arme et d'armure. Les armes ont des caractéristiques nombreuses: à distance ou non, tranchante, dégât de l'arme, vitesse d'attaque etc. Les armures en ont aussi: résistance au coupure, résistance à la température etc.

Pour illustrer ces deux systèmes prenons un exemple, un personnage en attaque un autre avec un sabre, s'il réussit le personnage est coupé à la jambe, la blessure va saigner, il risque de mourir si son stock de sang se vide. Aussi, comme c'est la jambe qui été touché, sa vitesse de déplacement change grandement. De plus, si la coupure est trop importante la jambe est entièrement coupé, le personnage perd alors sa jambe et son pied. Enfin, la douleur provoqué par la blessure affecte les capacités du personnages et peut le faire s'évanouir.

Pour fini, j’ai implémenté un système de construction ou les joueurs peuvent placer des plans de construction, pour l’instant la construction apparaît directement mais sur le long terme ,les personnages pourront finir la construction en utilisant leurs ressources.

	</p>
	<p><em>A faire : </em>	Aussi, pour la prochaine soutenance, je finirai le système de santé en ajoutant les notions de maladie et de température et la possibilité de soigner les blessures ainsi qu’un système de connaissance.</p>
	</div>

	<h3>Troisième soutenance</h3>
	<div class="paragraph">
		<p>
			Pour la troisième soutenance, la génération du monde fut finalisée par une optimisation générale du processus, principalement lors de la génération de la fôret, des routes et des bâtiments. La génération du monde et des villes étant donc finie, il ne restait plus qu'à utiliser le système de placement de "Props" créé pour la deuxième soutenance. On a alors pu meubler les bâtiments sans toucher au code. Ce système de placement a été amélioré par l'ajout de la notion du "PropMarkerMaster" qui permet de regrouper plusieurs emplacements de meubles sous une même condition de génération. Par exemple, le placement d'une commode dans un appartement ne dépend ni n'influe sur les autres meubles de l'appartement, maintenant imaginons qu'on veuille rendre certains appartements plus intéressants en faisant apparaître ce qui pourrait ressembler à un camp abandonné de survivants, on peut alors utiliser ce système de "PropMarkerMaster" pour rassembler des "Props" liés exclusivement à ce camp comme un feu de camp, des matelas, des caisses, des bidons remplis d'eau et même des zombies. Ces "Props" ne peuvent apparaître que si le camp apparaît. Ce nouveau système permet donc de créer des ambiances et des environnements plus intéressants, le monde semblant alors vivant.
		</p>

		<p>
			Pour cette soutenance finale, j'ai amélioré la visibilité des actions dans le menu d'actions décrit par Yanis dans la partie précédente. J'ai donc rajouté des noms d'actions dynamiques directement influencées par la spécificité d'une action par exemple le nom de l'action de l'attaque d'un personnage avec un marteau n'est plus "Attack Melee 1" (Attaque de mêlée 1) mais "Hit with SledgeHammer" (Frapper avec un marteau), le nom s'adapte ici en fonction du type de dégât de l'arme et son nom. L'apparition des actions dans la liste est aussi dynamique, prenons en exemple l'action de mettre un bandage. Si le personnage ne saigne pas, l'action n'apparaît pas dans la liste d'action, sinon l'action apparaît mais est grisée si le personnage n'a pas de bandage. Ces changements permettent d'augmenter la visibilité du joueur vis-à-vis de la liste des actions, bien que petits ils font partie de l'opération de polissage effectuée pour la soutenance finale.		
		</p>

		<p>
			Je me suis aussi occupé d'implémenter différents systèmes dans le jeu tels que le temps d'action à attendre avant de pouvoir effectuer une action. Ce temps est spécifique à chaque type d'action. J'ai aussi ajouté un système de progression, d'expérience, un système de santé et de température, un système de construction, de destruction et de recyclage, un système de porte. Enfin j'ai implémenté l'agriculture et amélioré le système d'artisanat.
		</p>

	</div>

	<h2>Ce que ce projet m'a apporté</h2>
	<hr/>
	<p>L'expérience du projet jusqu'à présent a pour moi été utile et révélatrice sur plusieurs plans. Tout d'abord sur le plan de la programmation j'ai pu grandement m'améliorer et me familiariser avec les codes à respecter pour travailler en équipe. Le fait d'apprendre en autodidacte à utiliser Unity m'a aussi permis de changer mes méthodes d'apprentissage, une rigueur plus importante étant nécessaire. Sur le plan du travail d'équipe, ayant été désigné chef de projet, j'ai pu expérimenter les meilleurs moyens de répartir le travail au sein du groupe et de garder ce dernier soudé et motivé, expérience et pratiques qui me seront à coup sûr utiles dans le futur.</p>
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
	<div class="paragraph">
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
</div>
	<h3>Deuxième soutenance</h3>
	<div class="paragraph">
	<p>
		<em>Conception : </em> Mon travail se découpe donc en trois parties : 
		<ul>
			<li>Le multijoueur où j’ai modifié la recherche de salles de jeux grâce aux fonctions proposées par Photon, la création de ces salles en ajoutant des paramètres propres à notre jeu et l’attente dans la salle où j’ai implémenté le système d’équipes, avec des chefs d’équipes et le chef de la salle qui ont des droits supérieurs par rapport aux autres joueurs.</li>
			<li>Les menus et interfaces utilisateurs : J’ai modifié les différents menus avec les différentes images fournies par Marc. Ensuite j’ai modifié les différents éléments interfaces utilisateurs présents dans la connexion au mode multijoueur avec par exemple l’affichage des équipes et des joueurs lors du temps d’attente de partie dans la salle. Dans le jeu j’ai modifié le boîte d’informations des personnages, la barre de référence aux personnages et aussi les interfaces du jeu tels que l’interface du personnage ou l’inventaire des meubles. L’interface de chaque personnage contient 4 onglets différents : l’onglet inventaire possédant les différents objets du personnage, l’onglet équipement dans lequel se trouvent les objets qui sont équipés au personnage, l’onglet artisanat qui permet de faire des recettes afin de créer de nouveaux objets et enfin l’onglet santé dans lequel sont affichés les différentes statistiques de santé du personnage et des informations sur ses blessures. Finalement j’ai ajouté une barre de construction composée de plusieurs boutons qui permettent de lancer le mode construction et de construire l’objet sélectionné.</li>
			<li>Concernant le site Web, je me suis occupé de la maintenance du site. J'ai aussi commencé à travailler sur une version du site utilisant un serveur pour l'implémentation d'un site dynamique avec une base de données afin d'avoir des utilisateurs qui peuvent se connecter ou créer des comptes. Ils peuvent aussi envoyer des messages d'avis du jeu sur la page d'accueil ou encore consulter leur page de profil avec les différentes informations concernant leur compte.</li>
		</ul>
		<em>A faire : </em>Ce que je dois implémenter pour les prochaines soutenances sont un canal de communication pour que les joueurs puissent discuter entre eux et polir les différentes interfaces utilisateurs pour en avoir un meilleur rendu. Pour le site Web il faudra continuer à le mettre à jour avec les différentes informations que nous pouvons lui apporter et finaliser les éléments liés à la base de données.
	</p>
</div>

	<h2>Troisième soutenance</h2>
	<div class="paragraph">
		<p>
			Pour la troisième soutenance, je me suis occupé de faire un système de communications entre joueurs lors de la partie. Ce système de communication permet donc d'envoyer des messages soit aux joueurs de son équipe, soit à tous les joueurs de la partie en commençant le message par "/all". Ces messages sont transmis à tous les autres joueurs grâce au serveur Photon, récupérés et affichés dans l'espace de communication.

			Pour cette dernière soutenance le but principal au niveau des menus et interfaces utilisateurs était de peaufiner le rendu visuel pour avoir quelque chose de plus attirant visuellement.

		</p>
		<p> 
			Je me suis donc occupé d'améliorer les polices d'écritures, les couleurs et les formes des différents éléments de menus ou d'interfaces utilisateurs. J'ai aussi implémenté de nouveaux éléments de menus comme les options qui sont maintenant disponibles à partir du menu de pause dans lequel on peut ainsi attribuer des touches pour différentes actions, par exemple pour se déplacer, pour faire apparaître les interfaces du joueur ou le mode construction. Si le joueur est dans le mode "Solo", alors avant de lancer la partie il aura la possibilité d'appuyer sur un bouton pour charger une sauvegarde antérieur et au moment de quitter la partie il aura la possibilité entre deux boutons, un pour sauvegarder sa partie et un pour quitter complètement le jeu. Du côté des interfaces utilisateurs j'ai amélioré le système d'interaction du personnage avec d'autres personnages ou avec des objets. Maintenant lorsque le joueur clique, en ayant au moins un personnage sélectionné, sur un objet ou un autre personnage, une liste d'actions sous formes de boutons apparaît au-dessus de la tête du personnage. Ensuite avec l'implémentation d'un canal de communication j'ai ajouté une boîte de dialogue dans laquelle se trouve un champ pour écrire le message, un bouton pour envoyer le message et un champ dans lequel tous les messages sont affichés. De plus, j'ai ajouté un guide d'apprentissage dans le mode "Solo" qui donc fait apparaître des messages à l'écran au moment où certaines actions sont faites avec des messages adaptés à ces moments.
		</p>

		<p>
			Pour la troisième soutenance, je me suis occupé de toute la partie "Solo" du jeu: j'ai donc du intégrer tous les éléments mis en oeuvre dans le multijoueur mais sans utiliser de réseau. J'ai donc adapter les différentes fonctions mises en places utilisant du réseau pour pouvoir se jouer de façon hors-ligne.
		</p>
		<p>
			J'ai aussi implémenté un système de sauvegarde dans le mode "Solo". Le joueur peut donc décider au moment de choisir le mode de jeu de reprendre au niveau d'une ancienne sauvegarde ou de repartir de zéro et lorsqu'il décide de quitter le jeu il peut choisir de sauvegarder sa partie ou bien de quitter complètement. Ce système de sauvegarde garde en mémoire toutes les caractéristiques des différents personnages contrôlés par le joueur au moment où celui-ci a sauvegardé la partie. Ses caractéristiques sont : son nom, ses traits de caractères, ses compétences et statistiques mais aussi son inventaire, ses équipements et sa santé.
		</p>

		<p>
			Encore dans le mode "Solo" j'ai mis en place un petit guide d'apprentissage pour le joueur qui au lancement du jeu pourra voir des messages lui indiquant les principales fonctionnalités qui sont disponibles dans le jeu et les manières de les effectuer. Il aura ainsi la possibilité de comprendre comment rentrer dans le jeu, se déplacer, zoomer, faire apparaître des personnages, etc.
		</p>

	</div>


	<h2>Ce que ce projet m'a apporté</h2>
	<hr/>
	<p>Après 6 mois de travail acharné sur ce projet, je peux dire que celui-ci m'a apporté de nombreuses choses. En effet il m'a permis de travailler sur le coté programmation et de m'améliorer dans ce domaine mais aussi de me familiariser avec de nouveaux éléments tel qu'Unity ou encore du côté du site Web.

Cet apport de connaissances n'est pas négligeable puisqu'elles pourront nous resservir à tout moment le long de notre cursus scolaire ou même plus tard en tant qu'ingénieur.

Ce projet m'a aussi apporté beaucoup pour mon futur métier d'ingénieur avec la réalisation du projet en groupe, nous apprenant donc à mieux nous organiser et à mieux gérer la division du travail et de l'échange d'informations entre membres afin de toujours être au courant des avancées des autres. 

J'ai aussi pu apprendre à toujours chercher des solutions aux problèmes que nous rencontrons et de persévérer jusqu'à la réussite et même si des fois, psychologiquement, c'est dur de rester bloquer pendant des heures sur un même problème, j'ai appris à ne pas lâcher car c'est un travail de groupe et je ne peux pas juste abandonner et laisser les autres se débrouiller avec les problèmes que je leur ai laissé.</p>
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
	<div class="paragraph">
	<p><em>Recherche: </em> Mon travail a été de faire la mise en page des différentes pages et autres fonctionnalités du site. J’ai donc dû me documenter sur les différents attributs du CSS. Pour la mise en commun j’ai fais des recherches pour comprendre le système de branche de git. J’ai également commencé à apprendre les bases de Unity en suivants des tutoriels en ligne notamment sur les moyens de gérer des évènements.
	</p>
	<p>
		<em>Conception: </em> Yanis et moi étions les seuls à avoir de l’expérience dans la création de site web et de nous deux, j’avais le plus de connaissance en CSS. Par conséquent, j’étais chargé de la conception visuelle du site. Pratiquement l’intégralité du site à été réalisée en CSS sauf l’interface d’affichage des profils qui a été fait en JavaScript. Il était impossible de faire une telle interface en CSS et n’ayant aucune connaissances en JavaScript, je me suis aidé d’un modèle que j’ai modifié pour obtenir ce que je recherchais. Lorsqu’un membre du groupe veut rajouter du contenu au site, il ajoute directement sur le fichier en Html et met à jour via GitHub. Ensuite je récupère le fichier pour faire la mise en page. Après avoir fini le travail à faire sur le site web, j’ai commencé à travailler sur le jeu. Ensuite Tanguy m’a expliqué leur avancé dans la programmation et le fonctionnement de plusieurs scripts, pour enfin réaliser un cycle jour-nuit avec un système d’heure en fonction de la rotation du soleil. 
	</p>
	<p><em>A faire: </em>Je suis encore en train de me familiariser avec Unity. Nous souhaitons pour la  prochaine soutenance implémenter de nouveaux comportements des PNJ (personnages non jouables) ainsi que les premiers ennemis (mort-vivants).
	</p>
</div>

	<h3>Deuxième soutenance</h3>
	<div class="paragraph">
	<p>
		<em>Conception: </em> Nous avions de l’avance sur le site pendant la première soutenance, la majorité de la mise en page étant déjà faite, il ne me restait plus qu’à m’assurer que le site soit adaptatif au petits périphériques. Je n’avais jamais fais de site adaptatif auparavant, donc j’ai du me renseigner en amont. Globalement, si la vue du site devient trop petite le site s’adapte.

Pour cette 2e soutenance nous implémenter de l’audio. Pour gérer tout ça nous avons un manageur audio qui, comme son nom l’indique, gère toutes les sources audio. On y stock tous les sons et toutes les musiques et on peut y régler leur nom, leur volume, choisir si elles se répètent, etc. On peut ainsi faire jouer n’importe quel son ou musique n’importe quand et n’importe où dans un script en une ligne de commande. Pour l’instant, nous avons implémenté un cycle de musique en lien avec le cycle jour/nuit. La musique change lorsque la nuit tombe et revient au levée du soleil. Nous entendons aussi un son d’alerte lorsqu’un zombie nous repère.

Pour l’instant, les intelligences artificielles, nous avons un zombie qui pourra ensuite être adapté à d’autres animaux. Le comportement du zombie est le suivant : il erre aléatoirement en s’arrêtant de temps en temps, dès qu’il détecte le joueurs le plus proche de lui dans son angle de vue.

Nous avons également intégré une base de données pour avoir des noms et prénoms aléatoires. 

	</p>
	<p><em>A faire: </em>Pour ce qui est des sons, les bruitages nécessaires au jeu ont déjà été recueillis et archivés et il ne reste donc qu'à tous les implémenter et à les faire coller avec les actions auxquelles ils correspondent.
Pour les musiques, celles ci ayant été produites depuis la première soutenance et certaines déjà mises en place, l'ajout ou la modification d'éléments à ce niveau là va déprendre des envies pour le jeu plus que d'un besoin.

Pour la suite de la conception des intelligences artificielles il faudra créer un modèle d'intelligence artificielle gérant les personnages non jouables non hostiles avec lesquels le joueur pourra interagir. Sur le modèle des zombies et du rat déjà programmé il faudra ajouter d'autres animaux au jeu, la liste précise n'étant pas définie à ce jour sans pour autant que les idées et les méthodes manquent.

	</p>
</div>

	<h2>Troisième soutenance</h2>
	<div class="paragraph">
		<p>
			Pour cette troisième soutenance, j’ai amélioré la conception du rat qui fuit les personnageslorsqu’ils s’approchent trop près. Si les personnages arrivent à le coincer, ils peuvent le capturerpour avoir de la viande. J’ai aussi implémenté une intelligence artificielle de personnage quiregroupe de nombreux éléments déjà implémentés. Cette intelligence artificielle se déplacealéatoirement, si elle a besoin de quelque chose elle se met à fouiller les bâtiments à la recherchegénéralement de nourriture ou de bandage, quand elle est blessée ou a faim elle utilise cesobjets. Elle récupère aussi des matériaux nécessaires à la construction d’un lit afin de pouvoirse reposer quand elle est fatiguée. A l’approche d’autres personnages, elle fuit de la mêmefaçon qu’un rat si elle ne possède pas d’armes sinon elle ne change pas son comportementhabituel. Si elle est attaquée par un personnage et qu’elle possède une arme elle attaque enretour sinon elle fuit. Elle fuit aussi automatiquement lorsqu’elle se trouve proche de zombies.Finalement, les personnages peuvent la convaincre de rejoindre leur équipe en utilisant leursvaleurs de Social. L’implémentation de cette intelligence artificielle a été vitale afin de rendrele monde vivant.
		</p>

		<p>
			M'occupant déjà des sons et de l'artificielle intelligence, j'ai implémenté pour la troisième soutenance un système de visualisation des sons, de plus les zombies sont alertés par le son. Lorsqu'un son est détecté par un zombie, le zombie retient le niveau sonore du son qu'il a entendu, le joueur peut alors détourner son attention en créant du bruit avec un niveau sonore plus élevé que celui que le zombie a entendu (ou en apparaissant dans son champ de vision). Les sons passent à travers les murs, ils sont donc un élément primordial de jeu lorsque les zombies sont présents.
		</p>

		<p>
			J'ai aussi rajouté un système de saison et de météo. Il peut faire beau, pleuvoir et même neiger. Lorsqu'il a neigé le sol se recouvre de blanc, simulant une couche de neige qui se serait déposée. La pluie et la neige utilise le système de particule d'Unity, j'ai du alors adapté ce système et créé le système qui décide de la météo. La neige au sol fut plus compliquée à implémenté car n'utilisant aucune fonctionnalité d'Unity vu jusque là, le rendu est tout de même très acceptable.
		</p>
	</div>
	
	<h2>Ce que ce projet m'a apporté</h2>
	<hr/>
	<p>En travaillant sur ce projet, j'ai pu apprendre beaucoup de nouvelles choses. Tout d'abord de nouvelle notions de programmation en C\# mais aussi de développement web, notamment en CSS avec la réalisation de site adaptatif. Depuis ma première expérience de création de jeu sur Pygame en ISN, j'ai toujours voulu utiliser un moteur de jeu tel que Unity pour explorer et utiliser toutes ses fonctionnalités que Pygame ne possède pas. Travailler en groupe de quatre m'a également beaucoup appris. En effet, c'est très différent que de travailler en groupe de deux comme j'ai pu le faire en ISN. Grâce à cela, j'ai pu me rendre compte de l'importance de la répartition des tâches et de la communication dans un groupe.</p>
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
	<div class="paragraph">
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
	<em>A faire : </em> D'ici les prochaines soutenances nous souhaitons avoir une progression linéaire de la création de modèles et d'éléments du jeu pour ne pas être pris de court, ce sera donc un travail de fond. Pour ce qui est de la forme nous souhaitons introduire des animations pour d'autres objets que nos personnages (ex: porte) mais également pouvoir ajouter des objets visibles sur les modèles 3D depuis le jeu lors de leur utilisation (ex: torche).
	</p>
</div>

	<h3>Deuxième soutenance</h3>
	<div class="paragraph">
	<p>
	<em>Conception : </em>Le premier travail sur les textures du jeu entre la première et la seconde soutenance a été les images présentes dans les menus. L'idée était d'avoir un environnement rappelant le contexte apocalyptique du jeu sans pour autant que l'endroit soit reconnaissable. En conséquence ces images sont floutées et c'est la raison pour laquelle des images réalistes et non du pixel art ou des scènes voxel ont été choisies, les deux dernières options essayées collant plus avec le style général voulu mais rendant beaucoup moins bien. La seconde tâche, plus majeure, a été de commencer à faire toutes les icônes dont nous nous servons dans le jeu. Déjà les icônes d'interface pour le menu par exemple les boutons de validation et d'exclusion du menu multijoueur mais aussi toutes les icônes d'objet visibles dans les inventaires du jeu, on trouve en vrac les armes, les meubles et les composants de construction qui ont chacun besoin de leur texture facilement identifiable. Le travail sur les modèles du jeu s'est fait dans la continuité de ce qui avait été fait pour la première soutenance mais à un rythme bien plus soutenu. 
</p>
<p>
Au niveau modèles nécessaires à la conception des villes j'ai jusqu'à présent j'ai pu terminer onze bâtiments différents. Pour chacun d'entre eux j'ai d'abord fait un modèle générique avec le découpage des pièces, des escaliers et de quelques éléments qui ne seraient pas disponible à l’interaction dans le jeu final comme des sonnettes à l'entrée des immeubles qui seraient hors service dans le cadre d'une apocalypse. J'ai ensuite fait pour chaque plusieurs versions des différents étages des bâtiments, ajoutant des détails comme de la salissure ou encore des effondrements de façade. Cette partie de la conception a pour but de ne pas avoir un environnement trop redondant. La plupart de ces modèles sont déjà ajoutés au jeu mais une partie est simplement encore en conception en attente de formes détaillés alternatives.
Pour ce qui est des modèles de meuble et autres éléments qui constituent la génération des pièces mais aussi des rues avec des poubelles ou encore des 'espaces de nature' avec une végétation variée le travail a là aussi suivit son chemin. J'ai pu finaliser beaucoup de modèles (lit, établis, poubelles, meubles de stockage en tout genre, éléments plus spécifiques à certains bâtiments comme des rayons pour les espaces de vente) qui ne sont pas encore présents dans le jeu car il faudra d'abord définir toutes leurs positions possibles, action indispensable pour la génération de ville. La raison pour laquelle cela n'est pas encore fait a été une question de temps mais c'est surtout qu'il sera préférable de le faire une fois tous les modèles en main pour éviter de revenir sur la position de la génération pour ajouter de nouvelles choses et tout faire efficacement en une fois.
L'animation n'a pas beaucoup évoluée entre cette première et seconde soutenance nos objectifs initiaux ayant déjà été remplis dès la première. Il y a néanmoins eu un travail de recherche sur l'animation de plusieurs modèles assemblés entre eux et aussi le début d'une constitution d'une banque d'animation personnalisée pour les zombies qui doivent avoir leurs propres manières de déplacement.</p>
	<p>
	<em>A faire : </em>Pour la suite il va falloir faire celles des menus maintenant qu'ils sont mis en place, la possibilité de changer le design de choses comme les boutons du menu est aussi d'actualité mais la majeur partie des textures à faire sont celles de tous les objets récupérables, faisables et observable en jeu dans les différents inventaires. Le style cubique de ces textures va rester pour continuer à coller avec le style général du jeu.</p>

<p>Pour la  fin de ce projet il va falloir finir tous les modèles nécessaires au jeu et les implémenter sur Unity, à savoir encore une dizaine de bâtiments, les modèles de personnalisation pour les personnages qui vont permettre de les différencier (vêtements, expressions faciales) et surtout beaucoup de meubles et autres objets avec lesquels on peut interagir qui donneront de la vie au jeu et qui devront avoir des positions définies pour chaque bâtiment, route et 'espace de nature'.</p>

<p>Au niveau des animations il va falloir incorporer celles des personnages non joueurs hostiles tels que les zombies et aussi celles nécessaires pour les actions de construction ou de combat (ex : avoir une animation pour les différents coups des personnages ou encore des animations de mort).</p>
</div>

	<h2>Troisième soutenance</h2>
	<div class="paragraph">
		<ul>
			<li>Textures : </li>
			<p>Pour finaliser le projet qu'est TotA au niveau des textures il a d'abord fallu finir toutes les icônes représentant les différents objets trouvables en jeu, le style cubique des ces icônes a été maintenu et on peut maintenant facilement identifier les armes, les objets nécessaires à la construction ou encore les meubles constructibles.</p>
			<p>La seconde tâche nécessaire pour finir les textures du jeu a été de faire le rendu visuel des menus à savoir les boutons et zones de sélection étant donné que le fond avait déjà été fait et des interfaces trouvables en jeu comme l'inventaire, le menu de construction et les zones où l'on trouve les statistiques des personnages. C'est un des seuls éléments du jeu qui ne suis pas complètement le style cubique voulu mais là encore c'est justifié par le besoin de clarté dans les interfaces et surtout la volonté de faire une distinction claire entre le jeu en lui-même et les interfaces.</p>

			<li>Modèles :</li>
			<p>Le travail sur les modèles du jeu s'est fait dans la continuité de ce qui avait été fait pour la première et la deuxième soutenance, il a fallu garder le même rythme de travail pour finir ce qui avait été déjà bien entamé.</p>
			<p>Au niveau modèles nécessaires à la conception des villes j'ai pu terminer les quinze bâtiments différents voulus pour le jeu. Ce nombre n'est cependant pas très représentatif étant donné que chaque chose désignée comme bâtiment n'est en fait qu'un modèle générique avec le découpage des pièces, des escaliers et de quelques éléments dont l'interaction n'est pas possible dans le jeu final comme des sonnettes à l'entrée des immeubles qui seraient hors service dans le cadre d'une apocalypse. le vrai nombre de bâtiments en jeu, si l'on ne compte pas les différents meubles qu'ils peuvent abriter approche plus de la cinquantaine étant donné que différentes versions détaillées, trois en général, de chaque étage de chaque bâtiment créé existent et permettent une diversité dans le jeu. Les détails n'ont pas été modifiés en vue de la dernière soutenance et les bâtiments se démarquent souvent par l'usure de leurs pièces et leur destruction partielle voir totale. J'ai ensuite fait pour chaque plusieurs versions des différents étages des bâtiments, ajoutant des détails comme de la salissure ou encore des effondrements de façade.</p>
			<p>Enfin la liste des modèles de meubles et autres éléments avec lesquels on peut interagir voulue pour le jeu a été terminée, ce qui correspond à tous les meubles de vie classiques que l'on peut trouver dans une maison comme les tables, chaises ou lit et ainsi de suite mais aussi nos établis, des objets de lieux publics comme des bancs, des voitures ou des poubelles et enfin les objets qui servent au système électrique du jeu. Le placement de ces objets en jeu dans les différents bâtiments a lui aussi été fait, suivant la méthode programmée pour la deuxième soutenance. Ainsi ceux-ci apparaissent à des endroits prédéfinis avec une certaine probabilité ce qui ajoute encore de la diversité à l'univers de jeu.</p>

			<li>Animations : </li>
			<p>Aspect visuel majeur du jeu, l'animation des personnages et des objets a elle aussi été finalisée, dorénavant on peut par exemple ouvrir les portes et les personnages avancent et agissent selon nos propres animations, entre autre pour la marche et l'orientation ou encore la mort de ceux-ci.</p>

		</ul>
	</div>


	<h2>Ce que ce projet m'a apporté</h2>
	<hr/>
	<p>M'étant occupé majoritairement de la modélisation, de l'animation et des aspects graphiques pendant ces quatre premiers mois c'est surtout dans ce domaine que je me suis amélioré. Voir ma propre progression au fil du travail a été un facteur de motivation majeur et les tâches que j'effectuais en une heure au début de ces quatre mois ne me prennent souvent plus que vingt à trente minutes maintenant. Au delà de ça j'ai pu progresser un peu en programmation et ai appris beaucoup de fonctionnalités de Unity en suivant les autres travaux en cours du projet, notamment en lisant les différents scripts du jeu.

	Enfin  la chose la plus importante que j'ai pu expérimenter et pratiquer durant ces quatre mois est le travail en équipe, les sentiments de devoir envers le groupe sont très positifs et m'ont permis d'avancer même quand il m'est arrivé de craquer un peu après de longues sessions de travail. C'est cette dernière partie de l'expérience qu'est le projet qui me sera sans doute la plus bénéfique pour le futur et que j'ai le plus appréciée jusqu'à maintenant.</p>

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