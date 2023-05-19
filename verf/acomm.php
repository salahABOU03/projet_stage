<?php

require("../config/commandes.php");

$Produits=afficher_verf();

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
    ajouteracomm($id,$image, $nom, $prix, $desc) ;
    supprimerverf($id) ; 

 }} 
 
 
// Appeler l'exécutable Node.js en utilisant la fonction exec()
//exec('index.js', $output, $return_val);
shell_exec('node index.js'); 
// Afficher le résultat
//echo "Sortie : \n" . implode("\n", $output) . "\n";
//echo "Code de retour : $return_val\n";


 ?>
 <!DOCTYPE html>
<html>
  <head>
    <title>Commande envoyée</title>
    <style>
      body {
        background-color: #f7f7f7;
        font-family: Arial, sans-serif;
        text-align: center;
        padding-top: 100px;
      }

      h1 {
        font-size: 72px;
        color: #333;
        text-shadow: 2px 2px 2px #ccc;
        margin-top: 0;
      }

      p {
        font-size: 24px;
        color: #666;
        margin-bottom: 50px;
      }
    </style>
  </head>
  <body>
    <div>
      <h1>Commande envoyée</h1>
      <p>Votre commande a été envoyée avec succès !</p>
    </div>
    
	<title>Exemple de div avec texte</title>
	<style>
		.container {
			background-color: #f7f7f7;
			border: 1px solid #ccc;
			border-radius: 5px;
			padding: 20px;
			margin: 20px;
			width: 80%;
			max-width: 600px;
			margin: 0 auto;
		}

		.text-input {
			display: block;
			margin: 10px 0;
			padding: 10px;
			width: 100%;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		.submit-btn {
			display: block;
			margin: 10px 0;
			padding: 10px;
			background-color: #333;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
	</style>



  <a href="afficher.php">Revenir en page des produits </a>
  </body>
</html>

