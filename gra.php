<?php

session_start();

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
    
<?php

    echo"<p>Witaj ".$_SESSION['user']."!";
    echo"<p><b>Drewno</b >: ".$_SESSION['drewno'];
    echo " | <b>Kamień</b>: ".$_SESSION['kamien'];
    echo " | <b>Zboże</b> : ".$_SESSION['zboze']."</p>";

    echo"<p><b>E-mail</b>: ".$_SESSION['email'];
    echo"<p><b>Dni premium</b>: ".$_SESSION['dnipremium']."</p>";
    
?>

</body>
</html>