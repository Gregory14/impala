<?php 
$title="Atmosphère - Mes tickets";
$description="Une petite description du lieu";

include("includes/header.php");
?>
        <h2>Qu’est-ce qu’il y a dedans ?</h2>
        <section id="tickets-content" >
            <h3>Mes tickets</h3>
            <?php
                if(isset($_SESSION['panier'])){
                    var_dump($_SESSION['panier']);

                    $ids= array_keys($_SESSION['panier']);
                    $req = $mysql->prepare('SELECT * FROM events WHERE id IN('.implode(',', $ids).')');
                    $req->execute();

                    foreach ($req as $tickets){
                    ?>
                    <div class="infoTicket">  
                        <div class="infoLeft inline-block">
                            <h4><?php echo $tickets['title']; ?></h4>
                            <p>Quantité : <?php echo $_SESSION['panier'][$tickets['id']]; ?> places</p>
                        </div>
                        <div class="ticketPrice inline-block">
                            <p><?php echo $tickets['price']; ?> €</p>
                            <p><a href="#">supprimer</a></p>
                        </div>
                        <p>Veuillez remplir les nom(s) et prénom(s) des bénéficiaires des billets.</p>
                        <form name="ticketNames" action="#" method="post">
                            <input class="blaze inline-block" name="subject" type="text" required tabindex="1" value="" placeholder="Blaze">
                            <input class="smala inline-block" name="name" type="text" required tabindex="2" value="" placeholder="Nom d’smala">
                            <input class="button" name="send" type="submit" value="Passer ma commande" class="button" />
                        </form>
                    </div>
                    <div class="clear"></div>
                    <?php }
                } ?>
        </section>
<?php include("includes/footer.php"); ?>