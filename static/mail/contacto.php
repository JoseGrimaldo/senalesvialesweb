<?php
if(empty($_POST['nombre'])  		||
   empty($_POST['email']) 		||
   empty($_POST['telefono']) 		||
   empty($_POST['mensaje']))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['nombre'];
$email_address = $_POST['email'];
$phone = $_POST['telefono'];
$message = $_POST['mensaje'];
	
$to = 'zero@grafmex.com'; 
$email_subject = "Formulario Señales Viales:  $name";
$email_body = "Un cliente busca contactarse\n\n"."Detalles:\nNombre: $name\nEmail: $email_address\nTelefono: $phone\nMensaje:\n$message";
$headers = "From: noreply@senalesvyp.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
echo "<script>
alert('Mensaje Enviado');
window.location='http://www.senalesvyp.com';
</script>";
?>