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
        $email = $_POST['email'];
        $password = $_POST['password'];

        // preparation requete
        $sql = $pdo->prepare("SELECT * FROM inscriptions WHERE email = ?");
        $sql->execute([$email]);
        // Recupere la ligne
        $inscription = $sql->fetch();

        if ($inscription && password_verify($password, $inscription['password'])) {
            // Démarrer la session et enregistrer l'identifiant de l'utilisateur
            session_start();
            $_SESSION['inscription_id'] = $inscription['id'];
            $_SESSION['email'] = $inscription['email'];
            // Redirection vers la page protégée ou le tableau de bord
            header("Location: redirection.php");
            exit;
        } else {
            echo "Nom d'utilisateur ou mot de passe incorrect.";
        }
    }
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
?>


