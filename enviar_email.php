<?php
$fecha=date("d-m-y");
$hora=date("H:i:s");
$destino="spinworldgto@gmail.com";
$asuntos="comentario";
$desde='From: '.$_POST['email'];
$comentario="

Nombre: $_POST[nombre]
Email: $_POST[email]
Asunto: $_POST[asunto]
Comentario: $_POST[comentario]


";
$enviado= mail($destino, $asuntos, $comentario, $desde);
if ($enviado==false){
	echo "Error";
}
else {
	print"
<script languaje='JavaScript'>
alert('Correo enviado Correctamente');
window.location.href='index.html';
</script>
";
	//header("location: index.html");
}





?>
