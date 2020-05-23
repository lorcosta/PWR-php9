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
        $testo=strtoupper($testo);
        $elenco=preg_split($regexp,$testo);
        $array=[];
        echo "<p>Numero di parole inserite: ".count($elenco)."</p>";
        echo "<p>Elenco delle parole inserite:</p>";
        foreach ($elenco as $key => $value) {
          if(array_key_exists($value,$array)){
            $array[$value]++;
          }else{
            $array[$value]=1;
          }
        }
        foreach ($array as $key => $value) {
          echo "<p>\"".$key."\" - numero di occorrenze: ".$value."</p>";
        }
      }
       ?>
  </body>
</html>
