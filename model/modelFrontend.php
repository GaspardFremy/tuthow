<?php
function getLargeTuto()
{
    $db = dbConnect();
    // $largeTuto = $db->query('SELECT tutos.*, tutosLevels.tutoLevel, tutosLevels.color, durationTypes.durationType
    // FROM tutos
    // INNER JOIN tutosLevels ON tutos.levelId = tutosLevels.id
    // INNER JOIN durationTypes ON tutos.durationTypeId = durationTypes.id
    // WHERE tutos.id = 1');
    //
    // SELECT tutos.title, tutosLevels.tutoLevel, durationTypes.durationType
    // FROM tutos
    // INNER JOIN tutosLevels ON tutos.levelId = tutosLevels.id
    // INNER JOIN durationTypes ON tutos.durationTypeId = durationTypes.id
    // WHERE tutos.id = 1

    $largeTuto = $db->query('SELECT tutos.*, tutosLevels.tutoLevel, tutosLevels.color
    FROM tutos
    INNER JOIN tutosLevels ON tutos.levelId = tutosLevels.id

    WHERE tutos.id = 1');

    return $largeTuto;

}

function getSliderTutos()
{
    $db = dbConnect();


    $sliderTutos = $db->query('SELECT tutos.*, tutosLevels.tutoLevel, tutosLevels.color
    FROM tutos
    INNER JOIN tutosLevels ON tutos.levelId = tutosLevels.id
    LIMIT 1,8');

    return $sliderTutos;

}






function dbConnect()
{
    $db = new PDO('mysql:host=localhost;dbname=tuthow;charset=utf8', 'root', 'root');
    return $db;
}
