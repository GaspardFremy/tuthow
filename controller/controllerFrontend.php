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
