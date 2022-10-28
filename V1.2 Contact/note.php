<?php 

if (filter_var($var, FILTER_VALIDATE_INT) !== false)
// Condition pour valider si nombre entier ou non

$format ="Y-m-d H:i:s"; // Le "H" majuscule pour des heures en 24 heures
$postTime = '2012-02-29 23:59:59';
$date = null;
try{
   if(($date = DateTime::createFromFormat($format,$postTime)) === false)
        throw new Exception;
   echo $date->format($format);
} catch(Exception $e){
   trigger_error("Le format de la date et de l'heure est invalide", E_USER_WARNING);
   return;
}
ou 
var_dump(strtotime("2012-02-30 23:69:59"));
// Vérifier si une date est correctement envoyé 
?>

BEGIN:VCARD
N:Derenne;Mathis;;Mathis Derenne;
EMAIL;INTERNET:mathis.derenne@gmail.com
TEL;CELL:0626437337
END:VCARD
// Exemple vCard file

<?php function MaFonction($var)
{
    if ($var < 20) {
        echo "$var\n";
        recursion($var + 1);
    }
} ?>

<input type="image" src="lien de limage" />

if(isset($_POST['ID']) && filter_var($_POST['ID'], FILTER_VALIDATE_INT) !== false)