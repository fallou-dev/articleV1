<?php




 $getID_s = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id FROM categorie WHERE libelle = 'sport'"));

$id_s=$getID_s['id'];


 $getID_sa = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id FROM categorie WHERE libelle = 'santé'"));
$id_sa=$getID_sa['id'];

$getID_ed = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id FROM categorie WHERE libelle = 'education'"));
$id_ed=$getID_ed['id'];


$getID_po = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id FROM categorie WHERE libelle = 'politique'"));
$id_po=$getID_po['id'];
  
    
  
?>