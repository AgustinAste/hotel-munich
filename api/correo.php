<?php 
if(isset($_POST['enviar'])){
    if( !empty($_POST['name']) && !empty($_POST['message']) && !empty($_POST['email']) && !empty($_POST['phone']) ){

        $destinatario = $_POST['email']; 
        $asunto = "Reserva web " + $_POST['name']; 
        $cuerpo = $_POST['message'] + "\n\nNúmero de telefono: " + $_POST['phone']; 
        
        //para el envío en formato HTML 
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        
        //dirección del remitente 
        $headers .= "From: Reservas Gran Hotel Munich <reservas@granhotelmunich.com>\r\n"; 
        
        //dirección de respuesta, si queremos que sea distinta que la del remitente 
        // $headers .= "Reply-To: test@test.com\r\n"; 
        
        mail($destinatario,$asunto,$cuerpo,$headers) 
    }
}
?>