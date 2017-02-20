<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php
	if (!isset($_POST['password']))
	{
		?>
		<p>
		Veuillez entrer le mot de passe pour obtenir les codes d'accès au serveur central de la NASA : !</p>
	<form method="post" action="une_page.php">
		<p>
			<input type="text" name="prenom" placeholder="prénom"/><br/>
			<input type="password" name="password" placeholder="mot de passe" />
			<input type="submit" value="Valider"/>
		</p>
	</form>
	<p>Cette page est réservée au personnel de la NASA. Si vous ne travaillez pas à la NASA, inutile d'insister vous ne trouverez jamais le mot de passe ! ;-)</p>
	<?php
	}
	elseif ($_POST['password'] != "kangourou") {
		echo '<p>Mot de passe incorrect '.htmlspecialchars($_POST ['prenom']). ' !<br/> <a href="une_page.php">essayez de nouveaux</a></p> ';
	}
	else
	{?>
		<h2>Bienvenue <?php echo $_POST['prenom'] ?><h2>
		<h1>Voici les codes d'accès :</h1>
        <p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>   
        
        <p>
        Cette page est réservée au personnel de la NASA. N'oubliez pas de la visiter régulièrement car les codes d'accès sont changés toutes les semaines.<br />
        La NASA vous remercie de votre visite.<img src="logo.png">
        </p>
	<?php } ?>


</body>
</html>