<?php

require '../config.php'; // Load config database

$array['result'] = [
    'pong' => true, //chave pong com valor true
    'time' => DateTime::createFromFormat('U.u', microtime(true))->setTimezone(new DateTimeZone('America/Sao_Paulo'))->format("d-m-Y H:i:s")

];

require '../return.php'; // return

exit; // para a execucao do script


////primeiro aprendizado de api : toda api vai retornar um json. Entao tem que criar um array , mesmo que vazio para retornar.


?>