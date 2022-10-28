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