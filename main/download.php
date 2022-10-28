<?php if (isset($_POST['ID'])) {
    include('connexion.php');
    $req = $bdd->prepare("SELECT * FROM users WHERE ID = :ID");
    $req->bindParam(':ID', $_POST['ID'], PDO::PARAM_INT);
    $req->execute();
    $table = $req->fetch();
    $handle = fopen("/contact/{$table['nom']}_{$table['prenom']}.vcf", "w");
    if (!empty($table['fixe']) && !empty($table['mobile']) &&  !empty($table['mail'])) {
            fwrite($handle, "BEGIN:VCARD
VERSION:2.1
N:{$table['nom']};{$table['prenom']}
FN:{$table['prenom']} {$table['nom']} 
TEL;CELL:{$table['mobile']}
TEL;HOME:{$table['fixe']}
EMAIL;PREF;INTERNET:{$table['mail']}
END:VCARD
");
            echo "fmm";
        } elseif (!empty($table['fixe']) &&  !empty($table['mobile'])) {
            fwrite($handle, "BEGIN:VCARD
VERSION:2.1
N:{$table['nom']};{$table['prenom']}
FN:{$table['prenom']} {$table['nom']}
TEL;HOME:{$table['fixe']}
TEL;CELL:{$table['mobile']}
END:VCARD
");
            echo "fm";
        } elseif(!empty($table['fixe']) &&  !empty($table['mail'])) {
            fwrite($handle, "BEGIN:VCARD
VERSION:2.1
N:{$table['nom']};{$table['prenom']}
FN:{$table['prenom']} {$table['nom']}
EMAIL;PREF;INTERNET:{$table['mail']}
TEL;HOME:{$table['fixe']}
END:VCARD
");
            echo "f m";
        } elseif (!empty($table['mobile']) && !empty($table['mail'])) {
            fwrite($handle, "BEGIN:VCARD
VERSION:2.1
N:{$table['nom']};{$table['prenom']}
FN:{$table['prenom']} {$table['nom']}
TEL;CELL:{$table['mobile']}
EMAIL;PREF;INTERNET:{$table['mail']}
END:VCARD
");
            echo " mm";
        } elseif (!empty($table['mobile'])) {
            fwrite($handle, "BEGIN:VCARD
VERSION:2.1
N:{$table['nom']};{$table['prenom']}
FN:{$table['prenom']} {$table['nom']}
TEL;CELL:{$table['mobile']}
END:VCARD
");
            echo "xxm";
        } elseif (!empty($table['fixe'])) {
            fwrite($handle, "BEGIN:VCARD
VERSION:2.1
N:{$table['nom']};{$table['prenom']}
FN:{$table['prenom']} {$table['nom']}
TEL;HOME:{$table['fixe']}
END:VCARD
");
            echo "fxx";
        } elseif (!empty($table['mail'])) {
            fwrite($handle, "BEGIN:VCARD
VERSION:2.1
N:{$table['nom']};{$table['prenom']}
FN:{$table['prenom']} {$table['nom']}
EMAIL;PREF;INTERNET:{$table['mail']}
END:VCARD
");
            echo "xxm";
        } else {
            header("Location: /?e=5");
            exit;    
        }    
    }
    fclose($handle);
        if (file_exists("/contact/{$table['nom']}_{$table['prenom']}.vcf")){
            header("Location: /contact/{$table['nom']}_{$table['prenom']}.vcf");
            exit; 
        }
        else {
            header("Location: /?e=2");
            exit;
        }
    
?>