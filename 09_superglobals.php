<?php
/*
    $_GET - Contains info about vars passed through a URL or a form
    $_POST - Contains info about vars passed thru a form
    $_COOKIE - Contains info about vars passed thru a cookie
    $_SESSION - Contains info about vars passed thru a session
    $_SERVER - Contains info about the server environment
    $_ENV - Contains info about the environment variables
    $_FILES - Contains info about files uploaded to the script
    $_REQUEST - Contains info about vars passed thru the form or URL

*/

// var_dump($_SERVER);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Host: <?php echo$_SERVER['HTTP_HOST']; ?></li>
        <li>Document Root: <?php echo$_SERVER['DOCUMENT_ROOT']; ?></li>
        <li>Server Name: <?php echo$_SERVER['SERVER_NAME']; ?></li>
        <li>Server Port: <?php echo$_SERVER['SERVER_PORT']; ?></li>
        <li>Current File Dir: <?php echo$_SERVER['PHP_SELF']; ?></li>
        <li>Request URI: <?php echo$_SERVER['REQUEST_URI']; ?></li>
        <li>Server Software: <?php echo$_SERVER['SERVER_SOFTWARE']; ?></li>
        <li>Client Info: <?php echo$_SERVER['HTTP_USER_AGENT']; ?></li>
        <li>Remote Address: <?php echo$_SERVER['REMOTE_ADDR']; ?></li>
        <li>Remote Port: <?php echo$_SERVER['REMOTE_PORT']; ?></li>
    </ul>


</body>
</html>