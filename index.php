 <?php
// fichiers principaux
 include_once '_config/config.php';
 include_once '_config/db.php';
 include_once '_functions/functions.php';

 // Définition de la page courante
 if(isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
 } else {
    $page = 'home';
 }

 //On récupère toutes les pages sous forme d'array
 $allPages = scandir('controllers/');
// Puis on regarde si la page demandée est dans l'array
 if(in_array($page.'_controller.php', $allPages)) {
    //Inclusion de la page
    include_once 'models/'.$page.'_model.php';
    include_once 'controllers/'.$page.'_controller.php';
    include_once 'views/'.$page.'_view.php';
 } else {
    //retour d'une erreur
    echo 'Erreur 404 not found.';
 }