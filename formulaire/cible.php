<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<p>Bonjour !</p>

	<p>
		 <?php echo htmlspecialchars($_POST['prenom']); ?> !
	</p>

	<p>
		Ton message : <br/><?php echo htmlspecialchars($_POST['message']); ?>
	</p>

	<p>
		Tu habite en <?php 	echo $_POST['pays']; ?>
	</p>

	<p>
		<?php 
		if (isset($_POST['offre_partenaire']))
		{
			echo '<p>Tu ne souhaite recevoir des offre promotionnelles de notre partenaire informatique</p>';
		}

		else
		{
			echo '<p>Tu ne souhaite pas recevoir d\'offre de notre partenaire informatique.';
		}
		?>
	</p>

	<p>
		<?php
		if ($_POST['Newsletter'] == 'oui')
		 {
			echo '<p>Tu souhaite recevoir la Newsletter.</p>';
		}

		else{
			echo '<p>Tu ne souhaite pas recevoir la Newletter.</p>';
		}
		?>
	</p>


	<p>
		Si tu veux changer des informations, <a href="formulaire.php">Clique ici</a> pour revenir à la page formulaire.php
	</p>
	
		
	
</body>
</html>

