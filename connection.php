<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form method="post" action="">
        <h1>Inscription</h1>
        <p>Nom</p>
        <input type="text" name="Nom">
        <p>Prenom</p>
        <input type="text" name="Prenom">
        <p>email</p>
        <input type="email" name="email">
        <p>Password</p>
        <input type="password" name="password">
        <p>Répetez votre password</p>
        <input type="password" name="repeatpassword"><br><br>
        <input type="submit" name="submit" value="Valider">

    </form>
  </body>
</html>


<style media="screen">
  body{

  }
  form{
    font-family: 'BebasNeue-Bold'sans-serif;
    text-align: center;
    align-content: center;
    font-size: 20px;
  }
  html{
    background-color: #2c3e50;
    
  }
</style>


<?php

if (isset($_POST['submit']))
{
   /* on test si les champ sont bien remplis */
    if(!empty($_POST['Nom']) and !empty($_POST['Prenom']) and !empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['repeatpassword']))
    {
        /* on test si le mdp contient bien au moins 6 caractère */
        if (strlen($_POST['password'])>=6)
        {
            /* on test si les deux mdp sont bien identique */
            if ($_POST['password']==$_POST['repeatpassword'])
            {
                // On crypte le mot de passe
                $_POST['password']= md5($_POST['password']);
                // on se connecte à MySQL et on sélectionne la base
                $c = new mysqli("127.0.0.1","root","","ecobank");
                //On créé la requête
                $sql = "INSERT INTO newclient VALUES ('".$_POST['id']."','".$_POST['Nom']."','".$_POST['Prenom']."','".$_POST['email']."','".$_POST['password']."')";

                /* execute et affiche l'erreur mysql si elle se produit */
                if(!$c->query($sql))
                {
                    printf("Message d'erreur : %s\n", $c->error);
                }
            // on ferme la connexion
            mysqli_close($c);
            }
            else echo "Les mots de passe ne sont pas identiques";
        }
        else echo "Le mot de passe est trop court !";
    }
    else echo "Veuillez saisir tous les champs !";
}
?>
</body>
</html>
</html>
