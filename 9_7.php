<!DOCTYPE html>
<html lang="it">
  <head>
    <title>PHP 9_7</title>
    <meta charset="utf-8">
    <meta name="author" content="Lorenzo Costa" >
    <link rel=stylesheet href=fogliodistile.css>
  </head>
  <body>
      <?php
      if(empty($_REQUEST['nome'])){
        echo "<p>Non hai inserito il nome</p>";
      }else if(empty($_REQUEST['cognome'])){
        echo "<p>Non hai inserito il cognome</p>";
      }else if(empty($_REQUEST['username'])){
        echo "<p>Non hai inserito l'username</p>";
      }else if(empty($_REQUEST['password'])){
        echo "<p>Non hai inserito la password</p>";
      }else if(empty($_REQUEST['email'])){
        echo "<p>Non hai inserito l'email</p>";
      }else{
        $nome=$_REQUEST['nome'];
        $cognome=$_REQUEST['cognome'];
        $username=$_REQUEST['username'];
        $password=$_REQUEST['password'];
        $email=$_REQUEST['email'];
        $regexpNomeCognome="/^[A-Z]{1}[a-z]{1,}[\s]*$/";#controlla che la prima lettera sia maiuscola e accetta lettere e spazi
        $regexpUsername="/^[\w\.\+\-]{6,20}$/";
        $regexpPassword="/^[a-zA-Z0-9]{8,16}$/";
        $regexpMaiuscolo="/[A-Z]/";
        $regexpMinuscolo="/[a-z]/";
        if(strlen($nome)>30 || !preg_match($regexpNomeCognome,$nome)){
          echo "<p>Il nome inserito non è corretto (non pi&ugrave di 30 caratteri di cui il primo maiuscolo)</p>";
        }else if(strlen($cognome)>30 || !preg_match($regexpNomeCognome,$cognome)){
          echo "<p>Il cognome inserito non è corretto (non pi&ugrave di 30 caratteri di cui il primo maiuscolo)</p>";
        }else if(!preg_match($regexpUsername,$username)){
          echo "<p>L'username inserito non è corretto (minimo 6 massimo 20 caratteri, accettati i simboli '.','+','-')</p>";
        }else if(!preg_match($regexpPassword,$password)){
          echo "<p>La password non rispetta la lunghezza</p>";
        }else if(!preg_match($regexpMinuscolo,$password)){
          echo "<p>La password non ha il carattere minuscolo</p>";
        }else if(!preg_match($regexpMaiuscolo,$password)){
          echo "<p>La password non ha il carattere maiuscolo</p>";
        }else{
          echo "<p>Caro $nome $cognome, abbiamo ricevuto correttamente i tuoi dati.</p>";
          echo "<p>Lo username scelto &egrave $username, la tua password contiene ".strlen($password)." caratteri e soddisfa i requisiti minimi di sicurezza. Ulteriori informazioni saranno inviate all'indirizzo $email</p>";
        }
      }
       ?>
  </body>
</html>
