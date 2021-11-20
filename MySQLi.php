
<!DOCTYPE html>
<html>
<head>
<title> MySQLi</title>
<meta charset="utf-8">
</head>
<body>
	<p>On veut verifier si laconnexion sera établie ou non</p>
	<p>Rechargement...</p>
<?php
$servername='localhost';
$username='root';

//On établitb la connexion
$conn= new mysqli($servername, $username);
//On vérifie la connexion
if($conn->connect_error){
	die('Erreur :' .$conn->connect_error);
}
echo 'Connexion réussie tu es fort petit';
?>
</body>
</html>