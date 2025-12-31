

<?php

include("db.php");

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // on récupère les données du formulaire
    $Nom =$_POST['Nom'];
    $Prenom =$_POST['Prenom'];
    $Email =$_POST['Email'];
    $sujet =$_POST['sujet'];

    // on insère dans la BDD
    $sql = "INSERT INTO clients (Nom, Prenom, Email, sujet) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$Nom, $Prenom, $Email, $sujet]);


    // Redirection après l'ajout du joueur
    maheader('Location: pageconnect.php');  // Rediriger vers la même page
    exit; // Terminer le script pour éviter que le code suivant ne s'exécute
}

// on récupère tous les joueurs de la BDD
$sql = "SELECT Nom, Prenom, Email, sujet FROM clients";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$clients = $stmt->fetchAll();
?>







<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    
    <link rel="stylesheet" href="contact.css">
    <script src="veriform.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
</head>

</head>
<body>
    <div class="container">
        <div class="login-box">
            <h2>Login</h2>
            <form action="connectBD.php" method="POST">
                <div class="input-group">
                    <input type="text" id="Nom" name="Nom" required />
                    <label for="Nom">Name</label>
                    <i class="fas fa-user"></i>
                </div>
                <div class="input-group">
                    <input type="text" id="Prenom" name="Prenom" required />
                    <label for="Prenom">LastName</label>
                    <i class="fas fa-user"></i>
                </div>
                <div class="input-group">
                    <input type="Email"id="Email" name="Email" placeholder="jerome@gmail.com"required/>
                    <label for="Email">email</label>
                    <i class="fas fa-user"></i>
                </div>
              

          
            <div class="input-group">
                
                <label for="inputState" class="form-label">choisissez votre sujet</label>
    <select id="sujet" name="sujet" class="form-select">
      <option selected>Sujet</option>
      <option>Demande d'infos</option>
      <option>Rendez-vous</option>
      <option>Autres</option>
    </select>
                
    
  </div>
  <!-- <input type="">
  <label>:</label>

<textarea id="story" name="story" rows="5" cols="33">
...
</textarea> -->
                <!-- <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Demande de renseignements
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Renseignements</a>
                        <a class="dropdown-item" href="#">Rendez-vous</a>
                        <a class="dropdown-item" href="#">Autres</a>
                    </div>
                </div> -->
            
                <div class="remember-forgot">
                    <label><input type="checkbox" /> Se souvenir de moi </label>
                    <a href="#">Forgot Password ?</a>
                </div>
                <button type="submit">Login</button>
                <div class="register-link">
                    <p>Vous n'avez pas de compte ?
                    <a href="#">Se connecter</a>
                    </p>
                
                </div>
            </form>
            <p id="message"></p>
        </div>
    </div>
        

    
    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

  

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>