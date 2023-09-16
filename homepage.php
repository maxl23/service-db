<link href="stylehomepage.css" rel="stylesheet" type="text/css">
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
<a href="Benutzereinstellungen.html" class="head">Benutzer-Einstellungen</a>
<a href="index.html" class="head"><menu>Ausloggen</menu></a>

<h1 class="beg">
  <strong>
      Hallo
    <?php
      session_start();
      echo $_SESSION["username"]
     ?>
, herzlich wilkommen im Download-Center!
  </strong>
</h1>
<h3 class="Windows">Windows</h3>
</body>
