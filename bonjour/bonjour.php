<?php


if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['repeter']))//On a le nom et le prenom
{
	$_GET['repeter'] = (int) $_GET['repeter'];// 1 On force la conversion en nomobre entier

	// 2 : Le nombre doit être compris entre 1 et 100
	if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <= 100)
	{
		for ($i = 0 ; $i < $_GET['repeter'] ; $i++)
		{
			echo 'Bonjour ' . $_GET['prenom'] . ' '. $_GET['nom'] . '!<br/>';	
		}	
	}

	
}

else //Il manque des paramètres, on avertit le visiteur
{
	echo 'IL faut renseigner un nom et un prénom et un nombre de répétitions !';
}
?>
