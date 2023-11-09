<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./style/style.css">
      <title>Senregistrer</title>
   </head>
   <body>

      <div class="container">
         <div class="box form-box">
            <?php
               include("php/config.php");
               if(isset($_POST['submit'])){ // Vérifie si le formulaire a été soumis
                   $nomutilisateur = $_POST['nomutilisateur']; // Récupère la valeur du champ "nomutilisateur"
                   $email = $_POST['email']; // Récupère la valeur du champ "email"
                   $age = $_POST['age']; // Récupère la valeur du champ "age"
                   $motdepasse = $_POST['motdepasse']; // Récupère la valeur du champ "motdepasse"
               
                   $verify_query = mysqli_query($con, "SELECT Email FROM utilisateurs WHERE Email='$email'");
                    // Vérifie si l'email existe déjà dans la base de données
               
                   if(mysqli_num_rows($verify_query) != 0) // Vérifie si l'email existe déjà
                   {
                       echo "<div class='message'>
                               <p> Cet Email est déjà utilisé, veuillez réessayer avec une autre adresse ! </p>
                             </div> <br>";
                       echo "<a href = 'javascript:self.history.back()'><button class='btn'>Retour</button>"; 
                       // Affiche un message d'erreur et un bouton de retour
                   }
                   else{
                       mysqli_query($con, "INSERT INTO utilisateurs(NomUtilisateur, Email, Age,
                        Motdepasse) VALUES('$nomutilisateur','$email','$age', '$motdepasse')") or die("Erreur survenue !"); 
                        // Insère les données de l'utilisateur dans la base de données
               
                       echo "<div class='message'>
                               <p> Enregistrement réussi ! </p>
                             </div> <br>";
                       echo "<a href = './index.php'><button class='btn'>Se connecter maintenant</button>"; 
                       // Affiche un message de succès et un bouton de redirection vers la page de connexion
                   }
               }
               else{
               ?>
            <header>S'enregistrer</header>

            <form action="" method="post">
               <div class="field input">
                  <label for="nomutilisateur">Nom Utilisateur</label>
                  <input type="text" name="nomutilisateur" id="nomutilisateur" autocomplete="off" required>
               </div>

               <div class="field input">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" autocomplete="off" required>
               </div>

               <div class="field input">
                  <label for="age">Age</label>
                  <input type="number" name="age" id="age" autocomplete="off" required>
               </div>

               <div class="field input">
                  <label for="motdepasse">Mot de passe</label>
                  <input type="password" name="motdepasse" id="motdepasse" autocomplete="off" required>
               </div>

               <div class="field">
                  <input type="submit" class="btn" name="submit" value="S'enregistrer" autocomplete="off" required>
               </div>

               <div class="links">
                  Vous avez déjà un compte ? <a href="index.php">Se Connecter</a>
               </div>

            </form>
         </div>

         <?php } ?>

      </div>

   </body>

</html>