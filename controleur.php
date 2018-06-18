<?php
	include ("modele/modele.php");

	function selectAllC ($table)
	{
		//traitement des données
		if ($table == "recherche" || $table == "bienImmobilier")
		{
			$resultats = selectAllM ($table);
			return $resultats;
		}
		else
		{
			return null;
		}
	}



	function insertRechercheC($tab)
	{
		//verification des données
		insertRechercheModel($tab);
	}
	function deleteRechercheC($numRecherche)
	{
		//verification de l'id
		deleteRechercheM($numRecherche);
	}
	function selectWhereNumRechercheC($numRecherche)
	{
		//verification de l'id
		$resultat = selectWhereNumRechercheModel($numRecherche);
		return $resultat;
	}
	function updateRechercheC ($tab)
	{
		//verification  des données 
		updateRechercheModel($tab);
	}




	function insertBienImmobilierC($tab)
	{
		//verification des données
		insertBienImmobilierModel($tab);
	}
	function deleteBienImmobilierC($numImmobilier)
	{
		//verification de l'id
		deleteBienImmobilierModel($numImmobilier);
	}
	function selectWhereBienImmobilierC($numImmobilier)
	{
		//verification de l'id
		$resultat = selectWhereBienImmobilierM($numImmobilier);
		return $resultat;
	}
	function updateBienImmobilierC ($tab)
	{
		//verification  des données 
		updateBienImmobilierModel($tab);
	}

	
?>

