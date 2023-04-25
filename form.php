<?php

if (isset($_POST['send'])) {
	if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
		$name = $_POST['name'];
		$sender = $_POST['email'];
		$receiver = "nutriologa.valeriaadalid14@gmail.com";
		$message = $_POST['message'];
		$subject = "Formulario";
		$header = "From: $sender" . "\r\n";
		$header.= "Reply-To: $receiver" . "\r\n";
		$header.= "X-Mailer: PHP/" . phpversion();
		$mail = @mail($receiver,$subject,$message,$header);
		if ($mail) {
			echo "<script>alert('¡Tu mensaje fue enviado exitosamente! Pronto me pondré en contacto.')</script>";
			echo"<script>setTimeout(\"location.href='contact.php'\",1000)</script>";
		}
	}
}
?>
