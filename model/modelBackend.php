<?php

function delTuto($tutoId)
{
    $db = dbConnect();

    $delet = $db->prepare('DELETE FROM tutos WHERE id= ?');
    $affectedLines = $delet->execute(array($tutoId));

    return $affectedLines;
}

function edTuto($id, $tutoTitle, $description, $content, $level, $duration, $durationType)
{
    $db = dbConnect();


    $edit = $db->prepare('UPDATE tutos
        SET title = :new_title, description = :new_description, content = :new_content, levelId = :new_levelId, durationNumber = :new_duration, durationTypeId = :new_durationType
        WHERE id = :id');

    $editedLines = $edit->execute(array(
        'new_title' => $tutoTitle,
        'new_description' => $description,
        'new_content' => $content,
        'new_levelId' => $level,
        'new_duration' => $duration,
        'new_durationType' => $durationType,
        'id' => $id
    ));

    return $editedLines;


}

//
