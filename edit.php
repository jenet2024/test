<?php 
include 'dp.php'; 
include 'components/sonheader.php'; 
?>

<h2> Modifier un  </h2>

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
        $email = $_POST['email'];
       
        

        // on vérifie que tous les champs sont remplis
        if (!empty($email)) {
            $sql = "UPDATE inscriptions SET email = :email WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                'email' => $email,  
                
                'id' => $id,  
            ]);

            echo "L'utilisateur a bien été mis a jour .";
        } else {
            echo "Veuillez remplir tous les champs obligatoires.";
        }   
    }
}
?>

<form action="edit.php?id=<?php echo $id; ?>" method="POST">
    <label for="email">Email : </label>
    <input type="text" name="email" value="<?php echo $inscription['email']; ?>" required ><br> 

    
    

    <input type="submit" name="submit" value="Mettre à jour">
</form>
