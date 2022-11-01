<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DATA</h1> <hr>
    <table border="1" >
        <tr>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        </tr>
    <?php
    require 'connexion.php';
    $requete="SELECT * from personne";
    $query=mysqli_query($con,$requete);
    while($rows=mysqli_fetch_assoc($query)){
        $id=$rows['id'];
       echo "<tr>";
       echo "<td>".$rows['nom']." </td>";
       echo "<td>".$rows['prenom']." </td>";
       echo "<td>".$rows['email']." </td>";
       echo "<td><a href='delete.php?id=".$id."'>Supprimer</a></td>";  
       echo "<td><a href='index.php?id=".$id."'>Modifier</a></td>"; 
       echo "</tr>";
    }


    ?>
    </table>
</body>
</html>