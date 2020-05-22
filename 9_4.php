<!DOCTYPE html>
<html lang="it">
  <head>
    <title>PHP 9_4</title>
    <meta charset="utf-8">
    <meta name="author" content="Lorenzo Costa" >
    <link rel=stylesheet href=fogliodistile.css>
  </head>
  <body>
      <?php
      $regexp="/^(\+|-)\d{1,3}\.\d{1}$/";
      if(empty($_REQUEST['temp'])){
        echo "<p>Non hai inserito la temperatura</p>";
      }else if(!preg_match($regexp,$_REQUEST['temp'])){
        echo "<p>Attenzione! La temperatura inserita non rispetta la richiesta</p>";
      }else{
        $temperatura=$_REQUEST['temp'];
        if($temperatura<0){
          echo "<p>Oggi &egrave una giornata molto fredda!</p>";
        }else if($temperatura>=0 && $temperatura<=10){
          echo "<p>Oggi &egrave una giornata fredda!</p>";
        }else if($temperatura>=11 && $temperatura<=18){
          echo "<p>Oggi &egrave una giornata tiepida!</p>";
        }else if($temperatura>=19 && $temperatura<=25){
          echo "<p>Oggi &egrave una giornata calda!</p>";
        }else if($temperatura>=25){
          echo "<p>Oggi &egrave una giornata molto calda!</p>";
        }
      }
       ?>
  </body>
</html>
