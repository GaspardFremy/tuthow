<?php session_start();  ?>
<?php
require('controller/controllerBackend.php');
require('controller/controllerFrontend.php');

try {
    if (isset($_GET['action'])) {
        //FRONTEND PAGES
        if ($_GET['action'] == 'home') {
            accueil();
        }

        elseif ($_GET['action'] == 'tuto') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                tuto();
            }
            else {
                throw new Exception('no tuto id');
            }
        }

        elseif ($_GET['action'] == 'bookmarked'){
            if(empty($_SESSION['userId'])){
                signinForm();
            }
            else {
                bookmarked($_SESSION['userId']);
            }

        }

        elseif ($_GET['action'] == 'myTutos'){
            if(!empty($_SESSION['userId'])){
                myTutos($_SESSION['userId']);
            }
            else {
                echo 'You\'re not connected';
            }
        }

        elseif ($_GET['action'] == 'category') {
            category();
        }

        elseif ($_GET['action'] == 'profile'){
            if(empty($_SESSION['userId'])){
                signinForm();
            }
            else {
                profile();
            }
        }

        elseif ($_GET['action'] == 'signinForm'){
            signinForm();
        }

        //BACKEND PAGES
        elseif ($_GET['action'] == 'signed'){
            signed();
        }

        elseif ($_GET['action'] == 'connected') {
            connected();
        }

        elseif ($_GET['action'] == 'logout') {
            logout();
        }

        elseif ($_GET['action'] == 'signin'){
            signinForm();
        }

        elseif ($_GET['action'] == 'advanceSearch'){
            advanceSearch();
        }

        elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_SESSION['pseudo']) && !empty($_POST['comment'])) {
                    addComment($_GET['id'], $_SESSION['pseudo'], $_POST['comment']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        }

        elseif ($_GET['action'] == 'createTuto'){
            createTuto();
        }

        elseif ($_GET['action'] == 'editTutoPage') {
            editTutoPage();
        }

        elseif ($_GET['action'] == 'editTuto') {
            if (isset($_GET['id']) && $_GET['id'] > 0){
                editTuto($_GET['id'], $_POST['tutoTitle'], $_POST['description'], $_POST['content'], $_POST['level'], $_POST['duration'], $_POST['durationType']);
            }
        }

        elseif ($_GET['action'] == 'deletTutos'){
            if (isset($_GET['id']) && $_GET['id'] > 0){
                deletTuto($_GET['id'], $_SESSION['pseudo']);
            }
        }

    }
    else {
        error404();
    }
}
catch(Exception $e) {
    $msgError = $e->getMessage();

    require 'view/frontend/msgError.php';
}
