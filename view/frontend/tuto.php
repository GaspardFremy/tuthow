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
            <div class="content ro">
                <p><?= $tuto['content']?></p>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center my-5 ro">
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


    <div class="tuto-container">
        <form action="./index.php?action=addComment&id=<?=$tuto['id']?>&pseudo=<?= $_SESSION['pseudo']?>" method="post">
            <div>
                <label for="comment">Comments</label><br />
                <textarea id="comment" class="comment-aera p-3" name="comment" placeholder="Your comment"></textarea>
            </div>

            <div>
                <input type="submit" class="comment-submit mb-3 mt-2" data-toggle="modal" data-target="#exampleModal" value="submit"/>
            </div>

        </form>

        <div class="com-container">
            <?php
            while ($comment = $comments->fetch())
            {
                ?>
                <div class="com-content m-3">
                    <div class="com-info d-flex align-items-center">
                        <img class="profile-thumb rounded" src="./public/img/default-profile.png" alt="">

                        <div class="d-flex align-items-start flex-column ml-3">
                            <p class="mb-0 pseudo"><strong><?= htmlspecialchars($comment['pseudo']) ?></strong></p>

                             <p class="mb-0"><?= $comment['commentDateFr'] ?></p>
                        </div>
                    </div>
                    <p class="comment"><?= nl2br(htmlspecialchars($comment['comment'])) ?></p>
                </div>
                <hr>
                <?php
            }
            ?>
        </div>
    </div>
</div>

    <div class="row">
        <div class="col-1 no-gutter">
        </div>
        <div class="col-md-11 col-sm-12 mt-4">

            <h4 class="category-title">Discover also</h4>

            <div class="row">
                <?php  while ($data = $recommendedTutos->fetch()){ ?>
                    <div class="col-md-3 pt-2 my-2">
                        <!-- Card -->
                        <article class="card animated">
                            <div class="img-container">
                                <img class="card-img-top card-img-rounded img-fluid" src="./public/img/tutos-header-img/<?php if(!empty($data['headerImg'])){echo htmlspecialchars($data['headerImg']);} else {echo "default.jpg";} ?>"/>
                                <a <?php if (!isset($_SESSION['userId'])){echo 'data-toggle="modal" data-target="#exampleModal"';}?> href="./controller/bookmark.php?action=bookmark&tutoId=<?= $data['id']?>&userId=<?= $_SESSION['userId']?>">
                                    <div class="position-absolute bookmarked-icon" style="top : 0px; z-index:1000;">
                                        <?php if(isset($data['bookmark'], $_SESSION['userId'] ) && $data['bookmarkUser'] === $_SESSION['userId']){
                                            echo '<i class="fa fal fa-bookmark"></i>';
                                        }
                                        else {
                                            echo '<i class="fa far fa-bookmark"></i>';
                                        }
                                        ?>
                                    </div>
                                </a>
                            </div>
                            <a href="index.php?action=tuto&id=<?= $data['id']?>">
                                <div class="card-block">
                                    <div class="card-block">
                                        <h6 class="card-title"><?php echo htmlspecialchars(substr($data['title'],0,33));?> <?php if (iconv_strlen($data['title']) > 30  ) {echo "...";}?></h6>
                                        <p class="card-text"><?= htmlspecialchars(substr($data['description'], 0,110)); ?> <?php if (iconv_strlen($data['description']) > 100) {echo "...";}?></p>
                                        <div class="d-flex justify-content-between">
                                            <span class="upvote"> <?= htmlspecialchars($data['upvote'])?> upvote</span>
                                            <h6 class="level <?= htmlspecialchars($data['color'])?>"><?= htmlspecialchars($data['tutoLevel'])?></h6>
                                            <span class="time "><img src="./public/img/icon/timer-icon.png" class="mr-2"><?= htmlspecialchars($data['durationNumber'])?> <?= htmlspecialchars($data['durationType'])?></span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </div>
                <?php } $recommendedTutos->closeCursor(); ?>
            </div>
        </div>
    </div>


</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
