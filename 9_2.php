<!DOCTYPE html>
<html lang="it">
  <head>
    <title>PHP 9_2</title>
    <meta charset="utf-8">
    <meta name="author" content="Lorenzo Costa" >
    <link rel=stylesheet href=fogliodistile.css>
  </head>
  <body>
      <?php
        echo("<p>Benvenuto!</p>");
        echo "<p>Qui sul server sono le ".date("H:i:s")." del ".date("d/m/Y")."</p>";
        echo '<p>'.date("Y/m/d H:i:s").'</p>';
      ?>
      <script>
      "use strict";
        var d=new Date();
        document.writeln("<p>Sul client sono le "+d.getHours()+":"+d.getMinutes()+":"+d.getSeconds()+" del "+d.getDate()+"/"+(d.getMonth()+1)+"/"+d.getFullYear()+"</p>");
      </script>
  </body>
</html>
