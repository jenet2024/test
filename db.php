<?php

$host = 'localhost';       
$dbname = 'utilisateurs';    
$username = 'root';        
$password = '';           

try {
    // Connexion à la BDD via PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Définition du mode d'erreur de PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En cas d'erreur de connexion
    die("Erreur de connexion : " . $e->getMessage());
}
