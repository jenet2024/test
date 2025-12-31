<?php

$host = 'localhost';
$dbname = 'connexiondb';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Test si la méthode d'envoi est un post 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
       

     $sql = "INSERT INTO inscriptions (nom, prenom, email, password ) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $prenom, $email, $password]);

    $sql = "SELECT nom, prenom , email , password FROM inscriptions";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $inscriptions = $stmt->fetchAll();



        
       
            header("Location: direct.php");
            exit;
        
    }
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());

}
?>
