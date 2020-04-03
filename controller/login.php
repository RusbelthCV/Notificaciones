<?php

    if(!isset($_SESSION['user'])){
        include 'view/login.php';
    }
    else{
        header("");
    }

?>