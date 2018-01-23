<?php


$nomSite = (!empty($_POST["nomSite"])) ? $_POST["nomSite"] : "wordpress";

$dbName = (!empty($_POST["dbName"])) ? $_POST["dbName"] : "wp";
$dbUser = (!empty($_POST["dbUser"]) && $_POST["dbUser"] != "root") ? $_POST["dbUser"] : "wproot";
$dbPass = (!empty($_POST["dbPass"])) ? $_POST["dbPass"] : "0000";

$userAdmin = (!empty($_POST["userAdmin"])) ? $_POST["userAdmin"] : "root";
$userEmail = (!empty($_POST["userEmail"])) ? $_POST["userEmail"] : "toto@test.fr";
$userPassword = (!empty($_POST["userPassword"])) ? $_POST["userPassword"] : "0000";

$enableWpDebug = ($_POST["enableWpDebug"] == 1) ? true : false;
$langue = (in_array($_POST["langue"], array("fr_FR", "en_EN", "en_US"))) ? $_POST["langue"] : "fr_FR";
$url = "192.168.33.10/".$nomSite;

// S'il y a des plugins / themes à installer
$telechargement_plugin1 = (!empty($_POST["plugin1"])) ? 'php /var/www/html/module/controllers/wp-cli.phar plugin install ' . $_POST["plugin1"] . ' --activate' : "";
$telechargement_plugin2 = (!empty($_POST["plugin2"])) ? 'php /var/www/html/module/controllers/wp-cli.phar plugin install ' . $_POST["plugin2"] . ' --activate' : "";
$telechargement_plugin3 = (!empty($_POST["plugin3"])) ? 'php /var/www/html/module/controllers/wp-cli.phar plugin install ' . $_POST["plugin3"] . ' --activate' : "";
$telechargement_plugin4 = (!empty($_POST["plugin4"])) ? 'php /var/www/html/module/controllers/wp-cli.phar plugin install ' . $_POST["plugin4"] . ' --activate' : "";
$telechargement_theme1 = (!empty($_POST["theme1"])) ? 'php /var/www/html/module/controllers/wp-cli.phar theme install ' . $_POST["theme1"] . ' --activate' : "";
$telechargement_theme2 = (!empty($_POST["theme2"])) ? 'php /var/www/html/module/controllers/wp-cli.phar theme install ' . $_POST["theme2"] . ' --activate' : "";
$telechargement_theme3 = (!empty($_POST["theme3"])) ? 'php /var/www/html/module/controllers/wp-cli.phar theme install ' . $_POST["theme3"] . ' --activate' : "";
$telechargement_theme4 = (!empty($_POST["theme4"])) ? 'php /var/www/html/module/controllers/wp-cli.phar theme install ' . $_POST["theme4"] . ' --activate' : "";


// Téléchargement de la version souhaitée
$telechargementInitiale_part1 = 'php /var/www/html/module/controllers/wp-cli.phar core download --locale=fr_FR --force';
$telechargementInitiale_part2 = 'php /var/www/html/module/controllers/wp-cli.phar core version';

// Configuration de la base de données
$configurationDB = "";
if ($enableWpDebug == 1) {
    $configurationDB .= 'php /var/www/html/module/controllers/wp-cli.phar core config --dbname=' . $dbName . ' --dbuser=' . $dbUser . ' --dbpass=' . $dbPass . ' --skip-check --extra-php <<PHP';
    $configurationDB .= 'define( "WP_DEBUG", true );';
    $configurationDB .= 'PHP';
} else {
    $configurationDB .= 'php /var/www/html/module/controllers/wp-cli.phar core config --dbname=' . $dbName . ' --dbuser=' . $dbUser . ' --dbpass=' . $dbPass . ' --skip-check';
}

// Création de la base de données
$creationDB = 'php /var/www/html/module/controllers/wp-cli.phar db create';

// Génération du mot de passe s'il est vide
if ($userPassword == "") {
    $characteresAutorises = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $userPassword = substr(str_shuffle($characteresAutorises), 0, 12);
}

// Commande d'installation
$commandeInstallation = 'php /var/www/html/module/controllers/wp-cli.phar core install --url=' . $url . ' --title="' . $nomSite . '" --admin_user=' . $userAdmin . ' --admin_email=' . $userEmail . ' --admin_password=' . $userPassword;

$retour = array();
$retourComplet = array();

exec('mkdir /var/www/html/' . $nomSite);
chdir('/var/www/html/'.$nomSite);
exec("mysql -uroot -proot -e 'CREATE USER \"".$dbUser."\"@\"localhost\" IDENTIFIED BY \"".$dbPass."\"; GRANT ALL PRIVILEGES ON *.* TO \"".$dbUser."\"@\"localhost\" WITH GRANT OPTION; CREATE USER \"".$dbUser."\"@'%' IDENTIFIED BY \"".$dbPass."\"; GRANT ALL PRIVILEGES ON *.* TO \"".$dbUser."\"@\"%\" WITH GRANT OPTION; FLUSH PRIVILEGES;' 2>/dev/null", $retour);
exec($telechargementInitiale_part1, $retour);
exec($telechargementInitiale_part2, $retour);
exec($configurationDB, $retour);
exec($creationDB, $retour);
exec($commandeInstallation, $retour);

if (!empty($telechargement_plugin1)) {
    exec($telechargement_plugin1);
}
if (!empty($telechargement_plugin2)) {
    exec($telechargement_plugin2);
}
if (!empty($telechargement_plugin3)) {
    exec($telechargement_plugin3);
}
if (!empty($telechargement_plugin4)) {
    exec($telechargement_plugin4);
}
if (!empty($telechargement_theme1)) {
    exec($telechargement_theme1);
}
if (!empty($telechargement_theme2)) {
    exec($telechargement_theme2);
}
if (!empty($telechargement_theme3)) {
    exec($telechargement_theme3);
}
if (!empty($telechargement_theme4)) {
    exec($telechargement_theme4);
}

echo $nomSite;