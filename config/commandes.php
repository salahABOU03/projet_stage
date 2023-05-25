<?php

function ajouterUser($nom, $prenom, $email, $motdepasse)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("INSERT INTO utilisateurs (nom, prenom, email, motdepasse) VALUES (?, ?, ?, ?)");

    $req->execute(array($nom, $prenom, $email, $motdepasse));

    return true;

    $req->closeCursor();
  }
}

// function getUsers($email, $password){
  
//   if(require("connexion.php")){

//     $req = $access->prepare("SELECT * FROM utilisateur ");

//     $req->execute();

//     if($req->rowCount() == 1){
      
//       $data = $req->fetchAll(PDO::FETCH_OBJ);

//       foreach($data as $i){
//         $mail = $i->email;
//         $mdp = $i->motdepasse;
//       }

//       if($mail == $email AND $mdp == $password)
//       {
//         return $data;
//       }
//       else{
//           return false;
//       }

//     }

//   }

// }

function modifier($image, $nom, $prix, $desc, $id)
{
  if(require("connexion.php"))
  {
    $req = $access->prepare("UPDATE produits SET `image` = ?, nom = ?, prix = ?, description = ? WHERE id=?");

    $req->execute(array($image, $nom, $prix, $desc, $id));

    $req->closeCursor();
  }
}

function afficherUnProduit($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM produits WHERE id=?");

        $req->execute(array($id));

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

  function ajouter($image, $nom, $prix, $desc)
  {
    if(require("connexion.php"))
    {
      $req = $access->prepare("INSERT INTO produits (image, nom, prix, description) VALUES (?, ?, ?, ?)");

      $req->execute(array($image, $nom, $prix, $desc));

      $req->closeCursor();
    }
  }

  function ajouteraverf($id,$image, $nom, $prix, $desc, $commentaire, $nombreProduits)
  {
    if(require("connexion.php"))
    {
      $req = $access->prepare("INSERT INTO produits_verf (id,image, nom, prix, description,commentaire,quantité) VALUES (?,?,?,?,?,?,?)");

      $req->execute(array($id,$image, $nom, $prix, $desc, $commentaire, $nombreProduits));

      $req->closeCursor();
    }
  }

  function ajouteracomm($id,$image, $nom, $prix, $desc, $commentaire, $quantité)
  {
    
    
    if(require("connexion.php"))
    {
    $req = $access->prepare("INSERT INTO produits_comm (id,image, nom, prix, description,commentaire,quantité) VALUES (?,?,?,?,?,?,?)");

    $req->execute(array($id,$image, $nom, $prix, $desc,$commentaire,$quantité ));

     $req->closeCursor();
    }
  }

function afficher()
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM produits ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

function afficherid($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM produits WHERE id=? ORDER BY id DESC");

        $req->execute(array($id));

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

function afficher_verf(){
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM produits_verf ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}

function afficher_comm(){
	if(require("connexion.php"))
	{
		$req=$access->prepare("SELECT * FROM produits_comm ORDER BY id DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;

        $req->closeCursor();
	}
}



function supprimer($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("DELETE FROM produits WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}


function supprimerverf($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("DELETE FROM produits_verf WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}

function supprimercomm($id)
{
	if(require("connexion.php"))
	{
		$req=$access->prepare("DELETE FROM produits_comm WHERE id=?");

		$req->execute(array($id));

		$req->closeCursor();
	}
}

function getAdmin($email, $password){
  
  if(require("connexion.php")){

    $req = $access->prepare("SELECT * FROM admin WHERE id=33");

    $req->execute();

    if($req->rowCount() == 1){
      
      $data = $req->fetchAll(PDO::FETCH_OBJ);

      foreach($data as $i){
        $mail = $i->email;
        $mdp = $i->motdepasse;
      }

      if($mail == $email AND $mdp == $password)
      {
        return $data;
      }
      else{
          return false;
      }

    }

  }

}
function getverf($email, $password){
  
  if(require("connexion.php")){

    $req = $access->prepare("SELECT * FROM verf WHERE id=33");

    $req->execute();

    if($req->rowCount() == 1){
      
      $data = $req->fetchAll(PDO::FETCH_OBJ);

      foreach($data as $i){
        $mail = $i->email;
        $mdp = $i->motdepasse;
      }

      if($mail == $email AND $mdp == $password)
      {
        return $data;
      }
      else{
          return false;
      }

    }

  }

}

?>