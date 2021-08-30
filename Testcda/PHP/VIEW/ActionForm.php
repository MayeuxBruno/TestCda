<?php
$mode=$_GET['mode'];
$ville = new Ville ($_POST);
var_dump($ville);
switch ($mode)
{
        case "ajout" :
        {
            VilleManager::add($ville);
            break;
        }
        case "modif" :
        {
            VilleManager::update($ville);   
            break;
        }
        case "delete" :
        {
            VilleManager::delete($ville);   
            break;
        }
    
}
header('Location: index.php?page=Accueil');