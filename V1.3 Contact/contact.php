<?php include('directory.php'); ?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Contact famille</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.min.css" rel="stylesheet">
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
        <?php include '$erreur'; ?>
        <table class="highlight responsive-table">
            <thead>
                <tr><th>Prénom</th><th>Nom</th><th>Mobile</th><th>Fixe</th><th>Mail</th>
                <th> <a class="btn-flat waves-effect waves-light" href="#"><i class="material-icons medium">get_app</i></a></th>
                <th> <button class="btn-flat disabled"><i class="material-icons medium md-inactive">mode_edit</i></button></th>
                <th> <button class="btn-flat disabled"><i class="material-icons medium md-inactive">delete</i></button></th></tr>
            </thead>
            <tbody>
<?php include '$connexion';
$req = $bdd->query('SELECT * FROM users ORDER BY nom');

while ($table = $req->fetch()) { ?>
    <tr> 
        <td> <?php echo htmlentities($table['prenom']) ?> </td>
        <td> <?php echo htmlentities($table['nom']) ?> </td>
        <td> <?php echo htmlentities($table['mobile']) ?> </td>
        <td> <?php echo htmlentities($table['fixe']) ?> </td>
        <td> <?php echo htmlentities($table['mail']) ?></td>
        <td><form action="download.php" method="post"> 
                <input type="hidden" name="id" value="<?php echo $table['ID'] ?>"> 
                <button class="btn-flat btn-medium waves-effect waves-light" type="submit" name="action"> 
                    <i class="material-icons">get_app</i> 
                </button> 
            </form> </td>
        
        <td><form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $table['ID'] ?>">
                <button class="btn-flat btn-medium waves-effect waves-light" type="submit" name="action">
                    <i class="material-icons">mode_edit</i> 
                </button> 
            </form> </td>
        
        <td><form action="remove.php" method="post">
                <input type="hidden" name="id" value="<?php echo $table['ID'] ?>">
                <button class="btn-flat btn-medium waves-effect waves-light" type="submit" name="action">
                    <i class="material-icons">delete</i> 
                </button> 
            </form> </td>
    </tr>
<?php }  $req->closeCursor();  ?>
    </tbody>    </table>
        <div class="row"  style="margin-top:20px">
            <form class="col s12" method="get" action="add.php">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="prenom" name="prenom" type="text" class="validate" required>
                        <label for="prenom">Prénom</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id="nom" name="nom" type="text" class="validate" required>
                        <label for="nom">Nom</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">phone_iphone</i>
                        <input id="mobile" name="mobile" type="tel" class="validate"  pattern="^(06|07)[0-9]{8}$">
                        <label for="mobile" data-error="Mauvais format">Téléphone portable</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">phone</i>
                        <input id="fixe" name="fixe" type="tel" class="validate"  pattern="^0[^067][0-9]{8}$">
                        <label for="fixe" data-error="Mauvais format">Téléphone fixe</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">email</i>
                        <input id="mail" name="mail" type="email" class="validate">
                        <label for="mail" data-error="Mauvais format">E-mail</label>
                    </div>
                    <div class="input-field col s0 m2">
                    </div>
                    <div class="input-field col s12 m4">
                        <div> <button class="btn waves-effect waves-light" type="submit" name="action">Ajouté <i class="material-icons right">send</i> </button> </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php include('footer.html'); ?>

<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script src="js/materialize.min.js"></script>
</body>
</html> 