<?php 

if(isset($_POST['email'])){

        $destinatario = "aste.agustin@gmail.com";//$_POST['email']; 
        $asunto = "Reserva web " + $_POST['name']; 
        $cuerpo = "Mensaje: \n" + $_POST['message'] +
        "\n\nDatos del interesado:"+
        "\nNombre" + $_POST['name'] +
        "\nNúmero de telefono: : " + $_POST['phone'] +
        "\nEmail: " + $_POST['email']; 
        

        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
        $headers .= "X-Priority: 1" . "\r\n";
    
        $headers .= "From: Reservas web - Gran Horel Munich <hola@granhotelmunich.com>\r\n"; 
        
        
        
        $success=mail($destinatario,$asunto,$cuerpo,$headers);
    if($success)
    { 
        echo '
        <p>Hemos enviado tu mensaje, pronto nos contactaremos contigo!</p> 
        ';
    } else { 
        echo '
        <p>Ups! Parece que algo no esta funcionando como debería.</p>
        ';
    }
}
    

?>