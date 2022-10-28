<?php if (isset($_POST['ID'])) {
    include('connexion.php');
    $req = $bdd->prepare("SELECT * FROM users WHERE ID = :ID");
    $req->bindParam(':ID', $_POST['ID'], PDO::PARAM_INT);
    $req->execute();
    $table = $req->fetch();
    $handle = fopen("/contact/{$table['nom']}_{$table['prenom']}.vcf", "w");
    
    fwrite($handle,
"BEGIN:VCARD
VERSION:2.1
N:{$table['nom']};{$table['prenom']}
FN:{$table['prenom']} {$table['nom']}
");
    
    if (!empty($table['mobile'])) {
        fwrite($handle, "TEL;CELL:{$table['mobile']}
");
    }
    if (!empty($table['fixe'])) {
        fwrite($handle, "TEL;HOME:{$table['fixe']}
");
    }
    if (!empty($table['mail'])) {
        fwrite($handle, "EMAIL;PREF;INTERNET:{$table['mail']}
");
    }
fwrite($handle, "END:VCARD");
fclose($handle);
    
    if (file_exists("/contact/{$table['nom']}_{$table['prenom']}.vcf")){
        header("Location: /contact/{$table['nom']}_{$table['prenom']}.vcf");
        exit; 
    }
    else {
        header("Location: /?e=2");
        exit;
    } ?>