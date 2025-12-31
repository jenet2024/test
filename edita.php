<?php 
include 'db.php'; 
include 'componants/maheader.php'; 
?>

<h2> Modifier un client </h2>

<?php

// on vérifie si l'ID est passé dans l'URL
if (isset($_GET['id'])) {
    $id= $_GET['id'];

    // on récupère les informations du livre à partir de la base de données
    $sql = "SELECT * FROM clients WHERE id= :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $client = $stmt->fetch(); // on recupere un seul livre sous la forme d'un tableau associatif

    // on vérifie si le formulaire est soumis
    if (isset($_POST['submit'])) {
        $Nom = $_POST['Nom'];
        $Prenom = $_POST['Prenom'];
        $Email = $_POST['Email'];
        $Type_de_demande = $_POST['Type_de_demande'];

        // on vérifie que tous les champs sont remplis
        if (!empty($Nom) && !empty($Prenom) && !empty($Email) && !empty($Type_de_demande)) {
            $sql = "UPDATE clients SET Nom = :Nom, Prenom = :Prenom, Email = :Email, Type_de_demande = :Type_de_demande WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                'Nom' => $Nom,  
                'Prenom' => $Prenom,    
                'Email' => $Email,  
                'Type_de_demande' => $Type_de_demande,  
                'id' => $id,  
            ]);

            echo "LeS informations ont bien été mises à jour.";
        } else {
            echo "Veuillez remplir tous les champs obligatoires.";
        }   
    }
}
?>

<form action="edita.php?id=<?php echo $id; ?>" method="POST">
    <label for="Nom">Nom : </label>
    <input type="text" name="Nom" value="<?php echo $client['Nom']; ?>" required ><br> 

    <label for="Prenom">Prenom : </label>
    <input type="text" name="Prenom" value="<?php echo $client['Prenom']; ?>" required ><br>

    <label for="Email">Email : </label>
    <input type="Email" name="Email" value="<?php echo $client['Email']; ?>" required ><br>

    <label for="Type_de_demande">Type_de_demande : </label>
    <input type="text" name="Type_de_demande" value="<?php echo $client['Type_de_demande']; ?>" required ><br>

    <input type="submit" name="submit" value="Mettre à jour">
</form>
