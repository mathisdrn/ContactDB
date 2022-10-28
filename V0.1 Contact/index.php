<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>DB</title>
    <link rel="stylesheet" href="style.css">
    <?php // <link href="https://fonts.googleapis.com/css?family=Hind+Guntur" rel="stylesheet"> ?>
</head>
<body>
    <p class="title"> Contact famille</p>
<?php $error = !empty($_GET['e']) ? $_GET['e'] : NULL;
    switch($error) 
{ 
    case 1:
        echo "<p class=\"sousTitle\"> Erreur manque une donnée.</p>";
    break;
    
    case 2:
        echo "<p class=\"sousTitle\"> Erreur lors de l'écriture du contact.</p>";
    break;
        
    case 3:
        echo "<p class=\"sousTitle\"> Erreur fonction non disponible.</p>";
    break;
    case 4:
        echo "<p class=\"sousTitle\"> Erreur aucun ID specifié.</p>";
    break;
    case 5:
        echo "<p class=\"sousTitle\"> Erreur aucune donnée dans la base.</p>";
}   ?>
<p class="paragraphe"> <table> 
            <tr> 
                <th> Prénom </th>
                <th> Nom </th>
                <th> Mobile </th>
                <th> Fixe </th>
                <th> Mail </th>
                <th> <div class="svg"><img src="image/edit.svg" width="100%" height="100%" alt="bouton édition"/> </div> </th>
                <th> <div class="svg"> <img src="image/remove.svg" width="100%" height="100%" alt="bouton suppression"/></div></th>
                <th> <a href="downloadAll.php"><div class="svg"><img src="image/download.svg" width="100%" height="100%" alt="bouton téléchargement"/></div></a></th>
            </tr>
<?php include('connexion.php');
$req = $bdd->query('SELECT * FROM users ORDER BY nom');
    
while ($table = $req->fetch()) { ?>
    <tr> 
        <td> <?php echo htmlentities($table['prenom']) ?> </td>
        <td> <?php echo htmlentities($table['nom']) ?> </td>
        <td> <?php echo htmlentities($table['mobile']) ?> </td>
        <td> <?php echo htmlentities($table['fixe']) ?> </td>
        <td> <?php echo htmlentities($table['mail']) ?></td>
        <td><form method="post" action="edit.php">
                <input type="hidden" name="ID" value=<?php echo $table['ID'] ?> />
                <input class="Btn" type="submit" value="-" />
            </form>
        </td>
        <td><form method="post" action="remove.php">
                <input type="hidden" name="ID" value=<?php echo $table['ID'] ?> />
                <input class="Btn" type="submit" value="-" />
            </form>
        </td>
        <td> <form method="post" action="download.php">
                <input type="hidden" name="ID" value=<?php echo $table['ID'] ?> />
                <input class="Btn" type="submit" value="-" />           
            </form>
        </td>
    </tr>
    
<?php } 
    $req->closeCursor();  ?>
    </table> </p>

<form method="post" action="add.php"> <p>
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" required/> <br />
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required/> <br />
    <label for="mobile">Téléphone mobile :</label>
    <input type="tel" name="mobile" id="mobile" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"/>  <br />
    <label for="fixe">Téléphone fixe :</label>
    <input type="tel" name="fixe" id="fixe" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"/>  <br />
    <label for="mail">E-mail :</label>
    <input type="email" name="mail" id="mail" />  <br />
    <label for="submit">.</label>
    <input type="submit" value="Insérer" id="submit" />
</p> </form>
<p class="sousTitle"> Astuce : vous pouvez cliquer sur télécharger en haut a droite du tableau pour télécharger tout les contacts d'un coup </p>
</body>
</html>