<?php 
include 'dp.php'; 
include 'components/header.php'; 
?>

<h2> Modifier les informations d'un utilisateur non connecté </h2>

<?php

// on vérifie si l'ID est passé dans l'URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // on récupère les informations du livre à partir de la base de données
    $sql = "SELECT * FROM inscriptions WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $inscription = $stmt->fetch(); // on recupere un seul livre sous la forme d'un tableau associatif

    // on vérifie si le formulaire est soumis
    if (isset($_POST['submit'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
       

        // on vérifie que tous les champs sont remplis
        if (!empty($nom) && !empty($prenom) && !empty($email)) {
            $sql = "UPDATE inscriptions SET nom = :nom, prenom = :prenom, email = :email WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                'nom' => $nom,  
                'prenom' => $prenom,    
                'email' => $email,   
                'id' => $id,  
            ]);

            echo "Les informations ont bien été mises à jour .";
        } else {
            echo "Veuillez remplir tous les champs obligatoires.";
        }   
    }
}
?>

<form action="modifier.php?id=<?php echo $id; ?>" method="POST">
    <label for="nom"> nom: </label>
    <input type="text" name="nom" value="<?php echo $inscription['nom']; ?>" required ><br> 

    <label for="prenom">prenom: </label>
    <input type="text" name="prenom" value="<?php echo $inscription['prenom']; ?>" required ><br>

    <label for="email">email: </label>
    <input type="email" name="email" value="<?php echo $inscription['email']; ?>" required ><br>

   

    <input type="submit" name="submit" value="Mettre à jour">
</form>
