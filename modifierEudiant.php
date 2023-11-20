<!DOCTYPE html>
<html>

<body>
    <?php 
    include ("connexion.php"); 
    $x=$_POST['codeetudiant'];
    $requet="select *from etudiant where codeetudiant=$x";
    $res=mysqli_query($idcon, $requet);
    $row=mysqli_fetch_assoc($res);
    ?>
	<h1>modification d'un etudiant</h1>
	<form method="post" action="modifierEtud_action.php">
    <label for="nom">codeetudiant :</label>
		<input type="text" id="codeetudiant" name="codeetudiant" value="<?php echo $x;?>">required><br><br>
        <label for="nom">nom :</label>
        <input type="text" id="nom" name="nom" value="<?php echo $row['nom'];?>"> required><br><br>
        <label for="nom">prenom :</label>
        <input type="text" id="prenom" name="prenom" value="<?php echo $row['prenom'];?>"> required><br><br>
        <label for="nom">adresse :</label>
		<input type="email" id="adresse" name="adresse" value="<?php echo $row['adresse'];?>"> required><br><br>
        <label for="nom">classe :</label>
        <input type="text" id="classe" name="classe" value="<?php echo $row['classe'];?>"> required><br><br>
        
        <input type="reset" value="annuler">
		<input type="submit" value="modifier">
	</form>
</body>
</html>
