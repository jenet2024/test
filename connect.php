<?php

session_start();

if($_POST['email'] === 'Email' && $_POST['password'] === 'Mot de passe'){  
    $_SESSION['password'] = true;
    header('Location: index.php');
    exit;
} else {
  echo "Identifiants invalids.";
}
?>