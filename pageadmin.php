<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> utilisateurs</title>
    <link rel="stylesheet" href="pageadmin.css">
</head>
<body>
    <div class="rien">

    </div>

   <div>
        <h3 class="texte">  Seul l'administrateur a le droit d'accéder à cette page.  </h3>
   </div> 


<?php
   
    include("secret.php");
    include("dp.php");
    include("components/maheader.php");
    

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    
   
    $email = $_POST['email'];
     $password = $_POST['password'];
    

    // Insertion dans la base de données
    $sql = "INSERT INTO inscriptions  (email, password) VALUES (? , ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email , $password]);

    echo "L'utilisateur a été ajouté avec succès !<br>";
}

// Récupérer tous les joueurs de la base de données
$sql = "SELECT email , password  FROM inscriptions";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$inscriptions = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des utilisateurs - utilisateurs  Manager</title>
    <style>

        
        table {
            width: 75%;
            border-collapse: collapse;
            background-color:#8FBC8F;
            position: center;
        }
        table, th, td {
            border: 1px solid black;
            margin:20px;
            padding:100px;
            margin-left:80px;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

    <h2>Liste des utilisateurs connectés </h2>
    
    <table>
        <thead>

            <tr>
               
                <th>email</th>
                <th>password</th>
            </tr>

        </thead>
        <tbody>
            <?php foreach ($inscriptions as $inscription): ?>
                <tr>
                    
                    <td><?= htmlspecialchars($inscription['email']); ?></td>
                    <td><?= htmlspecialchars($inscription['password']); ?></td>
                    
            <?php endforeach; ?>
            
        </tbody>
    </table>
</body>
</html>
</body>
</html>