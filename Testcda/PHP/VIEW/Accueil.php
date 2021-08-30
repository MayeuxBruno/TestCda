<div class="align colonne">
    <div class="container colonne">
        <div class="vide"></div>
        <div class="justify"><h1>Liste des villes</h1></div>
        <div class="vide"></div>
        <div class="justify"><button><a href="index.php?page=FormVille&mode=ajout"><i class="far fa-plus-square"></i>Ajouter une ville</a></button></div>
        <div class="vide"></div>
        <?php
            $lesVilles=VilleManager::getList();
            foreach ($lesVilles as $uneVille)
            {
                echo '<div class="pad">
                        <div class="justify">'.$uneVille->getNomVille().'</div>
                        <div class="justify">'.$uneVille->getNumDepartement().'</div>
                        <div class="justify">'.$uneVille->getCodePostal().'</div>
                        <div class="space">
                            <button class="boutoncrud"><a href="index.php?page=FormVille&mode=edit&id='.$uneVille->getIdVille().'"><i class="far fa-eye"></i></a></button>
                            <button class="boutoncrud"><a href="index.php?page=FormVille&mode=modif&id='.$uneVille->getIdVille().'"><i class="fas fa-edit"></i></a></button>
                            <button class="boutoncrud"><a href="index.php?page=FormVille&mode=delete&id='.$uneVille->getIdVille().'"><i class="far fa-trash-alt"></i></a></button>
                        </div>
                     </div>';
            }
        ?>
    </div>
</div>