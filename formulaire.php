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
		
		<form method="post" action="InscrMerci.php">
			<fieldset>
			
				<legend>Inscription</legend>
				
		
					<div class="c100">
					<label for="pseudo"> Prénom: </label>
					<input type="text" name="prenom" id="prenom" autofocus required><br><br>

					<div class="c100">	
					<label for="pseudo"> Nom: </label>
					<input type="text" name="nom" id="nom" autofocus required><br><br>
                    <div class="c100">
					<label for="pseudo"> Adresse: </label>
					<input type="text" name="adresse" id="adresse" autofocus required><br><br>
                    <div class="c100"> 
					<label for="pseudo"> Tel: </label>
					<input type="int" name="tel" id="tel" autofocus required><br><br>
                    
                    <div class="c100">
					<label for="mail">Email: </label>
			<input type="mail" name="mail" id="mail" placeholder="Ex: teneremy736@gmail.com"><br><br>
	
                <div class="c100">
				<label for="date_inscription"> Date d'Inscription: </label>
			<input type="date" name="date_inscription" id="date_inscription"><br><br>

			<div class="c100">
			Module:	
            <select name="module">
            	
			<option value="htmlcss">HTML/CSS</option>
			<option value="php">PHP</option>
			<option value="javascript">JavScript</option>
			<option value="mysql">MySQL</option>
		</select>
		<br><br>
					
             <div class="but1">
					<button type="button" onclick="Annuler()">Annuler</button>
				
		       <class="c100" id="submit">
                <input type="submit" value="Envoyer">
		
				<center>
				<a href="accueil2.php" target="blank"> <input type="button" value="Menu">
				</div>


			</fieldset><br>


		
    </form>

			
			
		</form>
	</body>
</html>