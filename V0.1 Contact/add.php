<?php

if (isset($_POST['prenom'], $_POST['nom'])) {   

include('connexion.php');
$req = $bdd->prepare("INSERT INTO users (prenom, nom, mobile, fixe, mail) VALUES (:prenom, :nom, :mobile, :fixe, :mail)");
$req->bindParam(':prenom', $_POST['prenom'], PDO::PARAM_STR);
$req->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);    
$req->bindParam(':mobile', $_POST['mobile'], PDO::PARAM_STR);
$req->bindParam(':fixe', $_POST['fixe'], PDO::PARAM_STR);
$req->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);   
$req->execute();
$req->closeCursor();
header("Location: /");
exit;
} else {
    header("Location: /?e=1");
    exit;
}
?>