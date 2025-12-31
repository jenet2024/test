<?php 
    include 'secret.php';
    include 'dp.php';
    include 'components/maheader.php'; 

?>


<h2> Liste des utilisateurs connectés </h2>

<a href="add.php"> Ajouter un nouveau utilisateur </a>

<!-- Création du tableau -->

<table border="1">
    <tr>
        <th>ID</th>
        <th>email</th>
       <th>password</th>
       
    </tr>

<!-- Ajout de la logique -->

<?php
$sql = "SELECT * FROM inscriptions";
$stmt = $pdo->query($sql);

while ($inscription = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>" . $inscription['id'] . "</td>";
    echo "<td>" . $inscription['email'] . "</td>";
    echo "<td>" . $inscription['password'] . "</td>";

   
    // Ici, on place les liens Modifier et Supprimer dans la même cellule
    echo "<td>
                        <a style=color:green; href='edit.php?id=" . $inscription['id'] . "'>Modifier</a> | 
                        <a style=color:red; href='delete.php?id=" . $inscription['id'] . "'>Supprimer</a>
                    </td>";
                    echo "</tr>";
   
} 

?>    
   
</table>

 
