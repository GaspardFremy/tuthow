<?php

//Hashage du mot de passe
$password_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$confirm_password = password_hash($_POST['confirm_password'], PASSWORD_DEFAULT);

// stérélisation des données
$email = htmlspecialchars($_POST['email']);
$pseudo = htmlspecialchars($_POST['pseudo']);

$error = "";

//verification confirmation mot de passe
if ($_POST['password'] == $_POST['confirm_password'])
{
    //verifier si le mail est libre
    $db = dbConnect();

    $req = $db->prepare('SELECT id FROM users WHERE email = :email');
    $req->execute(array(
        'email' => $email,
    ));

    $resultat = $req->fetch();

    if ($resultat)
    {
        $error = "l'utilisateur existe déjà";
    }

    else
    {
        //Si le mail est libre, l'inserer les données dans la base
        $req = $db->prepare('INSERT INTO users(email, password, pseudo, date_inscription) VALUES(:email, :password, :pseudo, CURDATE())');
        $req->execute(array(
            'password' => $password_hache,
            'email' => $email,
            'pseudo' => $pseudo
        ));

        header("location: ../index.php?action=signed");

    }
}

else
{
    $error = "mots de passe différents";

}

if(!empty($error)){
    header("location: ../index.php?action=profile&error=$error&email=$email&pseudo=$pseudo");
}


function dbConnect()
{
    $db = new PDO('mysql:host=localhost;dbname=tuthow;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    return $db;
}

?>
