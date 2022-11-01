<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require 'connexion.php';
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="SELECT*from personne where id='$id'";
        $q=mysqli_query($con,$sql);
        $rows=mysqli_fetch_assoc($q);
        $nom=$rows['nom'];
        $prenom=$rows['prenom'];
        $email=$rows['email'];

    }



     ?>


   <form action="page.php?<?php if (isset($_GET['id'])) {echo "id=update";}?>" method="POST">
   <input type="hidden" name="id " value="<?phpGET['id']; ?>  ">
    <input type="text" name="nom" placeholder="entrez votre nom" value="<?php if (isset($_GET['id'])){
        echo $nom;
    } ?>"> <br> <br>
    <input type="text" name="prenom" placeholder="entrez votre prenom"value="<?php if (isset($_GET['id'])){
        echo $prenom;
    } ?>"> <br> <br>
    <input type="text" name="email" placeholder="entrez votre email"value="<?php if (isset($_GET['id'])){
        echo $email;
    } ?>"> <br> <br>
    
        <?php
          if (isset($_GET['id'])){
            echo '<button type="submit" >Modifier</button>';
          }else{
            echo "Envoyer";
          }

        ?>
   </form> 
   <a href="aff.php">AFFICHAGE </a>
</body>
</html>