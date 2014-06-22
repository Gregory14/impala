<?php include('../includes/header.php') ?>
<?php include('config.php') ?>
<?php 
if(isset($_SESSION['panier'])){
    echo "test";
  var_dump($_SESSION['panier']);  
}
?>