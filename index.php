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
            bookmarked();
        }

        elseif ($_GET['action'] == 'myTuto'){
            myTuto();
        }

        elseif ($_GET['action'] == 'category') {
            category();
        }

        elseif ($_GET['action'] == 'profile'){
            if(empty($_SESSION['id'])){
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

        elseif ($_GET['action'] == 'addTuto'){
            addTuto();
        }

        // elseif ($_GET['action'] == 'addComment') {
        //     if (isset($_GET['id']) && $_GET['id'] > 0) {
        //         if (!empty($_POST['author']) && !empty($_POST['comment'])) {
        //             addComment($_GET['id'], $_POST['author'], $_POST['comment']);
        //         }
        //         else {
        //             throw new Exception('empty field');
        //         }
        //     }
        //     else {
        //         throw new Exception('no tuto id');
        //     }
        // }
    }
    else {
        error404();
    }
}
catch(Exception $e) {
    $msgError = $e->getMessage();

    require 'view/frontend/msgError.php';
}
