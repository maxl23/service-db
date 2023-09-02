<link href="stylehomepage.css" rel="stylesheet" type="text/css">
<style type="text/css">
.beg {
    font-family: sans-serif;
}
.head {
    font-family: sans-serif;
}
</style>
<body>
<a href="bs.html">Benutzer-Einstellungen</a>


<h1 class="beg"><strong>Hallo
  <?php
    session_start();
    echo $_SESSION["username"];
    ?>, herzlich wilkommen im Download-Center!



</strong></h1>
<h3>Windows</h3>
</body>
