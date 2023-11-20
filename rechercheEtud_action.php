<?php include ("connexion.php"); ?>
<?php
$champ=$_POST['champ'];
$valeur=$_POST['n2'];
$requet="select * from etudiant where $champ = '$valeur'";
$res= mysqli_query($idcon, $requet);
$nbr=mysqli_num_rows($res);
if($nbr==0)
 echo "<h2>L'étudiant cherché n'existe pas dans la base</h2><br/>"; 
else
 echo "<h2>L'étudiant cherché existe dans la base</h2><br/>"; 
?>
<?php include ("deconnexion.php"); ?>