<!DOCTYPE html>
<html lang="en">

<body>
    <form action="rechercheEtud_action.php" method="post">
      <h3>rechercher un etudiant</h3>
    
     
    critere : <select name="champ" >
    <option value="prenom">prenom</option>
    <option value="nom">nom</option>
    <option value="adresse">adresse</option>
    <option value="classe">classe</option>
    <option value="codeetudiant">codeetudiant</option>
       </select><br>

       <label for="sname">valeur: </label> <br>
      <input type="text" id="sname" name="n2" value=""><br>

  <button type="submit" value="aff">afficher</button>
  <button type="reset" value="ann">annuler</button>
</form>
</body>
</html>