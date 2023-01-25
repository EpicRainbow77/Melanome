<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile</title>

    <link rel="stylesheet" href="../styles/reset.css">
	<link rel="stylesheet" href="../styles/style.css">
</head>
<body class="">
	<header>
		<h1 class="">Profile</h1>
	</header>
	<main class="">
        <p>First you must, <a href="./connexion.php">sign in</a> or <a href="./inscrire.php">create an account</a></p>
        <p>Hide if signed-in</p>
        <div>
            <p>Prénom</p>
            <p>Nom</p>
            <p>Identité de genre</p>
            <p>Sexe biologique</p>
            <p>Allergies</p>
        </div>
        <a href="../index.php">Upload</a>
        <input type="button" value="Déconnexion">
	</main>
	<footer class="dev">
        <p> Développé par Joshua, Adam, Sammy, Ryan et Roland</p>
        &copy; Collège La Cité
    </footer>
</body>
</html>