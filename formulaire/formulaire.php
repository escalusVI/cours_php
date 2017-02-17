<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	
	<p>
	Cette page ne contint que du HTML.<br/>
	Veuillez taper votre prénom :
</p>

<form action="cible.php" method="post">
<p>
	<input type="text" name="prenom" placeholder="Prénom" />
</p>

<p>
	<textarea name="message" rows="8" cols="45" placeholder="Votre texte ici !" ><!--zone de texte-->
	
	</textarea>
</p>

<p>
	Dans quel pays habitez-vous<!--liste déroulante-->
	<select name="pays">
		<option value="france">France</option>
		<option value="espagne">Espagne</option>
		<option value="royaume-uni">Royaume-Uni</option>
		<option value="canada">Canada</option>
		<option value="etas-unis" selected="selected">Etas-Unis</option><!--selected defini le choix par defaut, sinon c'est le premier par defaut-->
		<option value="chine">Chine</option>
		<option value="japon">Japon</option>
	</select>
</p>

<p>
	<input type="checkbox" name="offre_partenaire" id="informatique"/><label for="informatique">Recevoir des offres promotionneles de notre partenaire informatique ?</label>
</p>

<p>
	Souhaitez-vous recvoir la Newsletter ?
	<input type="radio" name="Newsletter" value="oui" id="oui" checked="checked"/> <label for="oui">Oui</label>
	<input type="radio" name="Newsletter" value="non" id="non"/><label for="non">Non</label>
</p>



	<input type="submit" value="Valider" />
</form>

</body>
</html>
	
