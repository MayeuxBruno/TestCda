<?php

//Test VilleManager

echo "recherche id = 1" . "<br>";
$obj =VilleManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Ville(["nomVille" => "([value 1])", "numDepartement" => "([value 2])", "codePostal" => "([value 3])", "dateMaj" => "([value 4])"]);
var_dump(VilleManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = VilleManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnomVille("[(Value)]");
VilleManager::update($obj);
$objUpdated = VilleManager::findById(1);
echo "Liste des objets" . "<br>";
$array = VilleManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = VilleManager::findById(1);
VilleManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = VilleManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>