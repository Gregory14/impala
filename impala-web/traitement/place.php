<?php include('../includes/header.php') ?>
<?php include('../includes/config.php') ?>
<?php 
if(isset($_SESSION['panier'])){
    echo "test";
  var_dump($_SESSION['panier']);  
}
?>