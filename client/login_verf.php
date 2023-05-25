<?php
session_start();

include "../config/commandes.php";

if(isset($_SESSION['xRttpHo0greL39']))
{
    if(!empty($_SESSION['xRttpHo0greL39']))
    {
        header("Location: ../admin/afficher.php");
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Login</title>

</head>
<body>
   <div class="box">
   <form method="post" >
    <div class="container">

        <div class="top">
          
            <header>Admin</header>
        </div>

        <div class="input-field">
            <input type="email" name="email" class="input" placeholder="Email" id="">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input  type="password" name="motdepasse" class="input" placeholder="Password" id="">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
        <input type="submit" name="envoyer" class="submit" value="Se connecter">
        </div>

        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="#">Forgot password?</a></label>
            </div>
        </div>
    </div> </form>
</div>  
</body>
</html>

<?php

if(isset($_POST['envoyer']))
{
    if(!empty($_POST['email']) AND !empty($_POST['motdepasse']))
    {
        $login = htmlspecialchars(strip_tags($_POST['email'])) ;
        $motdepasse = htmlspecialchars(strip_tags($_POST['motdepasse']));

        $admin = getverf($login, $motdepasse);

        if($admin){
            $_SESSION['xRttpHo0greL39'] = $admin;
            header('Location: verf/afficher.php');
        }else{
            header('Location: index.php');
        }
    }

}

?>