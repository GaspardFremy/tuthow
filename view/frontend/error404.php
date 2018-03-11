<?php $title = 'error'; ?>

<?php ob_start(); ?>


<div class="row">
    <div class="col-1 no-gutter">

    </div>
    <div class="col-md-11 col-sm-12 body-container">

        <h1>Erreur 404</h1>
        <a href="./index.php?action=home">retour à l'accueil</a>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
