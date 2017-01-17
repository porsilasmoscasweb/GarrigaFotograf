<?php
$nombre = $_POST["nom"];
$cognom = $_POST["cognom"];
$adresa = $_POST["adresa"];
$adresa2 = $_POST["adresa2"];
$ciutat = $_POST["ciutat"];
$provincia = $_POST["provincia"];
$codi = $_POST["codi"];
$tel = $_POST["tel"];
$mail = $_POST["mail"];
$assumpte = $_POST["assumpte"];

$mensaje  = "Nom:     " . $_POST['nom'] . "\n";
$mensaje .= "Cognom:     " . $_POST['cognom'] . "\n";
$mensaje .= "Adresa:     " . $_POST['adresa'] . "\n";
$mensaje .= "Adresa Linea 2:    " . $_POST['adresa2']  . "\n";
$mensaje .= "Ciutat:          " . $_POST['ciutat']     . "\n";
$mensaje .= "Provincia:    " . $_POST['provincia'] . "\n";
$mensaje .= "Codi postal:    " . $_POST['codi'] . "\n";
$mensaje .= "Telefon:    " . $_POST['tel'] . "\n";
$mensaje .= "E-mail:    " . $_POST['mail'] . "\n";
$mensaje .= "Assumpte:    " . $_POST['assumpte'] . "\n\n";

$cabecera = "From: $nombre <$mail> \r\n";
$cabecera .= "Reply-To: $mail";

if(mail("garriga@fotogarriga.com", "Formulario desde el Sitio", $mensaje, $cabecera)){
	header('Location:http://www.fotogarriga.com/contacta.html');
}
else{
	header('Location:http://www.fotogarriga.com/contacta.html');
}
?>