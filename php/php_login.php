<?php
# definition de base

define('ROOT', 'massonneuse-batteuse');
session_start();

# reprise de quelques conditions classics avec inspiration d'ancien fichier
if (isset($_POST['login'] && !empty($_POST['login']) && isset($_POST['password'] && !empty($_POST['password']) {
    $login = htmlspecialchars(filter_input(INPUT_POST, 'login'));
    $password = htmlspecialchars(filter_input(INPUT_POST, 'password'));

    if (!$login) or (!$password) {
        $_SESSION['error'] = "/!\ Login ou mot de passe vide /!\";
        header('Location:./login.php');
    }
        # verification des identifiants
        if (($password == "Onaimebeaucoup") && ($login == "LescoursdeSeb")) {
	    $_SESSION['valide'] = "Vous êtes connecté";
	} else {
	    $_SESSION['error'] = "/!\ Erreur de mot de passe /!\";

} else {
    $_SESSION['error'] = "/!\ Il y a des champs sont vides ou non saisie /!\";
    header('Location:./login.php');
}

# les $_SESSION['erreur'] et ['valide'] serviront au début des fichiers, si ils sont set ils seront echo avec le message.
?>
