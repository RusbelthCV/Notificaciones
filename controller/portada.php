<?php

    if($_SESSION['user']){
        $message = "Estás conectado";
    }
    include 'view/portada.php';
?>