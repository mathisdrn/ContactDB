<?php   
if (isset($_GET['prenom'], $_GET['nom']) && isset($_GET['mobile']) OR isset($_GET['fixe']) OR isset($_GET['mail'])){
    include('connexion.php');
    $req = $bdd->prepare("INSERT INTO users (prenom, nom, mobile, fixe, mail) VALUES (:prenom, :nom, :mobile, :fixe, :mail)");
    $req->bindParam(':prenom', $_GET['prenom'], PDO::PARAM_STR);
    $req->bindParam(':nom', $_GET['nom'], PDO::PARAM_STR);    
    $req->bindParam(':mobile', $_GET['mobile'], PDO::PARAM_STR);
    $req->bindParam(':fixe', $_GET['fixe'], PDO::PARAM_STR);
    $req->bindParam(':mail', $_GET['mail'], PDO::PARAM_STR);   
    $req->execute();
    $req->closeCursor();
    header("Location: ../contact/");
    exit;
} else {
    header("Location: ../contact/?e=1");
    exit;
}
?>