<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Drat's</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
    <nav>
         <div class="nav-wrapper">
            <div class="col s12">
               <a href="#" class="breadcrumb" style="margin-left: 25px;">Accueil</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="section">
            <h5>Principe du site</h5>
            <p>Le but c'est de mettre tout les contenus que je suis capable de produire et que j'ai produit</p>
        </div>
        <div class="divider"></div>
        <div class="section">
            <h5>Qu'est ce qu'on peux y trouver ?</h5>
            <p>Des pages avec du Material Design, des contenus, des image de rendu 3D que j'ai produit, des système et des projets pour mes études</p>
             <blockquote>Pour le moment aucun projet public n'est dévoilé.</blockquote>
        </div>
        
        <div class="row">
            <div class="col s12 m12 l4">
                <div class="card-panel teal lighten-2">
                    <span class="black-text">Bienvenue sur mon site!</span>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card-panel red">
                    <span class="black-text">Il est plutôt cool!</span>
                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card-panel pink">
                    <span class="black-text">Et c'est gratuit!</span>
                </div>
            </div>
        </div>
        
        <div class="row">
            <form class="col s12">
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
                        <i class="material-icons prefix">phone</i>
                        <input id="fixe" type="tel" class="validate"  pattern="^0[^067][0-9]{8}$">
                        <label for="fixe">Téléphone fixe</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">phone_iphone</i>
                        <input id="mobile" type="tel" class="validate"  pattern="^(06|07)[0-9]{8}$">
                        <label for="mobile">Téléphone portable</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <i class="material-icons prefix">email</i>
                        <input id="mail" type="email" class="validate">
                        <label for="mail">E-mail</label>
                    </div>
                    <div class="input-field col s0 m2">
                    </div>
                    <div class="input-field col s12 m4">
                        <div class="valign"> <button class="btn waves-effect waves-light" type="submit" name="action">Ajouter <i class="material-icons right">send</i> </button> </div>
                    </div>
                </div>
            </form>
        </div>
            <table>
                <thead>
                    <tr><th>Prénom</th><th>Nom</th><th>Mobile</th><th>Fixe</th><th>Mail</th>
                <th> <button class="waves-effect waves-light btn-flat"><i class="material-icons md-36 md-dark">get_app</i></button></th>
                <th> <button class="btn-flat disabled"><i class="material-icons md-36 md-dark md-inactive">mode_edit</i></button></th>
                <th> <button class="btn-flat disabled"><i class="material-icons md-36 md-dark md-inactive">delete</i></button></th></tr>
                </thead>
                <tbody>
                    <tr><td>Mathis</td><td>Derenne</td><td>0626437337</td><td></td><td>mathis.derenne@gmail.com</td><td><button class="btn-flat btn-medium waves-effect waves-light" type="submit" name="action"><i class="material-icons md-24">get_app</i> </button></td>
<td><button class="btn-flat btn-medium waves-effect waves-light" type="submit" name="action"><i class="material-icons md-24">mode_edit</i> </button></td>
<td><button class="btn-flat btn-medium waves-effect waves-light" type="submit" name="action"><i class="material-icons md-24">delete</i></button></td></tr>
                    <tr><td>Marielle</td><td>Motais</td><td>0678505016</td><td>0241573584</td><td>motaismarielle@gmail.com</td><td><button class="btn-flat btn-medium waves-effect waves-light" type="submit" name="action"><i class="material-icons md-24">get_app</i> </button></td>
<td><button class="btn-flat btn-medium waves-effect waves-light" type="submit" name="action"><i class="material-icons md-24">mode_edit</i> </button></td>
<td><button class="btn-flat btn-medium waves-effect waves-light" type="submit" name="action"><i class="material-icons md-24">delete</i></button></td></tr>
                    <tr><td>Oscar</td><td>Motais</td><td>0675655916</td><td></td><td>oyou26aze@gmail.com</td><td><but
                    ton class="btn-flat btn-medium waves-effect waves-light" type="submit" name="action"><i class="material-icons md-24">get_app</i> </button></td>
<td><button class="btn-flat btn-medium waves-effect waves-light" type="submit" name="action"><i class="material-icons md-24">mode_edit</i> </button></td>
<td><button class="btn-flat btn-medium waves-effect waves-light" type="submit" name="action"><i class="material-icons md-24">delete</i></button></td></tr>
                </tbody>
            </table>
    </div>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
</body>
</html>