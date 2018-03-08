<?php $title = 'accueil'; ?>

<?php ob_start(); ?>


<div class="row">
    <div class="col-1 no-gutter">

    </div>
    <div class="col-md-11 col-sm-12 body-container">
        <h4 class="category-title">Récent</h4>

        <div class="swiper-container ">
            <div class="swiper-wrapper">
                <?php while ($data = $sliderTutos->fetch())

                {?>
                    <div class="swiper-slide">
                        <!-- Card -->
                        <article class="card animated">
                            <div class="img-container">
                                <img class="card-img-top card-img-rounded img-fluid" src="./public/img/tutos-header-img/<?= htmlspecialchars($data['id'])?>.jpg"/>
                                <div class="position-absolute bookmarked-icon" style="top : 0px; z-index:1000;">
                                    <i class="fa far fa-bookmark "></i>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="card-block">
                                    <h6 class="card-title"><?php echo htmlspecialchars(substr($data['title'],0,40));?></h6>
                                    <p class="card-text"><?= htmlspecialchars(substr($data['description'], 0,100)); ?> </p>
                                    <span class="upvote float-left"> <?= htmlspecialchars($data['upvote'])?> upvote</span>
                                    <h6 class="level <?= htmlspecialchars($data['color'])?> float-left mx-5"><?= htmlspecialchars($data['tutoLevel'])?></h6>
                                    <span class="time float-right"><img src="./public/img/icon/timer-icon.png" class="mr-2"><?= htmlspecialchars($data['durationNumber'])?> <?= htmlspecialchars($data['durationType'])?></span>
                                </div>
                            </div>
                        </article>
                    </div>

                    <?php
                }
                $sliderTutos->closeCursor();?>

                <div class="swiper-slide">
                    <!-- Card -->
                    <article class="card animated">
                      <div class="card-img-overlay liked-icon">
                          <i class="fa far fa-heart float-right"></i>
                      </div>
                      <img class="card-img-top card-img-rounded img-fluid" src="./public/img/firstcardbg.png"  />
                      <div class="card-block">
                          <h6 class="card-title">Fabriquer votre propre casque de VR pour …</h6>
                          <p class="card-text">Here are the 10 best must-have resources for graphic designers that will help you get your work done better, faster and in higher quality. </p>
                          <span class="upvote float-left">452 upvote</span>
                          <h6 class="level-easy float-left mx-5">Facile</h6>
                          <span class="time float-right"><img src="./public/img/icon/timer-icon.png" class="mr-2">5 min</span>
                      </div>
                    </article>
                </div>
            </div>
        </div>

        <h4 class="category-title2">À la une</h4>

        <div class="row">
            <div class="col-6 pdg-10">

                <?php while ($data = $largeTuto->fetch())

                {?>
                    <!-- Card -->
                    <article class="card lg-card animated position-relative">

                    <div class="img-container">
                        <img class="card-img-top card-img-rounded img-fluid" src="./public/img/tutos-header-img/<?= htmlspecialchars($data['id'])?>.jpg"/>
                        <div class="position-absolute bookmarked-icon" style="top : 0px; z-index:1000;">
                            <i class="fa far fa-bookmark "></i>
                        </div>
                    </div>

                    <div class="card-block">
                        <h6 class="card-title"><?php echo htmlspecialchars(substr($data['title'],0,80));?></h6>

                        <p class="card-text"><?= htmlspecialchars(substr($data['description'], 0,180)); ?> </p>
                        <span class="upvote float-left"> <?= htmlspecialchars($data['upvote'])?> upvote</span>
                        <h6 class="level <?= htmlspecialchars($data['color'])?> float-left mx-5"><?= htmlspecialchars($data['tutoLevel'])?></h6>
                        <span class="time float-right"><img src="./public/img/icon/timer-icon.png" class="mr-2"><?= htmlspecialchars($data['durationNumber'])?> <?= htmlspecialchars($data['durationType'])?></span>
                    </div>
                    </article><?php
                }
                $largeTuto->closeCursor();?>
            </div>

            <div class="col-6 pdg-10">
                <!-- Card -->
                <article class="card animated">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-block">
                                <h6 class="card-title">Fabriquer votre propre casque de VR pour …</h6>
                                <p class="card-text">Here are the 10 best must-have resources for graphic designers that will help you get your work done better, faster and in higher quality. </p>
                                <span class="upvote float-left">452 upvote</span>
                                <h6 class="level-easy float-left mx-5">Facile</h6>
                                <span class="time float-right"><img src="./public/img/icon/timer-icon.png" class="mr-2">5 min</span>
                            </div>
                        </div>
                        <div class="col-6 pdg-0">
                            <div class="img-bg" style="height: 100%; background-image: url(./public/img/firstcardbg.png); background-size: cover;"></div>
                            <!-- <img class="card-img-rounded img-fluid" src="./public/img/firstcardbg.png"  /> -->
                        </div>
                    </div>
                </article>
                <div class="row" style="padding-top: 17px;">
                    <div class="col-6 pdg-10">
                        <article class="card animated">
                            <div class="card-block">
                                <h6 class="card-title">Fabriquer votre propre casque de VR</h6>
                                <p class="card-text">Here are the 10 best must-have resources for graphic designers that will help you get your work done better, faster and in higher quality. </p>
                                <span class="upvote float-left">452 upvote</span>
                                <h6 class="level-easy float-left mx-5">Facile</h6>
                                <span class="time float-right"><img src="./public/img/icon/timer-icon.png" class="mr-2">5 min</span>
                            </div>
                        </article>
                    </div>
                    <div class="col-6 pdg-10">
                        <article class="card animated">
                            <div class="card-block">
                                <h6 class="card-title">Fabriquer votre propre casque de VR</h6>
                                <h6 class="level-easy float-left">Facile</h6>
                                <span class="time float-right"><img src="./public/img/icon/timer-icon.png" class="mr-2">5 min</span>
                            </div>
                        </article>

                        <article class="card animated" style="margin-top: 15px;">
                            <div class="card-block">
                                <h6 class="card-title">Fabriquer votre propre casque de VR pour ...</h6>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>







        </div>
    </div>
</div>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
