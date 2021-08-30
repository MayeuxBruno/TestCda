<?php

class VilleManager 
{
	public static function add(Ville $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Ville (nomVille,numDepartement,codePostal,dateMaj) VALUES (:nomVille,:numDepartement,:codePostal,:dateMaj)");
		$q->bindValue(":nomVille", $obj->getNomVille());
		$q->bindValue(":numDepartement", $obj->getNumDepartement());
		$q->bindValue(":codePostal", $obj->getCodePostal());
		$q->bindValue(":dateMaj", $obj->getDateMaj());
		$q->execute();
	}

	public static function update(Ville $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Ville SET idVille=:idVille,nomVille=:nomVille,numDepartement=:numDepartement,codePostal=:codePostal,dateMaj=:dateMaj WHERE idVille=:idVille");
		$q->bindValue(":idVille", $obj->getIdVille());
		$q->bindValue(":nomVille", $obj->getNomVille());
		$q->bindValue(":numDepartement", $obj->getNumDepartement());
		$q->bindValue(":codePostal", $obj->getCodePostal());
		$q->bindValue(":dateMaj", $obj->getDateMaj());
		$q->execute();
	}
	public static function delete(Ville $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Ville WHERE idVille=" .$obj->getIdVille());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Ville WHERE idVille =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Ville($results);
		}
		else
		{
			return false;
		}
	}
	public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * FROM Ville");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Ville($donnees);
			}
		}
		return $liste;
	}
}