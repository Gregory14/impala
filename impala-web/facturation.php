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
                        <input id="firstname" name="firstname" type="text" required tabindex="1" value="">
                    </label>
                    <label for="address" class="inline-block">Nom d'smala
                        <input id="address" name="email" type="text" required tabindex="2" value="">
                    </label>
                    <label for="address">Adresse
                        <input id="address" name="address" type="text" required tabindex="3" value="">
                    </label>
                    <label for="city" class="inline-block">Gourbi
                        <input id="city" name="city" type="text" required tabindex="4" value="">
                    </label>
                    <label for="postal" class="inline-block">Code postal
                        <input id="postal" name="postal" type="text" required tabindex="5" value="">
                    </label>
                    <label for="country">Pays
                        <input id="country" name="country" type="text" tabindex="6" required value="">
                    </label>

                <h3>2- Email de livraison</h3>
                    <label for="email">Email
                        <input id="email" name="email" type="email" required tabindex="7" value="">
                    </label>
                <h3>3- Choix du paiement</h3>
                </form>
            </div>
            <div id="order-summary" class="inline-block">
                <h3>Récapitulatif de ma commande</h3>
            </div>
        </section>
<?php include("includes/footer.php"); ?>