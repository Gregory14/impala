<?php 
$title="Atmosphère - Mes tickets";
$description="Une petite description du lieu";

include("includes/header.php");
?>
    <h2>Mon panier</h2>
    <br>
    <br>
    <p>Mes events en cours</p>
    <?php 
    if(isset($_SESSION['panier'])){
       echo "<br>Un article dans le panier";
       //var_dump($_SESSION['panier']);

       $ids= array_keys($_SESSION['panier']);
       var_dump($ids);

       // $products=$mysql->prepare('SELECT * FROM events WHERE id IN ('.implode(',',$ids).')');
       // $products->execute(array());
       // var_dump($products);
    }
    else{
        echo "Vous n'avez encore réservé de places";
    }
?>
<?php include("includes/footer.php"); ?>