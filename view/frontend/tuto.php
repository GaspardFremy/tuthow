<?php $title = 'tuto'; ?>

<?php ob_start(); ?>


<div class="row">
    <div class="col-1 no-gutter">

    </div>
    <div class="col-md-11 col-sm-12 body-container">

        <div class="header-img-container" style="background-image: url('./public/img/tutos-header-img/<?= $tuto['id']?>.jpg');">

        </div>

        <h3><?= $tuto['title']?></h3>
        <h5><?= $tuto['description']?></h5>

    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
