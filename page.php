<?php
require 'connexion.php';
if (isset($_POST['id'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $id=$_POST['id'];
    $sql="UPDATE personne set nom='$nom',pernom='$prenom',email='$email' where id='$id'";
    $q=mysqli_query($con,$sql);
    if (isset($q)){
        echo "<h1>Modification avec success</h1>";
    }
}else{
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];

$requete="INSERT INTO personne (nom,prenom,email) VALUES('$nom','$prenom','$email')";
$query=mysqli_query($con,$requete);
if (isset($querry)){
    echo "<h1>insertion avec success</h1>";
}else{
    echo "<h1> erreur d'insertion</h1>" ;
}
}


?>