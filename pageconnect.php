



<?php 

    include 'secret.php';
    include 'dp.php';
    include 'components/monheader.php'; 
    
?>


<h2> Liste des utilisateurs deja inscrits </h2>

<!-- <a href="debut.php"> Ajouter un utilisateur pour l'inscription </a> -->

<!-- Création du tableau -->

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Mot de passe </th>
        
    </tr>

<!-- Ajout de la logique -->

<?php
$sql = "SELECT * FROM inscriptions";
$stmt = $pdo->query($sql);

while ($inscription = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>" . $inscription['id'] . "</td>";
    echo "<td>" . $inscription['nom'] . "</td>";
    echo "<td>" . $inscription['prenom'] . "</td>";
    echo "<td>" . $inscription['email'] . "</td>";
    echo "<td>" . $inscription['password'] . "</td>";
    
    
    
    // Ici, on place les liens Modifier et Supprimer dans la même cellule
    echo "<td> 
            <a style=color:green; href='modifier.php?id=" . $inscription['id'] . "'>Modifier</a> | 
            <a style=color:red; href='supprimer.php?id=" . $inscription['id'] . "'>Supprimer</a>
          </td>";

    echo "</tr>";
}   
?>

</table>
