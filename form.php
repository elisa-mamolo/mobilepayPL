<?php
        
        //recipient
        $to = "elisa.mamolo@gmail.com";
        
        //subject of email
        if(isset($_POST['name_input'])){
            $name = $_POST['name_input'];
        }
         
        //message
        if(isset($_POST['message_input'])){
            $message = $_POST['message_input'];
        }
        
        
          //To send HTML mail, the content type header must be set
        $headers = "MIME-Version: 1.0 " . "\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
        
        //additional headers
        $headers .= 'From:' . $_POST['email_input'] . "\r\n";
        
        //send mail
        mail($to, $name, $message, $headers);
        
        header("Location: form-sended.html");
        ?>