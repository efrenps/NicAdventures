<?php
if(isset($_POST['email'])) {
    $email_to = "efren_ps@yahoo.es";
    $email_subject = "Sonrisas Espectaculares Ha recibido Un Nuevo Mensaje";
    function died($error) {
        // Mensaje de error
        echo "Disculpas, pero ha ocurrido un(os) error(es) con lo datos del formulario. ";
        echo "El o los errores son los siguientes.<br /><br />";
        echo $error."<br /><br />";
        echo "Por favor corrija los errores.<br /><br />";
        die();
    }
    // validacion de campos
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['message'])) {
        died('Disculpas, pero ha ocurrido un(os) error(es) al enviar el formulario.');       
    }
    $name = $_POST['name']; // obligatorio
    $email = $_POST['email']; // obligatorio
    $telephone = $_POST['telephone']; // no obligatorio
    $message = $_POST['message']; // obligatorio
    $error_message = "";
    $email_message = "Form details below.\n\n";
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
    $email_message .= "Nombre: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Telefono: ".clean_string($telephone)."\n";
    $email_message .= "Mensaje: ".clean_string($message)."\n";
// estructura del correo
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
<meta http-equiv="refresh" content="3;URL=http://sonrisasespectaculares.com/" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- incluimos nuestro mensaje de agradecimiento -->
<body>
<BR>
<h2 style="text-align:center;">Mensaje Enviado con exito.<BR> Muchas Gracias!!!</h2>
</body>
<?php
}
?>