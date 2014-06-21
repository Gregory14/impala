<?php

define("SQL_HOST","mysql51-91.perso");
define("SQL_USER","gregoryj");
define("SQL_PASS","58Whybby");
define("SQL_DBNAME","gregoryj");

try{
    $mysql = new PDO("mysql:dbname=".SQL_DBNAME.";host=".SQL_HOST,SQL_USER,SQL_PASS);
}
catch(Exception $e)
{
    die('Erreur :'.$e->getMessage());
}

?>