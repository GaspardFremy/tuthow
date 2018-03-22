<?php $title = 'accueil'; ?>

<?php ob_start(); ?>


<div class="row">
    <div class="col-md-1 col-s-0 no-gutter">

    </div>
    <div class="col-md-11 col-sm-12 body-container">
        <h4 class="category-title">Récent</h4>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php while ($data = $sliderTutos->fetch())

                {?>
                    <div class="swiper-slide">

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
                $sliderTutos->closeCursor();?>

            </div>
        </div>

        <h4 class="category-title2">À la une</h4>

        <div class="row">
            <div class="col-md-6 col-sm-12 pdg-10">

                <?php while ($data = $largeTuto->fetch())

                {?>
                    <!-- Card -->
                    <article class="card lg-card animated position-relative">

                    <div class="img-container">
                        <img class="card-img-top card-img-rounded img-fluid" src="./public/img/tutos-header-img/<?= htmlspecialchars($data['id'])?>.jpg"/>

                        <a href="./controller/bookmark.php?action=bookmark&tutoId=<?= $data['id']?>&userId=<?= $_SESSION['userId']?>">
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
                            <h6 class="card-title"><?php echo htmlspecialchars(substr($data['title'],0,80));?></h6>
                            <p class="card-text"><?= htmlspecialchars(substr($data['description'], 0,180)); ?> </p>
                            <div class="d-flex justify-content-between">
                                <span class="upvote"> <?= htmlspecialchars($data['upvote'])?> upvote</span>
                                <h6 class="level <?= htmlspecialchars($data['color'])?>"><?= htmlspecialchars($data['tutoLevel'])?></h6>
                                <span class="time "><img src="./public/img/icon/timer-icon.png" class="mr-2"><?= htmlspecialchars($data['durationNumber'])?> <?= htmlspecialchars($data['durationType'])?></span>
                            </div>
                        </div>
                    </a>
                    </article><?php
                }
                $largeTuto->closeCursor();?>
            </div>

            <div class="col-md-6 col-sm-12 pdg-10">
                <?php while ($data = $halfLargeTuto->fetch())

                {?>
                    <article class="card animated">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="index.php?action=tuto&id=<?= $data['id']?>">
                                    <div class="card-block">
                                        <h6 class="card-title"><?php echo htmlspecialchars(substr($data['title'],0,80));?></h6>
                                        <p class="card-text"><?= htmlspecialchars(substr($data['description'], 0,127));?>... </p>
                                        <div class="d-flex justify-content-between">
                                            <span class="upvote"> <?= htmlspecialchars($data['upvote'])?> upvote</span>
                                            <h6 class="level <?= htmlspecialchars($data['color'])?>"><?= htmlspecialchars($data['tutoLevel'])?></h6>
                                            <span class="time "><img src="./public/img/icon/timer-icon.png" class="mr-2"><?= htmlspecialchars($data['durationNumber'])?> <?= htmlspecialchars($data['durationType'])?></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 pdg-0">
                                <div class="img-bg" style="height: 100%; background-image: url(./public/img/tutos-header-img/<?= htmlspecialchars($data['headerImg'])?>); background-size: cover;"></div>
                            </div>
                        </div>
                    </article><?php
                }
                $halfLargeTuto->closeCursor();?>

                <div class="row" style="padding-top: 17px;">
                    <div class="col-md-6 col-sm-6 pdg-10">
                        <?php while ($data = $quarterTuto->fetch())

                        {?>
                            <article class="card animated">
                                <a href="index.php?action=tuto&id=<?= $data['id']?>">
                                    <div class="card-block">
                                        <h6 class="card-title"><?php echo htmlspecialchars(substr($data['title'],0,80));?></h6>
                                        <p class="card-text"><?= htmlspecialchars(substr($data['description'], 0,90));?>...</p>
                                        <div class="d-flex justify-content-between">
                                            <span class="upvote"> <?= htmlspecialchars($data['upvote'])?> upvote</span>
                                            <h6 class="level <?= htmlspecialchars($data['color'])?>"><?= htmlspecialchars($data['tutoLevel'])?></h6>
                                            <span class="time "><img src="./public/img/icon/timer-icon.png" class="mr-2"><?= htmlspecialchars($data['durationNumber'])?> <?= htmlspecialchars($data['durationType'])?></span>
                                        </div>
                                    </div>
                                </a>
                            </article><?php
                        }
                        $quarterTuto->closeCursor();?>


                    </div>
                    <div class="col-md-6 col-sm-6 pdg-10">
                        <?php while ($data = $halfQuarterTutos->fetch())

                        {?>
                            <article class="card animated">
                                <a href="index.php?action=tuto&id=<?= $data['id']?>">
                                    <div class="card-block">
                                        <h6 class="card-title"><?php echo htmlspecialchars(substr($data['title'],0,80));?></h6>
                                        <h6 class="level <?= htmlspecialchars($data['color'])?> float-left"><?= htmlspecialchars($data['tutoLevel'])?></h6>
                                        <span class="time float-right"><img src="./public/img/icon/timer-icon.png" class="mr-2"><?= htmlspecialchars($data['durationNumber'])?> <?= htmlspecialchars($data['durationType'])?></span>
                                    </div>
                                </a>
                            </article><?php
                        }
                        $halfQuarterTutos->closeCursor();?>


                        <?php while ($data = $scdHalfQuarterTutos->fetch())

                        {?>
                            <article class="card animated" style="margin-top: 15px;">
                                <a href="index.php?action=tuto&id=<?= $data['id']?>">
                                    <div class="card-block">
                                        <h6 class="card-title"><?php echo htmlspecialchars(substr($data['title'],0,80));?></h6>
                                    </div>
                                </a>
                            </article><?php
                        }
                        $scdHalfQuarterTutos->closeCursor();?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>



<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
