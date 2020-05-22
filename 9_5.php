<!DOCTYPE html>
<html lang="it">
  <head>
    <title>PHP 9_5</title>
    <meta charset="utf-8">
    <meta name="author" content="Lorenzo Costa" >
    <link rel=stylesheet href=fogliodistile.css>
  </head>
  <body>
      <?php
      $regexp="/[\s,\.]+/";
      if(empty($_REQUEST['area'])){
        echo "<p>Non hai inserito alcuna parola</p>";
      }else{
        $testo=$_REQUEST['area'];
        $elenco=preg_split($regexp,$testo);
        echo "<p>Numero di parole inserite: ".count($elenco)."</p>";
        echo "<p>Elenco delle parole inserite:</p>";
        foreach ($elenco as $key => $value) {
          echo "<p>-".$value."</p>";
        }
      }
       ?>
  </body>
</html>
