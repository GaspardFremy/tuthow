<?php

// HOMEPAGE

function getSliderTutos()
{
    $db = dbConnect();

    $sliderTutos = $db->query('SELECT tutos.*, tutosLevels.tutoLevel, tutosLevels.color, durationTypes.durationType
    FROM tutos
    INNER JOIN tutosLevels ON tutos.levelId = tutosLevels.id
    INNER JOIN tutosLayouts ON tutosLayouts.id = tutos.layoutId
    INNER JOIN durationTypes ON durationTypes.id = tutos.durationTypeId

    WHERE tutosLayouts.id = 1

    ORDER BY id');

    return $sliderTutos;
}

function getLargeTuto()
{
    $db = dbConnect();

    $largeTuto = $db->query('SELECT tutos.*, tutosLevels.tutoLevel, tutosLevels.color, durationTypes.durationType
    FROM tutos
    INNER JOIN tutosLevels ON tutosLevels.id = tutos.levelId
    INNER JOIN tutosLayouts ON tutosLayouts.id = tutos.layoutId
    INNER JOIN durationTypes ON durationTypes.id = tutos.durationTypeId

    WHERE tutosLayouts.id = 2');

    return $largeTuto;

}

function getHalfLargeTuto()
{
    $db = dbConnect();

    $halfLargeTuto = $db->query('SELECT tutos.*, tutosLevels.tutoLevel, tutosLevels.color, durationTypes.durationType
    FROM tutos
    INNER JOIN tutosLevels ON tutosLevels.id = tutos.levelId
    INNER JOIN tutosLayouts ON tutosLayouts.id = tutos.layoutId
    INNER JOIN durationTypes ON durationTypes.id = tutos.durationTypeId

    WHERE tutosLayouts.id = 3');

    return $halfLargeTuto;
}

function getQuarterTuto()
{
    $db = dbConnect();

    $quarterTuto = $db->query('SELECT tutos.*, tutosLevels.tutoLevel, tutosLevels.color, durationTypes.durationType
    FROM tutos
    INNER JOIN tutosLevels ON tutosLevels.id = tutos.levelId
    INNER JOIN tutosLayouts ON tutosLayouts.id = tutos.layoutId
    INNER JOIN durationTypes ON durationTypes.id = tutos.durationTypeId

    WHERE tutosLayouts.id = 4');

    return $quarterTuto;
}

function getHalfQuarterTutos()
{
    $db = dbConnect();

    $halfQuarterTutos = $db->query('SELECT tutos.*, tutosLevels.tutoLevel, tutosLevels.color, durationTypes.durationType
    FROM tutos
    INNER JOIN tutosLevels ON tutosLevels.id = tutos.levelId
    INNER JOIN tutosLayouts ON tutosLayouts.id = tutos.layoutId
    INNER JOIN durationTypes ON durationTypes.id = tutos.durationTypeId

    WHERE tutosLayouts.id = 5');

    return $halfQuarterTutos;
}

function getScdHalfQuarterTutos()
{
    $db = dbConnect();

    $scdHalfQuarterTutos = $db->query('SELECT tutos.*, tutosLevels.tutoLevel, tutosLevels.color
    FROM tutos
    INNER JOIN tutosLevels ON tutosLevels.id = tutos.levelId
    INNER JOIN tutosLayouts ON tutosLayouts.id = tutos.layoutId

    WHERE tutosLayouts.id = 6');

    return $scdHalfQuarterTutos;
}


// TUTO

function getTuto($tutoId)
{
    $db = dbConnect();
    $req = $db->prepare('SELECT tutos.*, tutosLevels.tutoLevel, tutosLevels.color
    FROM tutos
    INNER JOIN tutosLevels ON tutosLevels.id = tutos.levelId
    INNER JOIN tutosLayouts ON tutosLayouts.id = tutos.layoutId

    WHERE tutos.id = ?');

    $req->execute(array($tutoId));
    $tuto = $req->fetch();

    return $tuto;
}

function getLikes($tutoId)
{
    $db = dbConnect();
    $likes= $db->prepare('SELECT id
    FROM likes WHERE tutoId = ?');
    $likes->execute(array($tutoId));
    $like = $likes->rowCount();

    return $like;
}

function getDislikes($tutoId)
{
    $db = dbConnect();
    $dislikes= $db->prepare('SELECT id
    FROM dislikes WHERE tutoId = ?');
    $dislikes->execute(array($tutoId));
    $dislike = $dislikes->rowCount();

    return $dislike;
}

function getComments($tutoId)
{
    $db = dbConnect();
    $comments = $db->prepare('SELECT id, pseudo, comment, DATE_FORMAT(commentDate, \'%d/%m/%Y à %Hh%imin%ss\') AS commentDateFr FROM comments WHERE tutoId = ? ORDER BY commentDate DESC');
    $comments->execute(array($tutoId));

    return $comments;
}

function postComment($tutoId, $pseudo, $comment)
{
    $db = dbConnect();
    $comments = $db->prepare('INSERT INTO comments(tutoId, pseudo, comment, commentDate) VALUES(?, ?, ?, NOW())');
    $affectedLines = $comments->execute(array($tutoId, $pseudo, $comment));

    return $affectedLines;
}






function dbConnect()
{
    $db = new PDO('mysql:host=localhost;dbname=tuthow;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $db;
}
