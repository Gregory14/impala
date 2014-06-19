<?php

//session_start();

if(isset($_POST['deconnect'])){

    $_SESSION=array();
    
    session_destroy();

   // header('location:./index.php');
}
    
?>