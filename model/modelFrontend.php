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

    $largeTuto = $db->query('SELECT tutos.*, tutosLevels.tutoLevel, tutosLevels.color
    FROM tutos
    INNER JOIN tutosLevels ON tutosLevels.id = tutos.levelId
    INNER JOIN tutosLayouts ON tutosLayouts.id = tutos.layoutId

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







function dbConnect()
{
    $db = new PDO('mysql:host=localhost;dbname=tuthow;charset=utf8', 'root', 'root');
    return $db;
}
