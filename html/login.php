<?php define('ROOT, './');
session_start()
?>

# on mets pas de ; parce qu'on est des pros après fermute de la balise php

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header><h1>Connexion</h1></header>
    <?php if(isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            }?>
    <form action="<?=ROOT?>../php/php_login.php" method="POST">
	<label for="login">Nom d'utilisateur :</label>
	<input type="text" id="login" name="login" required>
	<br><br>
	<label for="password">Mot de passe :</label>
	<input type="password" id="password" name="password" required>
	<br><br>
	<button type="submit">Se connecter</button>
    </form>
</body>
</html>
