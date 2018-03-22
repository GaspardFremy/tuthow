<?php $title = 'tuto'; ?>
<?php $css = '<link rel="stylesheet" href="./public/css/tuto.css">'; ?>


<?php ob_start(); ?>

<div class="header-img-container" style="background-image: url('./public/img/tutos-header-img/<?php if(!empty($tuto['headerImg'])){echo htmlspecialchars($tuto['headerImg']);} else {echo "default.jpg";} ?>">
    <div class="informations rounded-top">
        <h4  class="mb-3">Informations</h4>


        <div class="d-flex justify-content-around">
            <table>
                <tr>
                    <td>Difficulty :</td>
                    <td><h6 class="level <?= htmlspecialchars($tuto['color'])?>"><?= htmlspecialchars($tuto['tutoLevel'])?></h6></td>
                </tr>
                <tr>
                    <td>Estimated time :</td>
                    <td><span class="time"><?= htmlspecialchars($tuto['durationNumber'])?> <?= htmlspecialchars($tuto['durationType'])?></span></td>
                </tr>
                <tr>
                    <td>Published :</td>
                    <td><?= htmlspecialchars($tuto['createdDate'])?></td>
                </tr>
                <tr>
                    <td>chapitres :</td>
                    <td>5</td>
                </tr>
            </table>

            <div class="d-flex flex-column ml-4">
                <span>Made with love by <span class="pseudo"><?= htmlspecialchars($tuto['pseudo'])?></span></span>
                <span>Adurino</span>
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
                </div>




            </div>

        </div>

    </div>
</div>
<div class="container">
    <div class="col-md-11 col-sm-12 body-container">
        <div class="container-fluid">
            <h2><?= $tuto['title']?></h2>
            <h5><?= $tuto['description']?></h5>
            <div class="content row">
                <p><?= $tuto['content']?></p>
            </div>
        </div>
    </div>


    <div class="d-flex justify-content-center my-5 row ">
        <div class="d-flex flex-column align-items-center ">
            <h6 >Was this tuto usefull?</h6>

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

            <div class="d-flex align-items-center">
                <a href="#"><img class="share-icons" src="./public/img/icon/facebook.png" alt=""></a>
                <a href="#"><img class="share-icons" src="./public/img/icon/twitter.png" alt=""></a>
                <a href="#"><img class="share-icons" src="./public/img/icon/mail.png" alt=""></a>
                <a href="#"><img class="share-icons" src="./public/img/icon/rss.png" alt=""></a>
                <a href="#"><img class="share-icons" src="./public/img/icon/gplus.png" alt=""></a>
            </div>
        </div>

    </div>





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
