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