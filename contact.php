<!DOCTYPE html>
<html lang="en">
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
    <header>
        <?php include 'header.php'; ?>
    </header>
    <div class="container">
        <div class="login-box">
            <h2>Nous contacter</h2>
            <form action="connectBD.php" method="POST">
                <div class="input-group">
                    <input type="text" id="Nom" name="Nom" required />
                    <label for="Nom">Name</label>
                    <i class="fas fa-user"></i>
                </div>
                <div class="input-group">
                    <input type="text" id="Prenom" name="Prenom"  required />
                    <label for="Prenom">LastName</label>
                    <i class="fas fa-user"></i>
                </div>
                <div class="input-group">
                    <input type="Email"id="Email" name="Email" required/>
                    <label for="Email">email</label>
                    <i class="fa-solid fa-envelope"></i>
                </div>
            

          
            <div class="input-group">
                
                <label for="inputState" class="form-label">choisissez votre sujet</label>
    <select id="sujet" name ="sujet" class="form-select">
      <option selected>Sujet</option>
      <option>Demande d'infos</option>
      <option>Rendez-vous</option>
      <option>Autres</option>
    </select>
                
    
  </div>
 
            
                
                <button type="submit">Nous contacter</button>
                
                
                
            </form>
            <p id="message"></p>
        </div>
    </div>
        
<?php
    include 'footer.php';
?>
    
    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>

  

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>