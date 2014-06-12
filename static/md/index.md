## Généralités et avancement

Ce petit client IRC est déjà "*utilisable*", mais il y a encore de nombreux bogues et des fonctionnalités manquantes ( *et le code n'est pas très propres* :-x ).
  
Il offre déjà les possibilités suivante:

*	Se connecter/Déconnecter d'un serveur (*note: ne gère pas le multiserv*)
*	Rejoindre/quitter des channel (commande /join et /part ou plus court /j et /p)
*	Commencer une discussion privée (commande /query)
*	Et d'autres fonctionnalités
   

Les technologies utilisées sont: JAVA et les librairies PircBot & Swing.
 
## Objectifs

Comme je l'ai dis plus haut, plus tard je ferais peut-être une version Android (je réfléchis fortement à le faire).

Les fonctionnalités à ajouter:

*	Multilingue: Il me reste juste à corriger un bogue d'affichage des caractères sur certaines fenêtres (*note: Je ne parle pas ici des traductions en elles-même, mais du système, après les traductions, ça sera aux utilisateurs de traduire si leur langue n'est pas présente, je ne parle pas toutes les langues*)
*	Possibilité d'utiliser un proxy (*http, SOCKv5 ...*): Je n'ai pas encore attaqué cette partie :-s
*	Connexion en SSL: assez important ^^
*	Couleur et smilley: Pour le moment il est possible d'écrire en couleur (*Ctrl + k*) , gras (*Ctrl + b*) ... Mais elle ne s'affiche pas encore (*Note: l'affichage de la couleur et des smilley pourra être désactivé depuis le menu* __Options__)
*	Possibilité d'ajouter des plugins ou des scripts: Je n'ai pas encore attaqué cette partie :-s
*	DCC
