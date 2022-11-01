<?php
require 'connexion.php';
$id=$_GET['id'];
$sql="DELETE FROM personne where id=$id";
$query=mysqli_query($con,$sql);
if (isset($query)){
    header("Location:aff.php");
}
?>