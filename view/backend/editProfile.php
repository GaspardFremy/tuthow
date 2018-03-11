<?php $title = 'profil'; ?>

<?php ob_start(); ?>


<div class="row">
    <div class="col-1 no-gutter">

    </div>
    <div class="col-md-11 col-sm-12 body-container">

    <h1>Edition du profil</h1>

    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('./view/frontend/template.php'); ?>
