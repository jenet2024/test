<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> utilisateurs</title>
    <link rel="stylesheet" href="pagesecrete.css">
    
</head>
<body>
    <div class="rien">

    </div>

   <div>
        <h3 class="texte">  cette page n'est limitée qu'à l'administrateur  </h3>
   </div> 

<?php

    include("secret.php");
    include("dp.php");
    include("components/monheader.php");
    

// Traitement du formulaire
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    
   
    // $nom = $_POST['nom'];
    // $prenom = $_POST['prenom'];
    // $email = $_POST['email'];
    

    // Insertion dans la base de données
//     $sql = "INSERT INTO inscriptions  (nom , prenom , email) VALUES (? , ? , ?)";
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute([$nom , $prenom , $email]);

//     echo "L'utilisateur a été ajouté avec succès !<br>";
    
// }

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs du formulaire

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    // Validation simple des données
    if (empty($nom) || empty($prenom) || empty($email) || empty($password)) {
        echo "Le prénom , le nom  et l'email sont obligatoires.";
    } else {
        // Préparer la requête d'insertion
        $sql = "INSERT INTO inscriptions (nom, prenom , email , password) VALUES (:nom, :prenom , :email , :password)";
        $stmt = $pdo->prepare($sql);
        
        // Lier les paramètres et exécuter la requête
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
         $stmt->bindParam(':password', $password);
        if ($stmt->execute()) {
            echo "Les données ont été enregistrées avec succès.";
        } else {
            echo "Une erreur est survenue lors de l'enregistrement.";
        }
    }
}

// Récupérer tous les joueurs de la base de données
$sql = "SELECT nom, prenom, email , password FROM  inscriptions";
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
            background-color:pink;
            /* margin :20px; */
            position: center;
           
        }
        table, th, td {
            border: 1px solid black;
            margin: 20px;
            padding : 100px;
             margin-left:80px;
            
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>

    <h2>Liste des utilisateurs inscrits</h2>
    
    <table>
        <thead>

            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Mot de passe </th>
            </tr>

        </thead>
        <tbody>
            <?php foreach ($inscriptions as $inscription): ?>
                <tr>
                    <td><?= htmlspecialchars($inscription['nom']); ?></td>
                    <td><?= htmlspecialchars($inscription['prenom']); ?></td>
                    <td><?= htmlspecialchars($inscription['email']); ?></td>
                    <td><?= htmlspecialchars($inscription['password']); ?></td>
                    
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
</body>
</html>