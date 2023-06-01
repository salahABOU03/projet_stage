<?php
require("../config/commandes.php");

if(isset($_GET['pdt'])){
    
    if(!empty($_GET['pdt']) OR is_numeric($_GET['pdt']))
    {
        $id = $_GET['pdt'];
        $iq = $_GET['pqt'];
    }
}
supprimercomm($id) ;    
diminuerPrixProduit($id, $iq);

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
      <h1>Commande finalisée</h1>
      <p> Votre commande est finalisé avec succès !</p>
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



  <a href="index.php">Revenir en page des produits </a>
  </body>
</html>

