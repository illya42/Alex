<center>
	<h2> Liste des Immobiliers </h2>
	<br/>
	<table border = 5>
		<tr><td> Numero Recherche </td>
			<td> Numero Mandat </td>
			<td> Adresse Immobilier </td>
			<td> Ville Immobilier </td> 
			<td> Disponibilité Location </td>
			<td> Disponibilité Achat </td>
			<td> Prix Location </td>
			<td> Prix Achat </td>
			<td> Modifier/Supprimer </td></tr>
		<?php
		foreach ($resultats as $unResultat) {
			echo "<tr>
			<td>".$unResultat['numImmobilier']."</td>
			<td>".$unResultat['numMandat']."</td>
			<td>".$unResultat['adresseImmobilier']."</td>
			<td>".$unResultat['villeImmobilier']."</td>
			<td>".$unResultat['dispoLocation']."</td>
			<td>".$unResultat['dispoAchat']."</td>
			<td>".$unResultat['prixLocationImmobilier']."</td>
			<td>".$unResultat['prixAchatImmobilier']."</td>

			<td> <a href='index.php?page=2&action=X&numImmobilier=".$unResultat['numImmobilier']."'>  
			<img src='images/supprimer.png' height='40' width='40'>
			</a>
			<a href='index.php?page=2&action=E&numImmobilier=".$unResultat['numImmobilier']."'>  
			<img src='images/ajouter.png' height='40' width='40'>
			</a></td>
			</tr>";
			
		}
		?>
	</table>

<br/>
<h2> Ajout d'une Recherche </h2>
<form method = "post" action ="">
	<table border =0>
		<tr><td> Numero Immobilier : </td> <td> <input type="text" name="numImmobilier" value= "<?php if (isset($resultat)) echo $resultat['numImmobilier'] ; ?> "></td></tr>

		<tr><td> Numero Mandat : </td> <td> <input type="text" name="numMandat" value= "<?php if (isset($resultat)) echo $resultat['numMandat'] ; ?> "></td></tr>

		<tr><td> Adresse Immobilier : </td> <td> <input type="text" name="adresseImmobilier" value= "<?php if (isset($resultat)) echo $resultat['adresseImmobilier'] ; ?> "></td></tr>

		<tr><td> Ville Immobilier : </td> <td> <input type="text" name="villeImmobilier" value= "<?php if (isset($resultat)) echo $resultat['villeImmobilier'] ; ?> "></td></tr>

		<tr><td> Disponibilité Location : </td> <td> <input type="text" name="dispoLocation" value= "<?php if (isset($resultat)) echo $resultat['dispoLocation'] ; ?> "></td></tr>

		<tr><td> Disponibilité Achat : </td> <td> <input type="text" name="dispoAchat" value= "<?php if (isset($resultat)) echo $resultat['dispoAchat'] ; ?> "></td></tr>

		<tr><td> Prix De Location : </td> <td> <input type="text" name="prixLocationImmobilier" value= "<?php if (isset($resultat)) echo $resultat['prixLocationImmobilier'] ; ?> "></td></tr>

		<tr><td> Prix D'Achat : </td> <td> <input type="text" name="prixAchatImmobilier" value= "<?php if (isset($resultat)) echo $resultat['prixAchatImmobilier'] ; ?> "></td></tr>

		
		<tr><td> <input type="reset" name="Annuler" value ="Annuler"></td>
		<td> <input type="submit" name="Enregistrer" value ="Enregistrer">
			 <input type="submit" name="Modifier" value ="Modifier">
		</td></tr>
</table>
<input type="text" name="numImmobilier" value ="<?php if(isset($resultat)) echo $resultat ['numImmobilier']; ?>">
</form>


</center>