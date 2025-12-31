<?php 
    include 'secret.php';
    include 'db.php';
    include 'componants/monheader.php'; 
?>


<h2> Liste des clients </h2>

<a href="ajout.php"> Ajouter un nouveau client </a>

<!-- Création du tableau -->

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>LastName</th>
        <th>email</th>
        <th>choisissez le sujet </th>
        
    </tr>

<!-- Ajout de la logique -->

<?php
$sql = "SELECT * FROM clients";
$stmt = $pdo->query($sql);


while ($client = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>" . $client['id'] . "</td>";
    echo "<td>" . $client['Nom'] . "</td>";
    echo "<td>" . $client['Prenom'] . "</td>";
    echo "<td>" . $client['Email'] . "</td>";
    echo "<td>" . $client['sujet'] . "</td>";
    
    
 

// Ici, on place les liens Modifier et Supprimer dans la même cellule
   
    echo "<td> 
            <a style=color:green; href='edita.php?id=" . $client['id'] . "'>Modifier</a> | 
            <a style=color:red; href='deleta.php?id=" . $client['id'] . "'>Supprimer</a>
          </td>";

    echo "</tr>";

}




?>

</table>


