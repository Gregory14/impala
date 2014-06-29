<?php 
$title="Atmosphère - Facturation";
$description="Tous les événements les plus improbables. Rencontrez de nouvelles personnes, partagez vos connaissances et expériences et découvrez de nouveaux lieux.";

include("includes/header.php");
include('traitement/billing.php');

//Vérifier que l'utilisateur est bien connecté
if(!isset($_SESSION['connect'])){

    //Si utilisateur pas connecté, redirigé vers page connexion
    //  (création variable pour permettre redirection vers facturation après connexion)
    header('location: connexion.php');
    $_SESSION['currentPurchase'] = true;
}

;?>
        <h2>Pour avoir ton ticket brûle pas les étapes</h2>
        <section id="billing-content" class="container">
            <!-- Ici les pictos étapes : Récupérer le code de Greg -->
            
            <div id="payment" class="inline-block">
                <form name="formBilling" action="./facturation.php" method="post">
                    <h3>1- Adresse de facturation</h3>
                    <label for="firstname" class="inline-block">Blaze
                        <input id="firstname" name="firstname" type="text" required tabindex="1" value="" placeholder="Marc">
                    </label>
                    <label for="lastname" class="inline-block">Nom d'smala
                        <input id="lastname" name="email" type="text" required tabindex="2" value="" placeholder="Morin">
                    </label>
                    <label for="address" class="inline-block">Adresse
                        <input id="address" name="address" type="text" required tabindex="3" value="" placeholder="47, rue du Four">
                    </label>
                    <label for="city" class="inline-block">Gourbi
                        <input id="city" name="city" type="text" required tabindex="4" value="" placeholder="Paris">
                    </label>
                    <label for="postal" class="inline-block">Code postal
                        <input id="postal" name="postal" type="text" required tabindex="5" value="" placeholder="75019">
                    </label>
                    <label for="country" class="inline-block">Pays
                        <input id="country" name="country" type="text" tabindex="6" required value="" placeholder="France">
                    </label>
                    <input name="id" type="hidden" value="<?php echo $_SESSION['id']; ?>">
                    <h3>2- Email de livraison</h3>
                    <label for="email">Email
                        <input id="email" name="email" type="email" required tabindex="7" value="" placeholder="47, rue du Four">
                    </label>
                    <div id="payment-choice">
                        <h3>3- Choix du mode de paiement</h3>
                            <input class="inline-block" type="radio" name="paiement" value="Carte bleue">
                        <label class="inline-block">Carte bleue</label>
                            <input class="inline-block" type="radio" required name="paiement" value="Chèsque">
                        <label class="inline-block">Chèque</label>
                        <input class="button" name="pay" type="submit" value="Valider ma commande">
                    </div>
                </form>
            </div>
            <div id="order-summary" class="inline-block">
                <h3>Récapitulatif</h3>
                <p id="sum">Total : <?php if(isset($_SESSION['price'])){ echo $_SESSION['price']; } ?>€</p>
                <h4>Ma commande</h4>
                <p>Conférence architecture</p>
                <p>29 juin 2014</p>
                <p>Quantité : <span><?php if(isset($_SESSION['amount'])){ echo $_SESSION['amount']; } ?> place(s)</span></p>
            </div>
        </section>
<?php include("includes/footer.php"); ?>