<?php
if (isset($_POST['ID'])) {
    include('connexion.php');
    $req = $bdd->prepare("DELETE FROM users WHERE ID = :ID");
    $req->bindParam(':ID', $_POST['ID'], PDO::PARAM_INT);
    $req->execute();
    $req->closeCursor();
    header("Location: /");
    exit;
} else {
    header("Location: /?e=1");
    exit;
}

?>