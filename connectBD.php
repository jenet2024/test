<?php

$host = 'localhost';
$dbname = 'utilisateurs';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Test si la méthode d'envoi est un post 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
         $Nom = $_POST['Nom'];
    $Prenom = $_POST['Prenom'];
    $Email = $_POST['Email'];
    $sujet= $_POST['sujet'];
       

     $sql = "INSERT INTO clients (Nom, Prenom, Email, sujet) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$Nom, $Prenom, $Email, $sujet]);

    $sql = "SELECT Nom, Prenom, Email, sujet FROM clients";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $clients = $stmt->fetchAll();



        
       
            header("Location: madirection.php");
            exit;
        
    }
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());

}
?>
