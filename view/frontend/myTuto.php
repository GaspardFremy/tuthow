<?php $title = 'bookmarked'; ?>

<?php ob_start(); ?>


<div class="row">
    <div class="col-1 no-gutter">
    </div>
    <div class="col-md-11 col-sm-12 body-container">

        <h4 class="category-title">My tutos</h4>

        <div class="row">
            <!-- Button trigger modal -->


            <!-- Modal -->
            <div class="modal fade" id="deletModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">

                  </div>
                  <div class="modal-body">
                      Are you sure you want to delet this tuto?
                  </div>
                  <div class="modal-footer">
                      <button class="btn btn-default"data-dismiss="modal" aria-hidden="true">Cancel</button>
                      <a href="#" class="btn btn-danger"  id="modalDelete" >Delete</a>
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="./index.php?action=myTutos&id=<?= $data['id']?>" <button type="button" class="btn btn-primary">Save changes</button> </a> -->
                  </div>
                </div>
              </div>
            </div>

            <?php if(isset($_SESSION['userId']) && $_SESSION['userId'] > 1){

                while ($data = $myTutos->fetch())

                //TODO : Folowing condition is suppose to work.. Tried rowCount() alrd
                if (empty($myTutos)) {
                    echo '<h5>You don\'t have any bookmarked tuto yet</h5>';
                }

                else {
                    ?>

                    <div class="col-sm-6 col-md-4 col-lg-3  pt-2">

                        <!-- Card -->
                        <article class="card animated mb-4">
                            <div class="img-container">
                                <img class="card-img-top card-img-rounded img-fluid" src="./public/img/tutos-header-img/<?php if(!empty($data['headerImg'])){echo htmlspecialchars($data['headerImg']);} else {echo "default.jpg";} ?>"/>
                                <a href="index.php?action=editTutoPage&id=<?= $data['id']?>&title=<?=$data['title']?>&description=<?=$data['description']?>">
                                    <div class="card-icon" style="top :0px; right: 8px;  z-index:1000;">
                                        <i class="far fa-edit"></i>
                                    </div>
                                </a>

                                <a href="#">
                                    <div class="card-icon trash" data-id="<?= $data['id']?>" data-toggle="modal" data-target="#deletModal" style="top : 0px; left: 8px;z-index:1000;">
                                        <i class="far fa-trash-alt"></i>
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
