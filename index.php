<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat room</title>
</head>
<body>
    <?php 
        session_start();
        if(isset($_GET['section'])){
            $section = $_GET['section'];
        }
        else{
            $section = 'portada';
        }

        switch($section){
            case 'portada':{
                include 'controller/portada.php';
                break;
            }
            case 'login':{
                include 'controller/login.php';
                break;
            }
            case 'register':{
                include 'controller/register.php';
                break;
            }
        }
    ?>
</body>
</html>