<?php $title = 'msg error'; ?>

<?php ob_start(); ?>


<div class="row">
    <div class="col-1 no-gutter">

    </div>
    <div class="col-md-11 col-sm-12 body-container">

    <div class="alert alert-danger my-5" role="alert">
        <h4 class="alert-heading">Erreur</h4>
        <?= $msgError ?>
    </div>

    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('./view/frontend/template.php'); ?>
