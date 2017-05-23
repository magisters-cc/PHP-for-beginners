<?php

    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        echo $email;   
        
        //Функция работы над email
        
    } else {
        header('Location: /');
    }
    
?>