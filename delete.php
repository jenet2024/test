<?php 
    include 'dp.php';
    include 'components/maheader.php'; 

// on récupère l'id du livre à supprimer à partir de l'URL
$id = $_GET['id'];

//  on prépare la requête SQL pour supprimer le livre correspondant à l'ID récupéré. 
//  ":id" est un paramètre nommé qui sera remplacé par 
// la valeur de $id lors de l'exécution de la requête (sécurité contre injection SQL)      
$sql = "DELETE FROM inscriptions WHERE id = :id";
$stmt = $pdo->prepare($sql);
// supprime le livre dont l'id correspond à la valeur récupérée ligne 6
$stmt->execute(['id' => $id]);

header('Location: indexa.php'); // on redirige vers index.php
