<?php $title = 'tuto'; ?>
<?php $css = '<link rel="stylesheet" href="./public/css/tuto.css">'; ?>


<?php ob_start(); ?>

<div class="header-img-container" style="background-image: url('./public/img/tutos-header-img/<?php if(!empty($tuto['headerImg'])){echo htmlspecialchars($tuto['headerImg']);} else {echo "default.jpg";} ?>">
</div>
<div class="container">
    <div class="col-md-11 col-sm-12 body-container">
        <div class="container-fluid">
            <h2><?= $tuto['title']?></h2>
            <h5><?= $tuto['description']?></h5>
            <div class="content row">
                <h6>STEP 1 : Conditional GANs and variational auto encoders.</h6>
                <p>Think of the typical and well-studied neural networks (such as image classifier) as a left hemisphere of the neural network technology. With this in mind, it is easy to understand what is Generative Adversarial Network.
                It is a kind of right hemisphere — the one that is claimed to be responsible for creativity.</p>

                <p>The Generative Adversarial Networks (GANs) are the first step of neural networks technology learning creativity. Typical GAN is a neural network trained to generate images on the certain topic using an image dataset and some random noise as a seed. Up until now images created by GANs were of low quality and limited in resolution. Recent advances by NVIDIA showed that it is within a reach to generate photorealistic images in high-resolution and they published the technology itself in open-access.</p>
                <img style="margin-bottom: 25px;" src="./public/img/IMG_20160330_150145823.png">
                <h6>STEP 2 : Conditional GANs and variational auto encoders.</h6>
                <p>There is a plethora of GANs types of various complexity, architectures, and strange acronyms. We are mostly interested here in conditional GANs and variational autoencoders. Conditional GANs are capable of not just mimicking the broad type of images as “bedroom”, “face”, “dog” but also dive into more specific categories. For example, the Text2Image network is capable of translation textual image description into the image itself.</p>

                <p>By varying random seed that is concatenated to the “meanings” vector we are able to produce an infinite number of birds image, matching description.</p>

                <p>The opportunity
                Let’s just close your eyes and see the world in 2 years. Companies like NVIDIA will push GAN technology to industry-ready level, same as they did with celebrities faces generation. This means, that a GAN will be able to generate any image, on-demand, on-the-fly based on textual (for example) description. This will render obsolete a number of photography and design related industries. Here’s how this will work.</p>
                <img src="./public/img/Capture d’écran 2018-02-14 à 23.34.39.png">
            </div>
        </div>
    </div>
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
