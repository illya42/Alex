<?php
	include ("controleur/controleur.php");
?>
<html>
	<head>
		<title> Recherche Immobiliere </title>
	</head>
		<body>
			<center><h1> Immobilier </h1></center>
		<br/>
		<a href="index.php?page=1"> Liste Des Recherches
		</a> </br>
		<a href="index.php?page=2"> Liste des Immobiliers
		</a> </br>

		<?php
		if (isset($_GET['page']))
			{
				$page = $_GET['page'];
			}
			else 
			{
				$page = 0 ;
			}
			switch ($page)
			{
				case 1 :
						if(isset($_GET['action']) && isset($_GET['numRecherche']))
						{
							$action = $_GET['action'];
							$numRecherche = $_GET['numRecherche'];
							if($action=="X")
							{
								deleteRechercheC($numRecherche);
							}
							else if ($action=="E")
							{
								$resultat = selectWhereNumRechercheC($numRecherche);
							}
						}
						if(isset($_POST['Modifier']))
						{
							updateRechercheC($_POST);
							$resultat =null;
						}

						if(isset($_POST["Enregistrer"]))
						{
							//appel de la fonction insert du controleur avec envoi du tableau POST
							insertRechercheC($_POST);
						}
						$resultats = selectAllC("recherche");
						include ("vue/vuerecherche.php");
				break;



				case 2 :
						if(isset($_GET['action']) && isset($_GET['numImmobilier']))
						{
							$action = $_GET['action'];
							$numImmobilier = $_GET['numImmobilier'];
							if($action=="X")
							{
								deleteBienImmobilierC($numImmobilier);
							}
							else if ($action=="E")
							{
								$resultat = selectWhereBienImmobilierC($numImmobilier);
							}
						}

						if(isset($_POST['Modifier']))
						{
							updateBienImmobilierC($_POST);
							$resultat =null;
						}

						if(isset($_POST["Enregistrer"]))
						{
							//appel de la fonction insert du controleur avec envoi du tableau POST
							insertBienImmobilierC($_POST);
						}
						$resultats = selectAllC("bienImmobilier");
						include ("vue/vuebienimmobilier.php");
				break;

			}
				
		?>
		</body>
</html>
