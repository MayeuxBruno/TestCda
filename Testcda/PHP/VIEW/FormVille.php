<?php
$mode = $_GET['mode'];
if (isset($_GET['id']))
{
    $idVille=$_GET['id'];
    if ($idVille!=false)
    {
        $villeChoisie=VilleManager::findById($idVille);
    }
}

echo '<div class=" align colonne">';
switch ($mode)
{
    case "edit" :
        {
            echo '<form>';
            break;
        }
        case "ajout" :
        {
            echo '<form action="index.php?page=actionForm&mode=ajout" method="POST">';
            echo '<input name="idVille" value="'.$villeChoisie->getIdVille().'" type="hidden" />'; 
            break;
        }
        case "modif" :
        {
            echo '<form action="index.php?page=actionForm&mode=modif" method="POST">';
            echo '<input name="idVille" value="'.$villeChoisie->getIdVille().'" type="hidden" />'; 
            break;
        }
        case "delete" :
        {
            echo '<form action="index.php?page=actionForm&mode=delete" method="POST">';
            echo '<input name="idVille" value="'.$villeChoisie->getIdVille().'" type="hidden" />'; 
            break;
        }
    
}

?>
    <div class="container colonne">

        <div>
            <div><label for="nomVille">Nom de la ville</label></div>
            <div><input name="nomVille" <?php if ($mode!= "ajout") {echo 'value="'.$villeChoisie->getNomVille().'"';} if ($mode=="edit" || $mode=="delete") echo 'disabled'; ?>/></div>
        </div>
        <div>
            <div><label for="numDep">Numero de département</label></div>
            <div><input name="numDep" <?php if ($mode!= "ajout") {echo 'value="'.$villeChoisie->getNumDepartement().'"';} if ($mode=="edit" || $mode=="delete") echo 'disabled'; ?>/></div>
        </div>
        <div>
            <div><label for="codePostal">Code Postal</label></div>
            <div><input name="codePostal" <?php if ($mode!= "ajout") {echo 'value="'.$villeChoisie->getCodePostal().'"';} if ($mode=="edit" || $mode=="delete") echo 'disabled'; ?>/></div>
        </div>
        <div>
            <div><label for="dateMaj">Date de Mise à Jour</label></div>
            <div><input name="dateMaj" <?php if ($mode!= "ajout") {echo 'value="'.$villeChoisie->getDateMaj().'"';} if ($mode=="edit" || $mode=="delete") echo 'disabled'; ?>/></div>
        </div>

    </div>

<?php
switch ($mode)
{
        case "ajout" :
        {
            echo '<button type="submit"> Ajouter la Ville</button>';
            break;
        }
        case "modif" :
        {
            echo '<button type="submit"> Modifier la Ville</button>';
            break;
        }
        case "delete" :
        {
            echo '<button type="submit"> Supprimmer la Ville</button>';
            break;
        }
    
}
echo '<button><a href ="index.php?page=Accueil">Retour</a></Button>';
?>
</form>
</div>
