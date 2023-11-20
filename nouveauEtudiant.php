<!DOCTYPE html>
<html>
<body>
<?php
include ("connexion.php");
$requet = "select * from classe";
$result = mysqli_query($idcon, $requet);
?>
	<h1>Nouveau etudiant</h1>
	<form method="post" action="nouveauEtud_action.php">
	<label for="nom">codeetudiant :</label>
		<input type="text" id="codeetudiant" name="codeetudiant" required><br><br>
        <label for="nom">nom :</label>
        <input type="text" id="nom" name="nom" required><br><br>
        <label for="nom">prenom :</label>
        <input type="text" id="prenom" name="prenom" required><br><br>
        <label for="nom">adresse :</label>
		<input type="email" id="adresse" name="adresse" required><br><br>
        
        classe : <select name="classe" >
      

       <?php
    
        //$resultCheck = mysqli_num_rows($result);
        //if ($resultCheck > 0) 
          while ($row = mysqli_fetch_assoc($result)) {
                      echo  "<option value=" . $row['nom']. ">". $row['nom']. "</option>"; 
          }
                      ?>
                      
    
        
       </select>

        <input type="reset" value="annuler">
		<input type="submit" value="Enregistrer">
	</form>
</body>
</html>
