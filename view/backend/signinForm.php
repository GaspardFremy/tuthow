<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>connexion</title>

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <!-- CSS link -->
    <link rel="stylesheet" href="./public/css/swiper.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/tuto.css">

</head>

<body>

    <div class="row">
        <div class="col-1 no-gutter">

        </div>
        <div class="col-md-11 col-sm-12 body-container">

        <h1>Connexion/Inscription</h1>

        <form class="form-signin my-5" action="./controller/signin.php" method="post" >

        <h2 class="form-signin-heading">Créer un compte</h2>

        <label for="inputEmail" class="sr-only">Addresse mail</label>
        <input type="text" class="form-control" name="email" placeholder="Email address" required value="<?php if(isset($_GET['email'])){echo $_GET['email'];}?>">

        <label for="inputPseudo" class="sr-only">Pseudo</label>
        <input type="text" class="form-control" name="pseudo" placeholder="Pseudo" required value="<?php if(isset($_GET['pseudo'])){echo $_GET['pseudo'];}?>">

        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" class="form-control" name="password" placeholder="Mot de passe" required value="<?php if(isset($password)){echo $_POST['password'];}?>">

        <label for="inputPassword" class="sr-only">Confirmation mot de passe</label>
        <input type="password" class="form-control" name="confirm_password" placeholder="Confirmer le mot de passe" required value="<?php if(isset($confirm_password)){echo $_POST['confirm_password'];}?>">

        <br>
        <button class="btn btn-lg btn-primary btn-block" name="form_signin" type="submit">S'inscrire</button>
    </form>



      <?php if(isset($_GET['error']) AND !empty($_GET['error'])){?>
        <div class="alert alert-danger" role="alert"><?php
            echo $_GET['error'];?>
        </div><?php
        }?>




    <form class="form-signin my-5" method="post" action='./controller/login.php'>
        <h2 class="form-signin-heading">Connectez vous</h2>
        <label for="inputEmail" class="sr-only">addresse mail</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="login_email" value="<?php if(isset($_GET['login_email'])){echo $_GET['login_email'];}?>" required autofocus>
        <label for="inputPassword" class="sr-only">mot de passe</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="login_password" required>
        <div class="checkbox">
        <label>
        <input type="checkbox" value="remember-me"> Remember me
        </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" name="form-login" type="submit">Sign in</button>
    </form>

        <a href="./index.php?action=home">retour à l'accueil</a>

        </div>
    </div>


    <!-- jQuery first, then Tether, then Bootstrap JS. -->
   <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
   <script src="./public/js/fontawesome-all.js"></script>
   <script src="./public/js/swiper.min.js"></script>
   <script src="./public/js/script.js"></script>


   <!-- Initialize Swiper -->
 <script>
   var swiper = new Swiper('.swiper-container', {
     slidesPerView: 4,
     spaceBetween: 20,

     autoplay: {
        delay: 5500,
        disableOnInteraction: true,
      },

      loop: true,

      keyboard: {
        enabled: true,
      },

     navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
     breakpoints: {
       1024: {
         slidesPerView: 4,
         spaceBetween: 40,
       },
       768: {
         slidesPerView: 3,
         spaceBetween: 30,
       },
       640: {
         slidesPerView: 2,
         spaceBetween: 20,
       },
       320: {
         slidesPerView: 1,
         spaceBetween: 10,
       }
     }
   });
 </script>

</body>
</html>
