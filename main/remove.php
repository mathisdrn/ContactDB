<?php
if (isset($_POST['ID'])) {
include('connexion.php');
$req = $bdd->prepare("DELETE FROM users WHERE ID = :ID");
$req->bindParam(':ID', $_POST['ID'], PDO::PARAM_INT);
$req->execute();
$req->closeCursor();
header("Location: contact/");
exit;
} else {
    header("Location: index.php/?e=1");
    exit;
}

?>