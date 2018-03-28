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
    $recommendedTutos = getRecommendedTutos();

    require('view/frontend/tuto.php');
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
