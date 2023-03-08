<?php

require '../config.php'; // Load config database

//1° passo : verificar se o metodo está correto.

$method = strtolower($_SERVER['REQUEST_METHOD']); //pega o metodo que foi usado para acessar a api

if($method !== 'get'){ //se o metodo for diferente de get, retorna um erro
    $array['error'] = 'Método não permitido (apenas GET)';

    require '../return.php';
    exit;
}else{
    $sql =  $pdo->query("SELECT * FROM notes"); //se o metodo for get, faz a consulta no banco de dados
    if($sql->rowCount() > 0){ //se a consulta retornar mais de 0 linhas, faz o foreach
        $data = $sql->fetchAll(PDO::FETCH_ASSOC); //pega os dados da consulta e coloca em um array

        foreach($data as $item){ //faz um foreach no array
            extract($item); //extrai os dados do array

            $array['result'][] = [ //coloca os dados do array em outro array
                'id' => $id,
                'title' => $title,
                'body' => $body
            ];
        }
    }
}

    


require '../return.php'; 

exit; 




?>