<?php

header("Access-Control-Allow-Origin: *"); // permite que qualquer site acesse a api
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS'); // permite que qualquer metodo seja usado (get, post, put, delete, etc)

header('Content-Type: application/json'); // diz que o conteudo retornado é um json


echo json_encode($array); // vai retornar o array em json