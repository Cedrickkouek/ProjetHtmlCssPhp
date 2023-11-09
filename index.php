<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Connexion</title>
</head>

<body>
    <div class="container">
        <div class="box form-box">
   
          

            <header>Connexion</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="nomutilisateur">Nom Utilisateur</label>
                    <input type="text" name="nomutilisateur" id="nomutilisateur" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="motdepasse">Mot de passe</label>
                    <input type="password" name="motdepasse" id="motdepasse" autocomplete="off" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Connexion" required>
                </div>
                <div class="links">
                    Vous n'avez pas de compte  ? <a href="register.php">Creer un compte maintenant</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>