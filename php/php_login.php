<?php
# definition de base

define('ROOT', 'massonneuse-batteuse');
session_start();

# reprise de quelques conditions classics avec inspiration d'ancien fichier
if (isset($_POST['login'] && !empty($_POST['login']) && isset($_POST['password'] && !empty($_POST['password']) {
    $login = htmlspecialchars(filter_input(INPUT_POST, 'login'));
    $password = htmlspecialchars(filter_input(INPUT_POST, 'password'));

    if (!$login) or (!$password) {
        header('Location:./login.php');
    }
        # verification des identifiants
        if (($password == "Onaimebeaucoup") && ($login == "LescoursdeSeb")) {
	    echo "vous êtes bien connecté";
	} else {
	    echo "erreur de mot de passe"

} else {
    header('Location:./login.php');
}
?>
