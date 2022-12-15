<?php 

if(isset($_POST['email'])){

        $destinatario = "reservas@granhotelmunich.com";
        $asunto = "Reserva web " . $_POST['name']; 
        $cuerpo = "Mensaje: \n\r<br>" . $_POST['message'] .
        "\n\r\n\r<br><br>Datos del interesado:".
        "\n\r<br>Nombre: " . $_POST['name'] .
        "\n\r<br>Número de telefono: " . $_POST['phone'] .
        "\n\r<br>Email: " . $_POST['email']; 
        

        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $headers .= "X-Priority: 1" . "\r\n";
    
        $headers .= "From: Reservas web - Gran Horel Munich <hola@granhotelmunich.com>\r\n"; 
        
        
        
        $success=mail($destinatario,$asunto,$cuerpo,$headers);
    if($success)
    { 
        echo '
        <p class="bg-white p-md-5 p-4 mb-5">Hemos enviado tu mensaje, pronto nos contactaremos contigo!</p> 
        ';
    } else { 
        echo '
        <p class="bg-white p-md-5 p-4 mb-5">Ups! Parece que algo no esta funcionando como debería.</p>
        ';
    }
}
    

?>