<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure.
L'esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Milestone 1
Creare un form che invii in GET la lunghezza della password. 
Una nostra funzione utilizzerà questo dato per generare una password casuale 
(composta da lettere, lettere maiuscole, numeri e simboli) da restituire all'utente.
Scriviamo tutto (logica e layout) in un unico file index.php

Milestone 2
Verificato il corretto funzionamento del nostro codice, 
spostiamo la logica in un file functions.php 
che includeremo poi nella pagina principale -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Strong Password Generator</title>
</head>
<body>
<?php
// Genero una password casuale
function passwordCasuale($lunghezza) {
  $possibiliCaratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
  $password = '';
  for ($i = 0; $i < $lunghezza; $i++) {
    $password .= $possibiliCaratteri[rand(0, strlen($possibiliCaratteri) -1 )] ;
  }
return $password;
}

//Verifico se la lunghezza della pw è specificata
if (isset($_GET['lunghezza'])) {
  $lunghezza = $_GET['lunghezza'];
  $password = passwordCasuale($lunghezza);
  echo "La password di lunghezza $lunghezza è: $password";
}

?>

<form action="" method="GET">
<label for="lunghezza">Lunghezza password:</label>
<input type="number" id="lunghezza" name="lunghezza" required>
<button type="submit">Genera password</button>
</form>

</body>
</html>


