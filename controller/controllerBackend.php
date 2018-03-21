<?php
require('model/modelBackend.php');

function advanceSearch()
{
    require('view/backend/advanceSearch.php');
}

function createTuto()
{
    require('view/backend/createTuto.php');
}

function addTuto()
{
    $affectedLines = postComment($tutoId, $pseudo, $comment);

        if ($affectedLines === false) {
            throw new Exception('Impossible d\'ajouter le commentaire !');
        }
        else {
            header('Location: index.php?action=tuto&id=' . $tutoId);
        }
}

// function addComment($tutoId, $pseudo, $comment)
// {
//     $affectedLines = postComment($tutoId, $pseudo, $comment);
//
//     if ($affectedLines === false) {
//         throw new Exception('Impossible d\'ajouter le commentaire !');
//     }
//     else {
//         header('Location: index.php?action=tuto&id=' . $tutoId);
//     }
// }

function editProfile()
{
    require('view/backend/editProfile.php');
}

function signinForm()
{
    require('view/backend/signinForm.php');
}

function signed()
{
    require('view/backend/signed.php');
}

function connected()
{
    require('view/backend/connected.php');
}



?>
