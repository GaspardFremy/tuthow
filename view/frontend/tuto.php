<?php $title = 'tuto'; ?>
<?php $css = '<link rel="stylesheet" href="./public/css/tuto.css">'; ?>


<?php ob_start(); ?>


<div class="row">
    <div class="col-1 no-gutter">

    </div>
    <div class="col-md-11 col-sm-12 body-container">

        <div class="header-img-container" style="background-image: url('./public/img/tutos-header-img/<?= $tuto['id']?>.jpg');">

        </div>

        <h3><?= $tuto['title']?></h3>
        <h5><?= $tuto['description']?></h5>

        <h6>ce tuto vous à été utile?</h6>


        <div class="thumbs-up-icon">
            <i class="fa far fa-thumbs-up"></i>
        </div>


        <h2>Commentaires</h2>

        <form action="./index.php?action=addComment&id=<?=$tuto['id']?>&pseudo=<?= $_SESSION['pseudo']?>" method="post">
            <div>
                <label for="comment">Commentaire</label><br />
                <textarea id="comment" name="comment"></textarea>
            </div>

            <div>
                <input type="submit" data-toggle="modal" data-target="#exampleModal"/>
            </div>

        </form>

        <?php
        while ($comment = $comments->fetch())
        {
        ?>
            <p><strong><?= htmlspecialchars($comment['pseudo']) ?></strong> le <?= $comment['commentDateFr'] ?></p>
            <p><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
        <?php
        }
        ?>

    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
