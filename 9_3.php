<!DOCTYPE html>
<html lang="it">
  <head>
    <title>PHP 9_3</title>
    <meta charset="utf-8">
    <meta name="author" content="Lorenzo Costa" >
    <link rel=stylesheet href=fogliodistile.css>
  </head>
  <body>
      <?php
      if(empty($_REQUEST['num1'])){
        echo "<p>Non hai inserito il primo numero</p>";
      }else if(empty($_REQUEST['num2'])){
        echo "<p>Non hai inserito il secondo numero</p>";
      }else if(strlen($_REQUEST['num1'])>3){
        echo "<p>Il primo numero possiede pi&ugrave di 3 cifre, devi inserire al massimo 3 cifre</p>";
      }else if(strlen($_REQUEST['num2'])>3){
        echo "<p>Il secondo numero possiede pi&ugrave di 3 cifre, devi inserire al massimo 3 cifre</p>";
      }else if(empty($_REQUEST['operazioni'])){
        echo "<p>Non è stata scelta l'operazione da effettuare</p>";
      }else{
        $num1=$_REQUEST['num1'];
        $num2=$_REQUEST['num2'];
        $operazioni=$_REQUEST['operazioni'];
        #echo "$num1,$num2,$operazione";
        switch ($operazioni) {
          case 'somma':
            echo "<p>".($num1+$num2)."=".$num1."+".$num2;
            break;
          case 'differenza':
            echo "<p>".($num1-$num2)."=".$num1."-".$num2;
            break;
          case 'prodotto':
            echo "<p>".($num1*$num2)."=".$num1."*".$num2;
            break;
          case 'quoziente':
            echo "<p>".($num1/$num2)."=".$num1."/".$num2;
            break;
          default:
            echo "<p>Errore generico</p>";
            break;
        }
      }
       ?>
  </body>
</html>
