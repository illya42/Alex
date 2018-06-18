<?php
	function connexion ()
	{
		$con = mysqli_connect("localhost","root","","bddimmobilier");
		return $con;
	}

	function deconnexion ($con)
	{
		mysqli_close($con); 
	}

	function selectAllM ($table)
	{
		//on se connecte sur la base de données 
		$con = connexion ();
        $requete ="select * from " . $table.";";
        $resultats = mysqli_query($con,$requete);
        deconnexion($con);
		return $resultats;
	}


	function insertRechercheModel ($tab)
	{
		$con = connexion();
		$requete = "insert into recherche values (".$tab["numRecherche"].",".$tab["numClient"].",'".$tab["villeRecherche"]."',".$tab["prixMinRecherche"].",".$tab["prixMaxRecherche"].",'".$tab["natureRecherche"]."');";
		
		mysqli_query($con,$requete);
        deconnexion($con);
	}
	function deleteRechercheM ($numRecherche)
	{
		$con = connexion ();
        $requete ="delete from recherche where numRecherche = ".$numRecherche.";";

        echo $requete;

        mysqli_query($con,$requete);
        deconnexion($con);
	}
	function selectWhereNumRechercheModel ($numRecherche)
	{
		$con = connexion ();
		$requete = "select * from recherche where numRecherche = " .$numRecherche.";";
		$resultat=mysqli_query($con,$requete);
		$ligne = mysqli_fetch_assoc($resultat);
		deconnexion ($con);

		return $ligne;
	}
	function updateRechercheModel ($tab)
	{
		$con = connexion();
		$requete = "update recherche set numImmobilier=".$tab['numImmobilier']." ,numClient =".$tab['numClient']." , villeRecherche = '".$tab['villeRecherche']."' , prixMinRecherche = ".$tab['prixMinRecherche'].",".$tab['prixMaxRecherche'].",'".$tab['villeRecherche']."' where numRecherche = ".$tab['numRecherche'].";";
		mysqli_query($con, $requete);
		deconnexion($con);
	}




		function insertBienImmobilierModel ($tab)
	{
		$con = connexion();
		$requete = "insert into bienImmobilier values (".$tab["numImmobilier"].",".$tab["numMandat"].",".$tab["numRecherche"].",'".$tab["adresseImmobilier"]."','".$tab["villeImmobilier"]."','".$tab["dispoLocation"]."','".$tab["dispoAchat"]."',".$tab["prixLocationImmobilier"].",".$tab["prixAchatImmobilier"].");";
		
		mysqli_query($con,$requete);
        deconnexion($con);
	}
	function deleteBienImmobilierModel ($numImmobilier)
	{
		$con = connexion ();
        $requete ="delete from bienImmobilier where numImmobilier = ".$numImmobilier.";";
        mysqli_query($con,$requete);
        deconnexion($con);
	}
	function selectWhereNumImmobilierModel ($numImmobilier)
	{
		$con = connexion ();
		$requete = "select * from bienImmobilier where numImmobilier = " .$numImmobilier.";";
		$resultat=mysqli_query($con,$requete);
		$ligne = mysqli_fetch_assoc($resultat);
		deconnexion ($con);

		return $ligne;
	}
	function updateBienImmobilierModel ($tab)
	{
		$con = connexion();
		$requete = "update bienImmobilier set numImmobilier=".$tab['numImmobilier'].",numMandat =".$tab['numMandat']." , numRecherche = ".$tab['numRecherche'].",  adresseImmobilier = '".$tab['adresseImmobilier']."', villeImmobilier ='".$tab['villeImmobilier']."',dispoLocation ='".$tab['dispoLocation']."',dispoAchat ='".$tab['dispoAchat']."',prixLocationImmobilier =".$tab['prixLocationImmobilier'].",prixAchatImmobilier =".$tab['prixAchatImmobilier']." where numImmobilier = ".$tab['numImmobilier'].";";
		mysqli_query($con, $requete);
		deconnexion($con);
	}

?>
