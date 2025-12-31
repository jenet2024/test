
<?php
    include("dp.php");
    // include("components/maheader.php");

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    
   
    $email = $_POST['email'];
    $password = $_POST['password'];
    

    // Insertion dans la base de données
    $sql = "INSERT INTO inscriptions  (email , password) VALUES (? , ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email, $password]);

    // Redirection après l'ajout du joueur
    maheader('Location: pageadmin.php');  // Rediriger vers la même page
    exit; // Terminer le script pour éviter que le code suivant ne s'exécute

    echo "L'utilisateur a été ajouté avec succès !<br>";
}

// Récupérer tous les joueurs de la base de données
$sql = "SELECT email , password FROM inscriptions";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$inscriptions = $stmt->fetchAll();
?>







   


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>se connecter/s'inscrire</title>
    
    <link rel="stylesheet" href="stile.css">
    <script src="FichierJ.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    
</head>

</head>

<body>
    
    <div class="container">
        <div class="wrapper">
            <section class="login">
                <h1>Connexion</h1>
                <form action="reconnect.php" method = "POST">
                    <div class="inputbox">
                        
                        <input type="email" id="email" name="email" required/>
                        <label for="email">Email </label>
                        <i class="fa-solid fa-envelope"></i>
                        
                    </div>
                    <div class="inputbox">
                        
                        <input type="password" required name="password">
                        <label for="">Mot de passe</label>
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="forgot">
                        <input type="checkbox">
                        <a href="">Mot de passe oublie?</a>
                    </div>

                    <button id ="but">Connexion</button>
                    <div class="register-option">
                        <span>Pas de compte?</span>
                        <a href="" id="switch-to-register">Inscrivez-Vous</a>
                    </div>

                </form>
            </section>

            <section class="register">
                <form>
                    <h1>Inscription</h1>
                     <div class="inputbox">
                        <i class="fas fa-user"></i>
                        <input type="nom" required name="Nom">
                        <label for="">Nom</label>
                        
                    </div>
                    <div class="inputbox">
                        <i class="fas fa-user"></i>
                        <input type="prenom" required name ="Prenom">
                        <label for="">Prenom</label>
                        
                    </div>
                    <!-- <div class="inputbox">
                        <ion-icon name="person"></ion-icon>
                        <input type ="text" required>
                        <label for ="">Nom</label>
                    </div> -->
                   
                    <div class="inputbox">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" required  name="Email">
                        <label for="">Email</label>
                        
                    </div>
                   <div class="inputbox">
                    <i class="fas fa-lock"></i>
                        <input type="password" required name="Mot de passe">
                        <label for="">Mot de passe</label>
                         
                    </div>
                    <button>Inscription</button>
                    <div class="register-option">
                        <span>Déja un compte?</span>
                        <a href="" id="switch-to-login">Connectez-Vous</a>
                    </div>
                </form>
            </section>
        </div>
    </div>





    <!-- <script src="FichierJ.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"integrity=
        "sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="crossorogin="anonymous">
    </script>  -->
   

  

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
