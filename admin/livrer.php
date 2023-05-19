<?php
require("../config/commandes.php");

if(isset($_GET['pdt'])){
    
    if(!empty($_GET['pdt']) OR is_numeric($_GET['pdt']))
    {
        $id = $_GET['pdt'];
    }
}
supprimercomm($id) ;    
echo $id  ;

?>