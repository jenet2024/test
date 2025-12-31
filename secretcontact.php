<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> utilisateurs</title>
    <link rel="stylesheet" href="secretcontact.css">
</head>
<body>

 <div class="rien">

    </div>

   <div>
        <h3 class="texte">  Seul l'administrateur a le droit d'accéder à cette page.  </h3>
   </div> 
    <h1>  clients </h1>

<?php
    include("db.php");
    include("componants/monheader.php");
    include("secret.php");

// Traitement du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données du formulaire
    
    $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $Email = $_POST['Email'];
   
    $sujet = $_POST['sujet'];

    // Insertion dans la base de données
    $sql = "INSERT INTO clients (Nom, Prenom, Email, sujet) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$Nom, $Prenom, $Email, $sujet]);

    echo "Le client a été ajouté avec succès !<br>";
}

// Récupérer tous les joueurs de la base de données
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
    <title>Gestion des clients - utilisateurs  Manager</title>
    <style>

        
        table {
            width: 75%;
            border-collapse: collapse;
            background-color:#EEE8AA;
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

    <h2>Liste des clients</h2>
    
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>LastName</th>
                <th>email</th>
                <th>choisissez le sujet</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= htmlspecialchars($client['Nom']); ?></td>
                    <td><?= htmlspecialchars($client['Prenom']); ?></td>
                    <td><?= htmlspecialchars($client['Email']); ?></td>
                   
                    <td><?= htmlspecialchars($client['sujet']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
</body>
</html>