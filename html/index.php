<?php define('ROOT', './')?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'accueil</title>
</head>
<body>
   <header>
	<h1>Bienvenue sur notre site collaboratif</h1>
   </header>
   <nav>
	<a href="<?=ROOT?>html/index.php">Acceuil</a>
	<a href="<?=ROOT?>html/login.php">Connexion</a>
	<a href="#">Contact</a>
   </nav>
   <main>
    <?php if(isset($_SESSION['error'])) {
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            }?>
	<p>Ceci est la page d'accueil de notre projet collaboratif. Naviguez à travers les pages pour en apprendre plus sur nous et notre travail.</p>
   </main>
   <footer>
	<p>&copy; 2025 Projet Collaboratif - Tous droits réservés.</p>
   </footer>
</body>
</html>
