ARCHITECTURE MINI-MVC PHP (inspirée de Laravel, simplifiée)
============================================================

Structure des dossiers :
------------------------
- app/
  - Controllers/   : Contrôleurs (logique métier)
  - Models/        : Modèles (données, accès DB)
  - Views/         : Vues (fichiers PHP pour l'affichage)
  - Router.php     : Routeur minimaliste
- routes/
  - web.php        : Définition des routes de l'application
- public/
  - index.php      : Point d'entrée unique (front controller)

Fonctionnement :
----------------
- L'utilisateur accède à l'application via public/index.php.
- index.php charge routes/web.php, qui instancie le Router.
- Les routes sont définies dans routes/web.php (ex: $router->get('/', 'HomeController@index');).
- Le Router analyse l'URL et appelle le contrôleur/méthode correspondant.
- Le contrôleur peut charger une vue (ex: require ../Views/home.php).
- Les modèles servent à manipuler les données (ex: User.php).

Exemple de route :
------------------
$router->get('/', 'HomeController@index');

Pour ajouter une page :
-----------------------
1. Créez un contrôleur dans app/Controllers (ex: AboutController.php).
2. Ajoutez une vue dans app/Views (ex: about.php).
3. Ajoutez la route dans routes/web.php :
   $router->get('/about', 'AboutController@index');

Ce mini-MVC est volontairement simple pour servir de base à vos projets PHP.
