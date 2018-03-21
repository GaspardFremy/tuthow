<?php

function delTuto($tutoId)
{
    $db = dbConnect();

    $delet = $db->prepare('DELETE FROM tutos WHERE id= ?');
    $affectedLines = $delet->execute(array($tutoId));

    return $affectedLines;
}
