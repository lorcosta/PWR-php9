<!DOCTYPE html>
<html lang="it">
  <head>
    <title>PHP 9_1</title>
    <meta charset="utf-8">
    <meta name="author" content="Lorenzo Costa" >
    <link rel=stylesheet href=fogliodistile.css>
  </head>
  <body>
      <?php
        echo("<p>Benvenuto,</p>");
        $URL=$_SERVER['HTTP_REFERER'];
        $metodo_HTTP=$_SERVER['REQUEST_METHOD'];
        echo("<p>hai richiesto la pagina $URL usando il metodo $metodo_HTTP.</p>");
        $nome_browser=$_SERVER['HTTP_USER_AGENT'];
        $IP_client=$_SERVER['REMOTE_ADDR'];
        echo "<p>Stai usando il browser $nome_browser dal nodo con indirizzo IP $IP_client.</p>";
        $nome_server=$_SERVER['SERVER_NAME'];
        $IP_server=$_SERVER['SERVER_ADDR'];
        $porta_server=$_SERVER['SERVER_PORT'];
        echo "<p>Sei collegato al server $nome_server (indirizzo IP $IP_server e porta $porta_server/TCP)</p>";
        foreach ($_SERVER as $key => $value) {
          echo '<p>'.$key.'-->'.$value.'</p>';
        }
        ?>
  </body>
</html>
