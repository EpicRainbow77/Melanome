<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Historique</title>

    <link rel="stylesheet" href="../styles/reset.css">
	<link rel="stylesheet" href="../styles/style.css">
</head>
<body class="">
	<header>
		<h1 class="">Historique des photos</h1>
	</header>
	<main class="center">
        <p>First you must, <a href="./connexion.php">sign in</a> or <a href="./inscrire.php">create an account</a></p>
        <p>Hide if signed-in</p>
        <div class="historique center">
            <div class="dia">
                <img src="../img/20230123_210449.jpg" alt="Photo" class="div">
                <p>Diagnostique...</p>
            </div>
            <div class="dia">
                <img src="../img/20230123_210449.jpg" alt="Photo" class="div">
                <p>Diagnostique...</p>
            </div>
            <div class="dia">
                <img src="../img/20230123_210449.jpg" alt="Photo" class="div">
                <p>Diagnostique......</p>
            </div>
            <div class="dia">
                <img src="../img/20230123_210449.jpg" alt="Photo" class="div">
                <p>Diagnostique...Unknow...</p>
            </div>
        </div>
        

        <a href="../index.php">Upload</a>
	</main>
	<footer class="dev">
        <p> Développé par Joshua, Adam, Sammy, Ryan et Roland</p>
        &copy; Collège La Cité
    </footer>
</body>
</html>