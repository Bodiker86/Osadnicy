<?php

session_start();

if (!isset($_SESSION['udanarejestracja']))
{

    header('Location: index.php');
    exit();
}
else 
{
   unset($_SESSION['udanarejestracja']); 
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osadnicy - gra przeglądarkowa</title>
</head>
<body>
    Dziękujemy za rejestrację w serwisie! Możesz juz zalogować się na swoje konto! <br/><br/>

    <a href="index.php">Zaliguj się na swoje konto!</a>
    <br /><br />

</body>
</html>