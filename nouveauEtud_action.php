<?php include ("connexion.php"); ?>
<?php
 $code=$_POST['codeetudiant'];
 $nom=$_POST['nom'];
 $prenom=$_POST['prenom'];
 $adresse=$_POST['adresse'];
 $classe=$_POST['classe'];
 $requet="insert into etudiant values
 ('$code','$nom','$prenom','$adresse','$classe')";
 $ok=mysqli_query($idcon, $requet);
 if($ok==FALSE)
 echo "Problème d'insertion <br/>"; 
 else
 echo "Insertion efectuée avec succes <br/>"; 
?>
<?php include ("deconnexion.php"); ?>