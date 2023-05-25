<?php

require("../config/commandes.php");

$Produits=afficher();

if(isset($_GET['pdt'] )){
    
    if(!empty($_GET['pdt']) OR is_numeric($_GET['pdt']))
    {
        $id = $_GET['pdt'];
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs des champs
    $nombreProduits = $_POST["nombreProduits"];
    $commentaire = $_POST["commentaire"];

    // Afficher les valeurs saisies
    //echo "<h2>Récapitulatif :</h2>";
    //echo "<p>Nombre de produits : " . $nombreProduits . "</p>";
    //echo "<p>Commentaire : " . $commentaire . "</p>";
  }

foreach($Produits as $produit){ if($produit->id == $id){ 
 
    $image = $produit->image ;
    $nom = $produit->nom ;
    $prix = $produit->prix ;
    $desc = $produit->description ;
    ajouteraverf($id,$image, $nom, $prix, $desc, $commentaire, $nombreProduits) ;
    echo "good" ;

 }} ?>
