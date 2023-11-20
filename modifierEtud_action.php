<?php 
include("connexion.php"); 
$code = $_POST["codeetudiant"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$adresse = $_POST["adresse"];
$classe = $_POST["classe"];

$requete = "UPDATE etudiant SET nom='$nom', prenom='$prenom', adresse='$adresse', Classe='$classe' WHERE Codeetudiant=$code";
$ok = mysqli_query($idcon, $requete);

if ($ok == FALSE) {
    echo "Problème de mise à jour <br/>";
} else {
    echo "Mise à jour effectuée avec succès <br/>";
}
include("deconnexion.php"); 
?>