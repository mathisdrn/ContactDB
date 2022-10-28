<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=web9852_db;charset=utf8', 'web9852_db', 'LightBeamSQL', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
}
catch (Exception $e)
{
    echo 'Erreur : '.$e->getMessage().'<br />';
    echo 'N° : '.$e->getCode();
}
?>