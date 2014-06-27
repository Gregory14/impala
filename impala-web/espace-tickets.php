<?php 
$title="Atmosphère - Mes tickets";
$description="Une petite description du lieu";

include("includes/header.php");

//Suppression d'un ticket existant dans mon panier
if(isset($_GET['delete'])){
    $id_article=$_GET['delete'];

    unset($_SESSION['panier'][$id_article]);

}
?>
        <h2>Qu’est-ce qu’il y a dedans ?</h2>
        <section id="tickets-content">
            <h3>Mes tickets</h3>
            <form name="ticketNames" action="#" method="post">
            <?php

                //Afficher tous les événements réservés (présents dans le panier)
                if(isset($_SESSION['panier'])){

                    $ids = array_keys($_SESSION['panier']);
                    $req = $mysql->prepare('SELECT * FROM events WHERE id IN('.implode(',', $ids).')');
                    $req->execute();

                    foreach ($req as $tickets){
                    ?>
                    <div class="ticket">  
                        <div class="inline-block">
                            <h4><?php echo $tickets['title']; ?></h4>
                            <p>Quantité : <?php echo $nbeTickets = $_SESSION['panier'][$tickets['id']]; ?> place(s)</p>
                            <p>Veuillez remplir les nom(s) et prénom(s) des bénéficiaires des billets.</p>
                            <?php
                                //Afficher autant d'inputs que de tickets réservés (invits amis)
                                for($i=1; $i <= $nbeTickets; $i++){
                                    echo 
                                        "<label for='firstname' class='inline-block'> Blaze
                                            <input id='firstname' type='text' required tabindex='1' value='' placeholder='Marc'>
                                        </label>
                                        <label for='name' class='inline-block'> Nom d'smala
                                            <input id='name' name='name' type='text' required tabindex='2' value='' placeholder='Vincent'>
                                        </label>";
                                }
                            ?>  
                        </div>
                        <div class="ticketPrice inline-block">
                            <p><?php echo $price = $tickets['price'] * $nbeTickets; ?> €</p>
                            <p><a href="espace-tickets.php?delete=<?php echo $tickets['id']; ?>">Supprimer</a></p>
                        </div>                          
                    </div>
                    <?php $total += $price; } //fin foreach
                } //fin isset?>
                <div>
                    <p>Montant total : <?php echo $total; ?> €</p>
                </div>
                <input class="button" name="command" type="submit" value="Allez j'commande !" />
            </form>
        </section>
<?php include("includes/footer.php"); ?>