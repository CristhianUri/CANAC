<?php
if(isset($_POST['contact'])) {
    if(!
        empty ($_POST['name']) >= 1 &&
        empty ($_POST['email']) >= 1 &&
        empty ($_POST['direction']) >= 1 &&
        empty ($_POST['phone']) >= 1 &&
        empty ($_POST['message']) >= 1

        ) {

            $name = ($_POST['name']);
            $email = ($_POST['email']);
            $direction = ($_POST['direction']);
            $phone = ($_POST['phone']);
            $message = ($_POST['message']);
            $fecha = ("d/m/a");
        $header = "from: jesmtz25@gmail.com" . "\r\n";
        $header.= "Reply-To  jesmtz25@gmail.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $email = @mail($email,$mesage,$header);
        if($mail){
            echo"<h4>Su mensaje se ha enviado exitosamente</h4>";
        }
        
    }


}
?>
    


