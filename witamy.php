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

//Usuwanie zminnych pamiętających wartości wpisane do formularza
if (isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
if (isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
if (isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
if (isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);

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