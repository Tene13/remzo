<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" />
<title>Les formulaires</title>
</head>
<h1>Formulaire HTML</h1>
<?php
$serveur="localhost";
$dbname="ucaoig3";
$user="root";

$prenom= $_POST["prenom"];
$nom= $_POST["nom"];
$adresse= $_POST["adresse"];
$tel= $_POST["tel"];
$mail= $_POST["mail"];
$date_inscription= $_POST["date"];
$module= $_POST["module"];

try{
	$dbco= new PDO("mysql:host=$serveur;dbname=$dbname",$user);

	$dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sth=$dbco->prepare("INSERT INTO Formulaire(prenom, nom, adresse, tel, mail, date_inscription, module) VALUES (:prenom, :nom, :adresse, :tel, :mail,  :date_inscription, :module)");
	$sth->bindParam(':prenom', $prenom);
	$sth->bindParam(':nom', $nom);
	$sth->bindParam(':adresse', $adresse);
	$sth->bindParam(':tel', $tel);
	$sth->bindParam(':mail', $mail);
	$sth->bindParam(':date_inscription', $date_inscription);
	$sth->bindParam(':module', $module);
	$sth->execute();
	//On rennvoie l'utilisateur  vers la page de remerciement
	header("Location:form-merci1.html");
}
catch(PDOException $e){
	echo "Erreur : " .$e->getMessage();
}

?>
</body>
</html>