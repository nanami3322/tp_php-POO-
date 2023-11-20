<body>
<?php
$idcon=mysqli_connect("localhost" ,"root", "");
$okbd=mysqli_select_db($idcon ,"biblio");
$requet="select * from etudiant";
$res= mysqli_query($idcon, $requet);
?>
<table border="2">
<tr>
 <th> Code</ th>
 <th> Nom</ th>
 <th> Prénom</th>
 <th> Adresse</th>
 <th> Classe</th>
</tr>
<?php
while($ligne=mysqli_fetch_array($res))
{
?>
<tr>
 <td><?php echo $ligne[0]; ?></td>
 <td><?php echo $ligne[1]; ?></td>
 <td><?php echo $ligne[2]; ?></td>
 <td><?php echo $ligne[3]; ?></td>
 <td><?php echo $ligne[4]; ?></td>
</tr>
<?php
}
mysqli_close($idcon);
?>
</table>
</body>