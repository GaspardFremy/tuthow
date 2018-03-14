<?php $title = 'profil'; ?>

<?php ob_start(); ?>


<div class="row">
    <div class="col-1 no-gutter">

    </div>
    <div class="col-md-11 col-sm-12 body-container">

    <h2>Bonjour <?php echo $_SESSION['pseudo']; ?> </h2>
    <h3>Vous êtes désormais connecté!</h3>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('./view/frontend/template.php'); ?>
