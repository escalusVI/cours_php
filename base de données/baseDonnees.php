<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		try
		{
			// On se connecte à MySQL
			$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
		}
		catch(Exception $e)
		{
			// En cas d'erreur, on affiche un message et on arrête tout
		        die('Erreur : '.$e->getMessage());
		}

		// Si tout va bien, on peut continuer

		// On récupère tout le contenu de la table jeux_video
		$reponse = $bdd->query('SELECT * FROM jeux_video');

		// On affiche chaque entrée une à une
		while ($donnees = $reponse->fetch())
		{
		?>
		    <p>
		    <strong>Jeu</strong> : <?php echo $donnees['nom']; ?><br />
		    Le possesseur de ce jeu est : <?php echo $donnees['possesseur']; ?>, et il le vend à <?php echo $donnees['prix']; ?> euros !<br />
		    Ce jeu fonctionne sur <?php echo $donnees['console']; ?> et on peut y jouer à <?php echo $donnees['nbre_joueurs_max']; ?> au maximum<br />
		    <?php echo $donnees['possesseur']; ?> a laissé ces commentaires sur <?php echo $donnees['nom']; ?> : <em><?php echo $donnees['commentaires']; ?></em>
		   </p>
		<?php
		}

		$reponse->closeCursor(); // Termine le traitement de la requête

	?>

	<?php


$reponse = $bdd->query('SELECT nom, possesseur FROM jeux_video WHERE possesseur=\'Patrick\'');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . ' appartient à ' . $donnees['possesseur'] . '<br />';
}

$reponse->closeCursor();

?>
<br/>
<p>ll vend à moins de 20 €<br/></p>
<?php
$reponse = $bdd->query('SELECT nom, possesseur FROM jeux_video WHERE possesseur=\'Patrick\' AND prix <20 ');//l'attribut AND peut etre remplacé par OR

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . ' appartient à ' . $donnees['possesseur'] . '<br />';
}

$reponse->closeCursor();

?>

<p>Si ces jeux vous interessent, les voilà trier par prix croissant</p>
<?php
$reponse = $bdd->query('SELECT nom, prix FROM jeux_video ORDER BY prix');//ORER BY fonctionne aussi avec du texte, le classement se fera par ordre alphabetique 

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . ' coûte ' . $donnees['prix'] . ' EUR<br />';
}

$reponse->closeCursor();

?>

<?php
$reponse = $bdd->query('SELECT nom FROM jeux_video LIMIT 0, 10');

echo '<p>Voici les 10 premières entrées de la table jeux_video :</p>';
while ($donnees = $reponse->fetch())
{
	echo $donnees['nom'] . '<br />';
}

$reponse->closeCursor();

?>

<!-- On peut utiliser toutes les fonctions ensembles

SELECT nom, possesseur, console, prix FROM jeux_video WHERE console='Xbox' OR console='PS2' ORDER BY prix DESC LIMIT 0,10

Il faut utiliser les fonctions dans l'ordre indiqué sinon MySQL ne comprendra pas la requête -->
</body>
</html>

