<?php
$db = new PDO('mysql:host=localhost;dbname=tuthow;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (isset($_GET['action'], $_GET['userId'], $_GET['tutoId']) AND !empty($_GET['action']) AND !empty($_GET['userId']) AND !empty($_GET['action'])){
    $action = htmlspecialchars($_GET['action']);
    $userId = (int) $_GET['userId'];
    $tutoId = htmlspecialchars($_GET['tutoId']);

    $articleExist = $db->prepare('SELECT id FROM tutos WHERE id = ?');
    $articleExist->execute(array($tutoId));


    if ($articleExist -> rowCount() == 1){

        if($action == 'like'){

            $check_like = $db->prepare('SELECT id FROM likes WHERE tutoId = ? AND userId = ?');
            $check_like->execute(array($tutoId, $userId));

            $delet = $db->prepare('DELETE FROM dislikes WHERE tutoId = ? AND userId = ?');
            $delet->execute(array($tutoId, $userId));

            if($check_like->rowCount() == 1){
                $delet = $db->prepare('DELETE FROM likes WHERE tutoId = ? AND userId = ?');
                $delet->execute(array($tutoId, $userId));
            }
            else {
                $insert = $db->prepare('INSERT INTO likes (tutoId, userId) VALUES (?,?)');
                $insert->execute(array($tutoId, $userId));
            }



        }
        elseif ($action == 'dislike') {
            $check_like = $db->prepare('SELECT id FROM dislikes WHERE tutoId = ? AND userId = ?');
            $check_like->execute(array($tutoId, $userId));

            $delet = $db->prepare('DELETE FROM likes WHERE tutoId = ? AND userId = ?');
            $delet->execute(array($tutoId, $userId));

            if($check_like->rowCount() == 1){
                $delet = $db->prepare('DELETE FROM dislikes WHERE tutoId = ? AND userId = ?');
                $delet->execute(array($tutoId, $userId));
            }
            else {
                $insert = $db->prepare('INSERT INTO dislikes (tutoId, userId) VALUES (?,?)');
                $insert->execute(array($tutoId, $userId));
            }

        }

        header('location: ../index.php?action=tuto&id=' . $tutoId);
    }
}





?>
