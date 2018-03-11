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
