<?php $title = 'bookmarked'; ?>

<?php ob_start(); ?>


<div class="row">
    <div class="col-1 no-gutter">
    </div>
    <div class="col-md-11 col-sm-12 body-container">

        <h4 class="category-title">My tutos</h4>

        <div class="row">
            <?php if(isset($_SESSION['userId']) && $_SESSION['userId'] > 1){

                while ($data = $myTutos->fetch())

                //TODO : Folowing condition is suppose to work.. Tried rowCount() alrd
                if (empty($myTutos)) {
                    echo '<h5>You don\'t have any bookmar tuto yet</h5>';
                }

                else {
                    ?>
                    <div class="col-md-3 pt-2">
                        <!-- Card -->
                        <article class="card animated">
                            <div class="img-container">
                                <img class="card-img-top card-img-rounded img-fluid" src="./public/img/tutos-header-img/<?php if(!empty($data['headerImg'])){echo htmlspecialchars($data['headerImg']);} else {echo "default.jpg";} ?>"/>
                                <a <?php if (!isset($_SESSION['userId'])){echo 'data-toggle="modal" data-target="#exampleModal"';}?> href="./controller/bookmark.php?action=bookmark&tutoId=<?= $data['id']?>&userId=<?= $_SESSION['userId']?>">
                                    <div class="position-absolute bookmarked-icon" style="top : 0px; z-index:1000;">
                                        <?php if(isset($data['bookmark'])){
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
                    <?php
                }



                $myTutos->closeCursor();
            }?>
        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('./view/frontend/template.php'); ?>
