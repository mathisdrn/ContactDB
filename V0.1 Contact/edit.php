<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Edition</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php 
    // Si ID + autre données alors vérifié donné et update et redirigé vers l'accueil
    // Sinon si ID alors cherché les info sur cette ID et les préremplir dans le formulaire avec un champs caché contenant l'ID
    // Sinon redirigé vers index.php?e=1
if(isset($_POST['ID'], $_POST['prenom'], $_POST['nom'])) {
    $ID = (int) $_POST['ID'];
    include('connexion.php');
    $req = $bdd->prepare("UPDATE users SET prenom = :prenom, nom = :nom, mobile = :mobile, fixe = :fixe, mail = :mail WHERE ID = :ID");
    $req->bindParam(':prenom', $_POST['prenom'], PDO::PARAM_STR);       
    $req->bindParam(':nom', $_POST['nom'], PDO::PARAM_STR);    
    $req->bindParam(':mobile', $_POST['mobile'], PDO::PARAM_STR);
    $req->bindParam(':fixe', $_POST['fixe'], PDO::PARAM_STR);
    $req->bindParam(':mail', $_POST['mail'], PDO::PARAM_STR);
    $req->bindParam(':ID', $ID, PDO::PARAM_INT);
    $req->execute();
    $req->closeCursor();
    header("Location: /");
    exit;
} else if (isset($_POST['ID'])) { 
    include('connexion.php');
    $req = $bdd->prepare('SELECT * FROM users WHERE ID = ?');
    $req->bindParam(1, $_POST['ID']);
    $req->execute();
    $table = $req->fetch();
    $req->closeCursor();
?>    
    <form method="post" action="edit.php"> <p>
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" value="<?php echo htmlentities($table['prenom']) ?>" required /> <br />
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="<?php echo htmlentities($table['nom']) ?>" required/> <br />
    <label for="mobile">Téléphone mobile :</label>
    <input type="tel" name="mobile" id="mobile" value="<?php echo htmlentities($table['mobile']) ?>" /> <br />
    <label for="fixe">Téléphone fixe :</label>
    <input type="tel" name="fixe" id="fixe" value="<?php echo htmlentities($table['fixe']) ?>" /> <br />
    <label for="mail">E-mail :</label>
    <input type="email" name="mail" id="mail" value="<?php echo htmlentities($table['mail']) ?>" /> <br />
    <input type="hidden" name="ID" value=<?php echo $_POST['ID'] ?> />
    <input type="submit" value="Editer" /> </p> </form>
<?php   
} else {
    header("Location: /?e=2");
    exit;
}
?>
</body>
</html>