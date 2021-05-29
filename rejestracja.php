<?php

session_start();

if (isset($_POST['email']))
{

    
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
</head>
<body>
   
   <form method="post">

   Nickname: <br /> <input type="text" name="nick" /> <br />

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