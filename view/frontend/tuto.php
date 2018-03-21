<?php $title = 'tuto'; ?>
<?php $css = '<link rel="stylesheet" href="./public/css/tuto.css">'; ?>


<?php ob_start(); ?>


<div class="row">
    <div class="col-1 no-gutter">

    </div>
    <div class="col-md-11 col-sm-12 body-container text-center">

        <div class="header-img-container" style="background-image: url('./public/img/tutos-header-img/<?php if(!empty($data['headerImg'])){echo htmlspecialchars($data['headerImg']);} else {echo "default.jpg";} ?>">


        </div>

        <h3><?= $tuto['title']?></h3>
        <h5><?= $tuto['description']?></h5>

        <hr><hr><hr>
        <h6>Was this tuto usefull?</h6>


        <div class="d-flex align-items-center space">
            <a href="./controller/likeDislike.php?action=like&tutoId=<?= $tuto['id']?>&userId=<?= $_SESSION['userId']?>">
                <div class="thumbs-up-icon mx-2">
                    <i class=" <?php if(isset($_GET['state']) && $_GET['state'] == 'liked')
                    {
                        echo "fa fal fa-thumbs-up ";
                    } else{
                        echo 'fa far fa-thumbs-up';
                    }; ?>"></i>
                </div>
            </a>

            <div class="nb-likes">
                <?= $like?>
            </div>

            <a href="./controller/likeDislike.php?action=dislike&tutoId=<?= $tuto['id']?>&userId=<?= $_SESSION['userId']?>">
                <div class="thumbs-down-icon mx-2 ml-5">
                    <i class=" <?php if(isset($_GET['state']) && $_GET['state'] == 'disliked')
                    {
                        echo "fa fal fa-thumbs-down ";
                    } else{
                        echo 'fa far fa-thumbs-down';
                    }; ?>"></i>
                </div>
            </a>

            <div class="nb-dislikes">
                <?= $dislike?>
            </div>
        </div>

        <hr><hr>

        <h2>Comments</h2>

        <form action="./index.php?action=addComment&id=<?=$tuto['id']?>&pseudo=<?= $_SESSION['pseudo']?>" method="post">
            <div>
                <label for="comment">Comments</label><br />
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
