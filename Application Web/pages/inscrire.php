<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inscription</title>

    <link rel="stylesheet" href="../styles/reset.css">
	<link rel="stylesheet" href="../styles/style.css">
</head>
<body class="">
	<header>
		<h1 class="">Création de compte</h1>
	</header>
	<main class="">
        <p>Hide if signed-in/ redirrect to home page</p>
		<form action="../backend/connexion.php" method="POST">
			<input type="text" name="uid" placeholder="Nom utilisateur" class="">
			<input type="password" name="pwd" placeholder="Mot de passe" class="">
            <input type="password" name="pwd_confirm" placeholder="Retaper le mot de passe" class="">
			<input type="submit" name="inscrire-submit" value="Inscrire">
		</form>
        <a href="./connexion.php">Already have an account</a>
        <a href="../index.php">Upload</a>
	</main>
	<footer class="dev">
        <p> Développé par Joshua, Adam, Sammy, Ryan et Roland</p>
        &copy; Collège La Cité
    </footer>
</body>
</html>