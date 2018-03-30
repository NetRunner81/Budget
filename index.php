<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
	<META HTTP-EQUIV="CONTENT-TYPE" CONTENT="text/html; charset=windows-1252">
	<TITLE>Simple Tasks</TITLE>
	
</HEAD>
<BODY LANG="fr-FR" DIR="LTR">
Utilitaire de gestion des mes t&acirc;ches<br>
En construction .....<br>
<a href="ajoutTache.php">Ajouter une t&acirc;che</a>
<br>
<?PHP
include "./includes/initPage.inc.php";

$reponse = $bdd->query('select Libelle, Prio, Titre, Texte from Tasks t, Famille f,Priorites p where t.FK_Famille=f.PK and t.FK_Prio=p.PK');
?>
<input list="browsers">
<datalist id="browsers">
 <option value="Safari">
 <option value="Internet Explorer">
 <option value="Opera">
 <option value="Firefox">
</datalist>
<br>
<table id="maTable">
<thead><tr>
	<th>Famille</th>
	<th>Priorit&eacute;</th>
	<th>Titre</th>
	<th>T&acirc;che</th>
</tr>
</thead>
	<tbody>
<?PHP
while ($donnees = $reponse->fetch())
{
?>
	<tr>
		<td> <?php echo $donnees['Libelle']	?></td>
		<td> <?php echo $donnees['Prio']	?></td>
		<td> <?php echo $donnees['Titre']	?></td>
		<td> <?php echo $donnees['Texte']	?></td>	
	
	</tr>
<?PHP
}

?>
</tbody>
</table>
<script type="text/javascript" src="myJavaScript.js">
</script>
	
</BODY>
</HTML>
