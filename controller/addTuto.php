<?php
session_start();

if (isset($_GET['action']) AND $_GET['action'] == "addTuto")
{
    $tutoTitle = htmlspecialchars($_POST['tutoTitle']);
    $description = htmlspecialchars($_POST['description']);
    $content = htmlspecialchars($_POST['content']);
    $level = htmlspecialchars($_POST['level']);
    $duration = htmlspecialchars($_POST['duration']);
    $durationType = htmlspecialchars($_POST['durationType']);
    $userId = $_SESSION['userId'];
    $error = "";



    if (!empty($_POST['tutoTitle']))
    {
        if (!empty($_POST['description']))
        {
            if (!empty($_POST['content']))
            {
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
                die();
            }
            else
            {
                $error = "You must add a content";
            }
        }
        else {
            $error = "You must add a description";
        }
    }

    else
    {
        $error = "You must add a title";
    }

    header('location: ../index.php?action=createTuto&error='. $error. '&tutoTitle=' .$tutoTitle. '&description=' .$description. '&content=' .$content);

}


function dbConnect()
{
    $db = new PDO('mysql:host=localhost;dbname=tuthow;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $db;
}

?>
