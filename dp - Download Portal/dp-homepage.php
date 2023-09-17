<link href="dp-stylehomepage.css" rel="stylesheet" type="text/css">
<style type="text/css">
.beg {
    font-family: sans-serif;
}
.head {
    font-family: sans-serif;
}
.head {
    font-family: sans-serif;
}
.Windows {
    font-family: sans-serif;
}
</style>
<a href="dp-Benutzereinstellungen.html" class="head">
Benutzer-Einstellungen</a>
<a href="dp-index.html" class="head">Ausloggen</a>

<h1 class="beg">

      Hallo
    <?php
      session_start();
      echo $_SESSION["username"]
     ?>
, herzlich wilkommen im Download-Center!

</h1>
<h3 class="Windows">Windows</h3>
</body>
