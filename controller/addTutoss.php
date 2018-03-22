<?php
session_start();

if (isset($_GET['action']) AND $_GET['action'] == "addTuto")
{
    if(isset($_POST['title'],
    $_POST['description'],
    $_POST['content'],
    $_POST['level'],
    $_POST['duration'],
    $_POST['durationType']) AND
    !empty($_POST['title']) AND
    !empty($_POST['description']) AND
    !empty($_POST['content']) AND
    !empty($_POST['level']) AND
    !empty($_POST['duration']) AND
    !empty($_POST['durationType']))
    {
        $title = htmlspecialchars($_POST['title']);
        $description = htmlspecialchars($_POST['description']);
        $content = htmlspecialchars($_POST['content']);
        $level = htmlspecialchars($_POST['level']);
        $duration = htmlspecialchars($_POST['duration']);
        $durationType = htmlspecialchars($_POST['durationType']);
        $userId = $_SESSION['userId'];

        $db = dbConnect();

        $req = $db->prepare('INSERT INTO tutos(title, description, content, levelId, durationNumber, durationTypeId, userId, upvote, layoutId, createdDate)
        VALUES(:title, :description, :content, :levelId, :durationNumber, :durationTypeId, :userId, 0, 1, CURDATE())');
        $req->execute(array(
            'title' => $tutoTitle,
            'description' => $description,
            'content' => $content,
            'levelId' => $level,
            'durationNumber' => $duration,
            'durationTypeId' => $durationType,
            'userId' => $userId
        ));

        header('location: ../index.php?action=myTutos');
    }

    else {
        $error = "veuillez remplir tout les champs";
        header('location: ../index.php?action=createTuto&error='. $error);
    }

}


function dbConnect()
{
    $db = new PDO('mysql:host=localhost;dbname=tuthow;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $db;
}

?>
