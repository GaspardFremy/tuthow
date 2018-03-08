<?php

require('model/modelFrontend.php');


function accueil()
{
    $sliderTutos = getSliderTutos();
    $largeTuto = getLargeTuto();
    require('view/frontend/accueil.php');
}
