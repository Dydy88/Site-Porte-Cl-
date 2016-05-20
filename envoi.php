<!Doctype html>
<html>
<head>
 <title></title>
 <meta charset="utf-8">
<head> 

<body>
	<p> Tu nom est : <?php echo htmlspecialchars ($_POST['nom']); ?> </p>
	<p> Ton prénom est : <?php echo htmlspecialchars ($_POST['prenom']);?> </p>
	<p> Ton email est : <?php echo htmlspecialchars ($_POST ['email']);?> </p>
	<p> Ton adresse est: <?php echo htmlspecialchars ($_POST['Adresse']);?> </p>
	<p> Ton code Postal est : <?php echo htmlspecialchars ($_POST ['Code Postal']);?> </p>
	<p> Le nom de ta ville est : <?php echo htmlspecialchars ($_POST ['Ville']);?> </p>
	<p> Ton numéro de téléphon est : <?php echo htmlspecialchars ($_POST ['Numèro de Téléphone']);?> </p>
	<p> Sujet : <?php echo htmlspecialchars ($_POST ['Sujet']);?> </p></br>

	<p> Le Commentaire est: <?php echo htmlspecialchars ($_POST ['commentaire']);?> </p></br>

<p> Voici les informations que tu as saisie dans ton formulaire, si tu veux les modifier <a href="Formulaire2.php"> Clique ici </a> </p>
</body>
</html>
