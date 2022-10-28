<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Contact famille</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <nav>
        <div class="nav-wrapper teal lighten-2">
            <div class="col s12">
               <a href="#" class="breadcrumb" style="margin-left: 25px;">Contact de la famille</a>
            </div>
        </div>
    </nav>
    <div class="container">

    <?php   if (isset($_GET['e'])) {
                switch($_GET['e']) {
                case 1:
                    $erreur = "Erreur manque une donnée.";
                    break;
                case 2:
                    $erreur = "Erreur lors de l'écriture du contact.";
                    break;
                case 3:
                    $erreur = "Erreur fonction non disponible.";
                    break;
                case 4:
                    $erreur = "Erreur aucun ID specifié.";
                    break;
                case 5:
                    $erreur = "Erreur aucune donnée dans la base.";
                    break;
                } ?> 
            <div class="row">
                <div class="col s8 offset-s2">
                    <div class="card pannel hoverable red center valign-wrapper">
                        <i class="material-icons medium valign">warning</i></span>
                        <h4 class="valign"> <?php echo $erreur; ?> </h4>
                    </div>
                </div>
            </div>
        <?php } ?>

        <table class="highlight responsive-table">
            <thead>
                <tr><th>Prénom</th><th>Nom</th><th>Mobile</th><th>Fixe</th><th>Mail</th>
                <th> <a class="btn-flat waves-effect waves-light" href="#"><i class="material-icons medium">get_app</i></a></th>
                <th> <button class="btn-flat disabled"><i class="material-icons medium md-inactive">mode_edit</i></button></th>
                <th> <button class="btn-flat disabled"><i class="material-icons medium md-inactive">delete</i></button></th></tr>
            </thead>
            <tbody>
<?php include('connexion.php');
$req = $bdd->query('SELECT * FROM users ORDER BY nom');

while ($table = $req->fetch()) { ?>
    <tr> 
        <td> <?php echo htmlentities($table['prenom']) ?> </td>
        <td> <?php echo htmlentities($table['nom']) ?> </td>
        <td> <?php echo htmlentities($table['mobile']) ?> </td>
        <td> <?php echo htmlentities($table['fixe']) ?> </td>
        <td> <?php echo htmlentities($table['mail']) ?></td>
        <td> <button class="btn-flat btn-medium waves-effect waves-light" type="submit" name="action"><i class="material-icons">get_app</i> </button> </td>
        <td> <button class="btn-flat btn-medium waves-effect waves-light" type="submit" name="action"><i class="material-icons">mode_edit</i> </button> </td>
        <td> <button class="btn-flat btn-medium waves-effect waves-light" type="submit" name="action"><i class="material-icons">delete</i> </button> </td>
    </tr>
<?php 
    // mettre echo dans les boutons download edit et delete : echo $table['ID']
}  $req->closeCursor();  ?>
    </tbody>    </table>
        <div class="row"  style="margin-top:20px">
            <form class="col s12" method="post" action="add.php">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="prenom" type="text" class="validate" required>
                        <label for="prenom">Prénom</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="nom" type="text" class="validate" required>
                        <label for="nom">Nom</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">phone_iphone</i>
                        <input id="mobile" type="tel" class="validate"  pattern="^(06|07)[0-9]{8}$">
                        <label for="mobile">Téléphone portable</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">phone</i>
                        <input id="fixe" type="tel" class="validate"  pattern="^0[^067][0-9]{8}$">
                        <label for="fixe">Téléphone fixe</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">email</i>
                        <input id="mail" type="email" class="validate">
                        <label for="mail">E-mail</label>
                    </div>
                    <div class="input-field col s0 m2">
                    </div>
                    <div class="input-field col s12 m4">
                        <div> <button class="btn waves-effect waves-light" type="submit" name="action">Ajouter <i class="material-icons right">send</i> </button> </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Astuce :</h5>
                    <p class="grey-text text-lighten-4">Vous pouvez cliquer sur le bouton télécharger en haut du tableau pour télécharger tout les contacts d'un coup.</p>
                </div>
            </div>
        </div>
    <div class="footer-copyright">
        <div class="container">
            © 2016 Copyright Mathis Durand.
        </div>
    </div>
    </footer>

<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js"></script>
</body>
</html> 