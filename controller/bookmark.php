<?php
$db = new PDO('mysql:host=localhost;dbname=tuthow;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_GET['action'], $_GET['tutoId'], $_GET['userId']) AND !empty($_GET['action']) AND !empty($_GET['tutoId']) AND !empty($_GET['userId'])){
    $action = htmlspecialchars($_GET['action']);
    $userId = (int) $_GET['userId'];
    $tutoId = htmlspecialchars($_GET['tutoId']);

    $articleExist = $db->prepare('SELECT id FROM tutos WHERE id = ?');
    $articleExist->execute(array($tutoId));


    if ($articleExist -> rowCount() == 1){

        if($action == 'bookmark'){

            $check_bookmark = $db->prepare('SELECT id FROM bookmarks WHERE tutoId = ? AND userId = ?');
            $check_bookmark->execute(array($tutoId, $userId));

            if($check_bookmark->rowCount() == 1){
                $delet = $db->prepare('DELETE FROM bookmarks WHERE tutoId = ? AND userId = ?');
                $delet->execute(array($tutoId, $userId));
            }
            else {
                $insert = $db->prepare('INSERT INTO bookmarks (bookmarkedDate, tutoId, userId) VALUES (now(),?,?)');
                $insert->execute(array($tutoId, $userId));
            }

        }

        // header('location: ../index.php?action=home');
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
