<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?= $title ?></title>

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <!-- CSS link -->
    <link rel="stylesheet" href="./public/css/swiper.css">
    <link rel="stylesheet" href="./public/css/main.css">
    <link rel="stylesheet" href="./public/css/tuto.css">



</head>

<body>

    <nav class="main-nav navbar sticky-top menu-nav align-items-center">
        <a href="./index.php?action=home"><img src="./public/img/logowhite.png" class="logo" alt=""></a>
        <ul class="d-flex flex-column align-items-space mb-auto">
            <li class="d-flex align-items-center"><a href="./index.php?action=advanceSearch"><img src="./public/img/icon/iconSearch.png" class="icon-menu hvr-bounce-in"alt=""> <span class="ml-2 menu-title"> Recherche </span></li></a>
            <li class="d-flex align-items-center"><a href="./index.php?action=home"><img src="./public/img/icon/iconHome.png" class="icon-menu hvr-bounce-in"alt=""> <span class="ml-2 menu-title">Accueil </span></li></a>
            <li class="d-flex align-items-center"><a href="./index.php?action=category"><img src="./public/img/icon/iconTag.png" class="icon-menu hvr-bounce-in"alt=""> <span class="ml-2 menu-title">Catégories </span></li></a>
        <!-- </ul>
        <ul class="d-flex flex-column align-items-bottom mb-auto"> -->
            <li class="d-flex align-items-center"><a href="./index.php?action=addTuto"><img src="./public/img/icon/iconPencil.png" class="icon-menu hvr-bounce-in"alt=""></a> <span class="ml-2 menu-title"> Écrire un tuto </span></li>
            <li class="d-flex align-items-center"><a href="./index.php?action=bookmarked"><img src="./public/img/icon/iconFav.png" class="icon-menu hvr-bounce-in"alt=""></a> <span class="ml-2 menu-title"> Favoris </span></li>
            <li class="d-flex align-items-center"><a href="./index.php?action=profile"><img src="./public/img/icon/iconProfil.png" class="icon-menu hvr-bounce-in"alt=""></a> <span class="ml-2 menu-title"> Profil </span></li>
        </ul>
    </nav>

    <nav class="responsive-nav navbar navbar-light bg-faded special-blue ">
        <button class="navbar-toggler navbar-toggler-left   " type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <img src="./public/img/logo-nav.png" class="navbar-brand mx-auto d-block " alt="">


        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">

                <br>

                <li class="nav-item">
                    <a class="nav-link" href="./index.php?action=profil">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Favoris</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Publier un tuto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Recherche avancé</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">catégories </a>
                </li>

                <br>

                <li class="text-truncate">
                    <form class="input-group">
                        <input class="form-control" name="search" placeholder="rechercher un tuto" autocomplete="off" autofocus="autofocus" type="text">
                        <div class="input-group-btn">
                        <button class="btn" type="submit"><i class=" fa fas fa-search"></i></button>
                    </form>
                </div>
                </li>
            </ul>
        </div>
    </nav>

    <?= $content ?>

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
