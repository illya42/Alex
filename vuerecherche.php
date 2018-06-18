<center>
	<h2> Liste Des Recherches </h2>
	<br/>
	<table border = 5>
		<tr><td> Numero Recherche </td>
			<td> Numero Client </td>
			<td> Ville </td>
			<td> Prix Minimum </td>
			<td> Prix Maximum </td>
			<td> Nature Recherche (Achat/Location) </td> 
			<td> Modifier/Supprimer </td></tr>
		<?php
		foreach ($resultats as $unResultat) {
			echo "<tr>
			<td>".$unResultat['numRecherche']."</td>
			<td>".$unResultat['numClient']."</td>
			<td>".$unResultat['villeRecherche']."</td>
			<td>".$unResultat['prixMinRecherche']."</td>
			<td>".$unResultat['prixMaxRecherche']."</td>
			<td>".$unResultat['natureRecherche']."</td>
			<td> <a href='index.php?page=1&action=X&numRecherche=".$unResultat['numRecherche']."'>  
			<img src='images/supprimer.png' height='40' width='40'>
			</a>
			<a href='index.php?page=1&action=E&numRecherche=".$unResultat['numRecherche']."'>  
			<img src='images/ajouter.png' height='40' width='40'>
			</a></td>
			</tr>";
			
		}
		?>
	</table>
	
<br/>
<h2> Ajout D'Une Recherche </h2>
<form method = "post" action ="">
	<table border =0>
		<tr><td> Numéro De Recherche : </td> <td> <input type="text" name="numRecherche" value= "<?php if (isset($resultat)) echo $resultat['numRecherche'] ; ?> "></td></tr>

		<tr><td> Numéro De Client : </td> <td> <input type="text" name="numClient" value= "<?php if (isset($resultat)) echo $resultat['numClient'] ; ?> "></td></tr>

		<tr><td> Ville : </td> <td> <input type="text" name="villeRecherche" value= "<?php if (isset($resultat)) echo $resultat['villeRecherche'] ; ?> "></td></tr>

		<tr><td> Prix Minimum : </td> <td> <input type="text" name="adresse" value= "<?php if (isset($resultat)) echo $resultat['adresse'] ; ?> "></td></tr>

		<tr><td> Prix Max : </td> <td> <input type="text" name="profession" value= "<?php if (isset($resultat)) echo $resultat['profession'] ; ?> "></td></tr>

		<tr><td> Nature De La Recherche (Location/Achat) : </td> <td> <input type="text" name="natureRecherche" value= "<?php if (isset($resultat)) echo $resultat['natureRecherche'] ; ?> "></td></tr>
		
		
		<tr><td> <input type="reset" name="Annuler" value ="Annuler"></td>
		<td> <input type="submit" name="Enregistrer" value ="Enregistrer">
			 <input type="submit" name="Modifier" value ="Modifier">
		</td></tr>
</table>
<input type="text" name="numRecherche" value ="<?php if(isset($resultat)) echo $resultat ['numRecherche']; ?>">
</form>


</center>