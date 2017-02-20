<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<p> Désolé <?php echo $_SESSION['prenom']; ?> , seul les admins peuvent modifier les codes d'accés.
</body>
</html>