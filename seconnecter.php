<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>se connecter/s'inscrire</title>

    <link rel="stylesheet" href="stile.css">
    <script src="FichierJ.js"defer></script>
    
   
    <script src="FichierJ.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    
</head>

</head>

<body>
<php
    <header>
        <?php include 'header.php'; ?>
    </header>
    
    <div class="container">
        <div class="wrapper">
            <section class="login">
                <h1>Connexion</h1>
                <form action="reconnect.php" method ="POST">
                    <div class="inputbox">
                        
                        <input type="email" id="email" required name="email"/>
                        <label for="email">Email </label>
                        <i class="fa-solid fa-envelope"></i>
                        
                    </div>
                    <div class="inputbox">
                        
                        <input type="password"  name="password" required>
                        <label for="password">Mot de passe</label>
                        <i class="fas fa-lock"></i>
                    </div>
                    <!-- <div class="forgot">
                        <input type="checkbox">
                        <a href="">Mot de passe oublie?</a>
                    </div> -->

                    <button type="submit" id="but">Connexion</button>
                    
                    <div class="register-option">
                        <span>Pas de compte?</span>
                        <a href="" id="switch-to-register">Inscrivez-Vous</a>
                    </div>

                </form>
            </section>

            <section class="register">
                <form action="reinscription.php" method="POST">
                    <h1>Inscription</h1>
                     <div class="inputbox">
                        <i class="fas fa-user"></i>
                        <input type="nom" required name="nom">
                        <label for="">Nom</label>
                        
                    </div>
                    <div class="inputbox">
                        <i class="fas fa-user"></i>
                        <input type="prenom" required name ="prenom">
                        <label for="">Prenom</label>
                        
                    </div>
                   
                   
                    <div class="inputbox">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" required  name="email">
                        <label for="">Email</label>
                        
                    </div>
                   <div class="inputbox">
                    <i class="fas fa-lock"></i>
                        <input type="password"  name="password" required>
                        <label for="password">Mot de passe</label>
                         
                    </div>
                    <button type="submit">Inscription</button>
                    <div class="register-option">
                        <span>Déja un compte?</span>
                        <a href="" id="switch-to-login">Connectez-Vous</a>
                    </div>
                </form>
            </section>
        </div>
    </div>


    
        <?php
         include 'footer.php';
          ?>


 <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
