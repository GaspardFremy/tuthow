<?php

require('model/modelFrontend.php');


function accueil()
{
    $sliderTutos = getSliderTutos();
    $largeTuto = getLargeTuto();
    $halfLargeTuto = gethalfLargeTuto();
    $quarterTuto = getQuarterTuto();
    $halfQuarterTutos = getHalfQuarterTutos();
    $scdHalfQuarterTutos = getScdHalfQuarterTutos();


    require('view/frontend/accueil.php');
}

function tuto()
{
    $tuto = getTuto($_GET['id']);
    $comments = getComments($_GET['id']);
    $like = getLikes($_GET['id']);
    $dislike = getDislikes($_GET['id']);


    require('view/frontend/tuto.php');
}

function addComment($tutoId, $pseudo, $comment)
{
    $affectedLines = postComment($tutoId, $pseudo, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=tuto&id=' . $tutoId);
    }
}

function myTutos($userId)
{
    $myTutos = getMyTutos($userId);
    require('view/frontend/myTuto.php');
}

function bookmarked($userId)
{
    $bookmarkedTutos = getBookmarkedTutos($userId);
    require('view/frontend/bookmarked.php');
}

function category()
{
    require('view/frontend/category.php');
}

function profile()
{
    require('view/frontend/profile.php');
}

function error404()
{
    require('view/frontend/error404.php');
}
