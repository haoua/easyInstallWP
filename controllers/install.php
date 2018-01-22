<?php


$nomSite = (!empty($_POST["nomSite"])) ? $_POST["nomSite"] : "wordpress";

$dbName = (!empty($_POST["dbName"])) ? $_POST["dbName"] : "wp";
$dbUser = (!empty($_POST["dbUser"])) ? $_POST["dbUser"] : "root";
$dbPass = (!empty($_POST["dbPass"])) ? $_POST["dbPass"] : "0000";

$userAdmin = $_POST["userAdmin"];
$userEmail = $_POST["userEmail"];
$userPassword = $_POST["userPassword"];

$enableWpDebug = ($_POST["enableWpDebug"] == 1) ? true : false;
$langue = (in_array($_POST["langue"], array("fr_FR", "en_EN", "en_US"))) ? $_POST["langue"] : "fr_FR";
$url = "/";

// Téléchargement de la version souhaitée
$telechargementInitiale_part1 = 'wp core download --locale=fr_FR --force';
$telechargementInitiale_part2 = 'wp core version';

// Configuration de la base de données
$configurationDB = "";
if ($enableWpDebug == 1) {
    $configurationDB .= 'wp core config --dbname=' . $dbName . ' --dbuser=' . $dbUser . ' --dbpass=' . $dbPass . ' --skip-check --extra-php <<PHP';
    $configurationDB .= 'define( "WP_DEBUG", true );';
    $configurationDB .= 'PHP';
} else {
    $configurationDB .= 'wp core config --dbname=' . $dbName . ' --dbuser=' . $dbUser . ' --dbpass=' . $dbPass . ' --skip-check';
}

// Création de la base de données
$creationDB = 'wp db create';

// Génération du mot de passe s'il est vide
if ($userPassword == "") {
    $characteresAutorises = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = substr(str_shuffle($characteresAutorises), 0, 12);
}

// Commande d'installation
$commandeInstallation = 'wp core install --url=' . $url . ' --title="' . $nomSite . '" --admin_user=' . $userAdmin . ' --admin_email=' . $userEmail . ' --admin_password=' . $password;


exec($telechargementInitiale_part1);
exec($telechargementInitiale_part2);
exec($configurationDB);
exec($creationDB);
exec($commandeInstallation);
