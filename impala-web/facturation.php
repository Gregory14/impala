<?php 
$title="Atmosphère - Facturation";
$description="Tous les événements les plus improbables. Rencontrez de nouvelles personnes, partagez vos connaissances et expériences et découvrez de nouveaux lieux.";

include("includes/header.php") 
;?>
        <h2>Pour avoir ton ticket brûle pas les étapes</h2>
        <section id="billing-content">
            <!-- Ici les pictos étapes : Récupérer le code de Greg -->
            
            <div id="payment" class="inline-block">
                <h3>1- Adresse de facturation</h3>
                <form name="formBilling" action="" method="post">
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

                <h3>2- Email de livraison</h3>
                    <label for="email">Email
                        <input id="email" name="email" type="email" required tabindex="7" value="" placeholder="47, rue du Four">
                    </label>
                <h3>3- Choix du paiement</h3>
                    <input class="inline-block" type="radio" name="paiement" value="cb"/> Carte Bleu
                    <input class="inline-block" type="radio" name="paiement" value="cheque"> Cheque
                    <input class="inline-block" type="radio" name="paiement" value="espece"> Espece

                    <input class="button" name="pay" type="submit" value="Valider ma commande" class="button" />
                </form>
            </div>
            <div id="order-summary" class="inline-block">
                <h3>Récapitulatif</h3>
                <p id="sum">Total : 15€</p>
                <p id="commanderecap">Ma commande</p>
                <p>Conférence architecture</p>
                <p>29 juin 2014</p>
                <p>Quantité : <span id="nbrtotal">3 places</span></p>
            </div>
        </section>
<?php include("includes/footer.php"); ?>