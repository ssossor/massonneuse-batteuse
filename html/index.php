<?php define('ROOT', './');
session_start();
?>


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
        <article>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae vestibulum vestibulum. Cras venenatis euismod malesuada. Curabitur nec felis neque. Nulla facilisi. Aenean feugiat nulla in sem fermentum, ut dictum justo aliquet. Suspendisse potenti.</article>
        <article>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</article>
        <article>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Aliquam erat volutpat. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</article>
   </main>
   <footer>
	<p>&copy; 2025 Projet Collaboratif - Tous droits réservés.</p>
   </footer>
</body>
</html>
