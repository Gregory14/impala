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
        <h2>J'vérifie tout histoire d'en avoir le coeur net</h2>
        <section id="tickets-content" class="container">
            <div class="steps-purchase">
                <ul class="list-inline">
                    <li>1</li>
                    <li class="current">2</li>
                    <li>3</li>
                    <li>4</li>
                </ul>
            </div>
            <div class="purchase-content">
                <h3>Mes tickets</h3>
            <?php
                //Vérifier que le panier existe et est rempli
                if(isset($_SESSION['panier'])){

                    $ids = array_keys($_SESSION['panier']);
                    $req = $mysql->prepare('SELECT * FROM events WHERE id IN('.implode(',', $ids).')');
                    $req->execute();

                    //Afficher tous les événements réservés (présents dans le panier)
                    foreach ($req as $tickets){
                    ?>
                    <div class="ticket">  
                        <div class="inline-block">
                            <h4><?php echo $tickets['title']; ?></h4>
                            <p class="quantity">Quantité : <?php echo $nbeTickets = $_SESSION['panier'][$tickets['id']]; ?> place(s)</p>
                            <p>Veuillez remplir les nom(s) et prénom(s) des bénéficiaires des billets.</p>
                            <form name="ticketNames" action="#" method="post">
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
                            </form>
                        </div>
                        <div class="ticketPrice inline-block">
                            <p class="price"><?php echo $price = $tickets['price'] * $nbeTickets; ?> €</p>
                            <p><a href="espace-tickets.php?delete=<?php echo $tickets['id']; ?>">Supprimer</a></p>
                        </div>                          
                    </div>
                    <?php 
                        //Calculer le montant total du panier
                        $totalPrice += $price; 

                        //Calculer le nombre total de places réervés (tous événements confondus)
                        $totalTickets += $nbeTickets;

                    }//fin foreach

                    //Mettre en session les variables créées précédemment (montant total + nombre total tickets)
                    $_SESSION['price'] = $totalPrice;
                    $_SESSION['amount'] = $totalTickets;
                
                    //Disparition du bouton "Commander" si panier vide après suppression d'un article
                    if(!empty($_SESSION['panier'])){
                ?>
                <div id="total-amount">
                    <p>Montant total : <?php echo $totalPrice; ?> €</p>
                </div>
                <a href="facturation.php" class="button" title="Valider mon panier">Allez, j'commande !</a>
                <?php }//fin empty

                }//fin isset
                else if(!isset($_SESSION['panier']) || empty($_SESSION['panier'])){
                ?>
                    <p>Aucun événement réservé pour le moment. Consulte donc tous nos <a href="evenements.php">événements</a> !</p>
                <?php
                }
            ?>
            
            </div>
        </section>
<?php include("includes/footer.php"); ?>