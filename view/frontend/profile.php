<?php $title = 'profil'; ?>

<?php ob_start(); ?>


<div class="row">
    <div class="col-1 no-gutter">

    </div>
    <div class="col-md-11 col-sm-12 body-container">

    <h1>Profil</h1>

    <h2>Bienvenu sur votre profil, <?php echo $_SESSION['pseudo']; ?>  </h2>

    <a href="./index.php?action=myTutos"><button type="button" class="btn btn-outline-success">Mes tutos</button></a>

    <hr>

    <a href="./controller/logout.php"><button type="button" class="btn btn-outline-danger">se déconnecter</button></a>


    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('./view/frontend/template.php'); ?>
