<?php include("includes/header.php") ;?>
<!-- END header -->
<p>TOUS LES EVENEMENTS</p>
<br>
<br>

<?php
$req=$mysql->prepare('SELECT * FROM events');
$req->execute();

while($donnees=$req->fetch()){?>
<div id="all-events">
    <div class="event">
        <p>Nom de l'event</p>
        <p><?php echo $donnees['title']; ?></p>
        <p>Description</p>
        <p><?php $donnees['description']; ?></p>
        <p><a href="fiche-event.php?id=<?php echo $donnees['id']; ?>">En savoir plus</a></p>
    </div>
</div>
<?php
}
?>

<!-- START Footer -->
<?php include("includes/footer.php"); ?>
<!-- END footer -->
