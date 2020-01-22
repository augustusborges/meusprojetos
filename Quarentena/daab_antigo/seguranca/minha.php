<?php

    if (version_compare(PHP_VERSION, '5.3.7', '<')) {
        exit("Sorry, Simple PHP Login does not run on a PHP version smaller than 5.3.7 !");
    } 
    else if (version_compare(PHP_VERSION, '5.5.0', '<')) {
        require_once("libraries/password_compatibility_library.php");
    }

    require_once("config/db.php");
    require_once("classes/Login.php");

    $login = new Login();

    if ($login->isUserLoggedIn() == false) {
        header('Location: acesso.php');
    }
?>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Minha Página</title>
    </head>
    <body>
        <h3>teste</h3>
    </body>
</html>