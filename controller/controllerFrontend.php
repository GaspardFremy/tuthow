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

    require('view/frontend/tuto.php');
}

function myTuto()
{
    require('view/frontend/myTuto.php');
}

function bookmarked()
{
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
