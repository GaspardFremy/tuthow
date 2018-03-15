<?php

if (isset($_POST['form-login']))
{
  $login_email = htmlspecialchars($_POST['login_email']);
  $login_password = htmlspecialchars($_POST['login_password']);

  $db = dbConnect();

  $req = $db->prepare('SELECT id, password, pseudo FROM users WHERE email = :email');
  $req->execute(array(
    'email' => $login_email,
  ));

  $resultat = $req->fetch();

  // Comparaison du password envoyé via le formulaire avec la bdd
  $isPasswordCorrect = password_verify( $login_password, $resultat['password']);

  if (!$isPasswordCorrect)
  {

    ?>
      <script type="text/javascript">
      window.location.href = '../index.php?action=signinForm&error=Mauvais identifiant ou mot de passe&login_email= <?php echo $login_email ?>';
      </script>
    <?php

  }
  else
  {

      session_start();
      $_SESSION['userId'] = $resultat['id'];
      $_SESSION['pseudo'] = $resultat['pseudo'];



      // header('Location : ../index.php?action=connected');

      //Gros bugg avec le header location, on effectu la redirection en js.
      ?>
        <script type="text/javascript">
        window.location.href = '../index.php?action=connected';
        </script>
      <?php
    }
  }

  function dbConnect()
  {
      $db = new PDO('mysql:host=localhost;dbname=tuthow;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      return $db;
  }

?>
