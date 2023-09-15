<!DOCTYPE html>
    <html lang="de">
        <head>
            <title>PHP Tutorial</title>
        </head>
    <body>

    <?php

    $empfaenger = "maxi.popp@outlook.de";
    $betreff = "Test";
    $from = "FROM: Download Portal <downloaddp.portal@gmail.com>\r\n";
    $from .= "Reply-To: maxi.popp@outlook.de\r\n";
    $from .= "Content-Type: text/html\r\n";
    $msg = "<h1>PHP E-Mail</h1><br>";

    if(mail($empfaenger,$betreff,$msg,$from)){
    echo "E-Mail wurde erfolgreich gesendet";
    }

    ?>

    </body>
</html>
