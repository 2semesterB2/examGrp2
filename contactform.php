<?php 
header('Location: contact.php');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = "$name har skrevet: ".$_POST['message']." : sendt fra $email";

	$to = "claus-jorgensen@hotmail.com";
	$subjekt = "Kontakt fra siden.";

	mail($to, $subjekt, $message) or die('Fejl!');
	echo "TAK din email er nu sendt!  <a href='contact.php'>Vend tilbage til min side her</a>"; 
?>