<?php
session_start();

if(!isset($_SESSION['xRttpHo0greL39']))
{
    header("Location: ../login.php");
}

if(empty($_SESSION['xRttpHo0greL39']))
{
    header("Location: ../login.php");
}

require("../config/commandes.php");

$produits = afficher_verf();
$Produitsq=afficher();
foreach($_SESSION['xRttpHo0greL39'] as $i){
    $nom = $i->pseudo;
    $email = $i->email;
} 
?>

<!DOCTYPE html>
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Tous les produits</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
<a class="navbar-brand" href="../">ProvinceMagasine </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link active" style="font-weight: bold;" aria-current="page" href="../admin/afficher.php">Produits</a>
        </li>
       
        
    </ul>
    <div style="margin-right: 500px">
        <h5 style="color: #545659; opacity: 0.5;">Connecté en tant que: <?= $nom ?></h5>
    </div>
    <a class="btn btn-danger d-flex" style="display: flex; justify-content: flex-end;" href="destroy.php">Se deconnecter</a>
    </div>
</div>
</nav>

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

    
    
    
      <?php foreach ($produits as $produit): ?>
    <div class="col">
        <div class="card shadow-sm">
            <h3><?= $produit->nom ?></h3>
            <img src="<?= $produit->image ?>" style="width: 24%">

            <div class="card-body">
                <p class="card-text"><?= substr($produit->description, 0, 160); ?>...</p>
                <p>Quantité: <?= $produit->quantité ?></p>
                <p>Commentaire: <?= $produit->commentaire ?></p>
                <p>Division: <?= $produit->division ?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="acomm.php?pdt=<?= $produit->id ?>">
                           <small class="text" style="font-weight: bold; color: green;">Disponible: <?= $produit->prix ?> </small>
<br>
                            <button type="button" class="btn btn-sm btn-success">Confirmer
        
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

    
    
    
    
    
    
    
    
    
    
    </div>
    </div>
  </div>

    
</body>
</html>

<?php


?>