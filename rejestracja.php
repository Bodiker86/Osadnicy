<?php

session_start();

if (isset($_POST['email']))
{
    //Udana walidacja? Załóżmy, żetak!
    $wszystko_OK=true;

    //Spawdż poprawność nickname'a
    $nick = $_POST['nick'];

    //Sprawdzenie długości nicka
    if ((strlen($nick)<3) || (strlen($nick)>20))
    {
        $wszystko_OK=false;
        $_SESSION['e_nick']="Nick musi posiadać od 3 do 20 znawów!";
    }

    if (ctype_alnum($nick)==false)
    {
        $wszystko_OK=false;
        $_SESSION['e_nick']="nick może składać tylko z liter i cyfr (bez polskish znaków)";
    }

    if($wszystko_OK==true)
    {
        //Hurra, wszystkie testy zaliczone, dodajemy gracza do bazy
        echo "Udana walidacja!";
        exit();
    }

}


?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Osadnicy - załóż darmowe konto!</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    
    <style>
    .error
    {
        color:red;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    
    </style>
    
    
    </head>
<body>
   
   <form method="post">

   Nickname: <br /> <input type="text" name="nick" /> <br />

   <?php

    if (isset($_SESSION['e_nick']))
    {
        echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
        unset($_SESSION['e_nick']);
    }

   ?>

   E-mail: <br /> <input type="text" name="email" /> <br />

   Twoje hasło: <br /> <input type="password" name="haslo1" /> <br />

   Powtórz hasło: <br /> <input type="password" name="haslo2" /> <br />

    <label>

    <input type="checkbox" name="regulamin" /> Akceptuję regulamin

    </label>

    <div class="g-recaptcha" data-sitekey="6LdcRvwaAAAAADM6w4rj5Iaw4KibacWHq4UzCP2j"></div>
    
    <br/>
    
    <input type="submit" value="Zarejestruj się" />

   </form>
 
 </body>

</html>