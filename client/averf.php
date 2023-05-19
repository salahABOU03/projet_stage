<?php

require("config/commandes.php");

$Produits=afficher();

if(isset($_GET['pdt'])){
    
    if(!empty($_GET['pdt']) OR is_numeric($_GET['pdt']))
    {
        $id = $_GET['pdt'];
    }
}

 foreach($Produits as $produit){ if($produit->id == $id){ 
   
    $image = $produit->image ;
    $nom = $produit->nom ;
    $prix = $produit->prix ;
    $desc = $produit->description ;
    ajouteraverf($id,$image, $nom, $prix, $desc) ;
    echo "good" ;

 }} ?>
