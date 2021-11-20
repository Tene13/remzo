<!DOCTYPE html>
<html>
	<head>
		<title>Tableau</title>
		<meta charset= "utf-8">
		<link rel="stylesheet" href="style.css">
		<script src="formulaire.js" async></script>
	</head>

	<body>
	<div>
		
		<form method="post" action="traitement.php">
			<fieldset>
			
				<legend>CONTACT</legend>
				
		
			
					<label for="pseudo"> Prénom: </label>
					<input type="text" name="prenom" id="prenom" autofocus required><br><br>

					<label for="pseudo"> Nom: </label>
					<input type="text" name="nom" id="nom" autofocus required><br><br>

					<label for="pseudo"> Adresse: </label>
					<input type="text" name="adresse" id="adresse" autofocus required><br><br>

					<label for="pseudo"> Tel: </label>
					<input type="int" name="tel" id="tel" autofocus required><br><br>

					<label for="mail">Email: </label>
			<input type="email" name="mail" id="mail" placeholder="Ex: teneremy736@gmail.com"><br><br>


			<label for="message"><b>Laisser moi un message:</b></label>
			<textarea name="message" id="message" placeholder="Suggestions ou commentaires"></textarea><br><br>

			<div class="but1">
					<button type="button" onclick="Annuler()">Annuler</button>
				</div>
			

		      <div class="but2">
					<button onclick="confirmAction()">Envoyer</button>
				</div>
				

			</fieldset><br>

    </form>

				
		</form>
	</body>
</html>