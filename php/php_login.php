<?php
define('ROOT', 'massonneuse-batteuse');
session_start();

if (isset($_POST['login'] && !empty($_POST['login']) && isset($_POST['password'] && !empty($_POST['password']) {
    $login = htmlspecialchars(filter_input(INPUT_POST, 'login'));
    $password = htmlspecialchars(filter_input(INPUT_POST, 'password'));

    if (!$login) or (!$password) {
        header('Location:./login.php');
    }

} else {
    header('Location:./login.php');
}
?>
