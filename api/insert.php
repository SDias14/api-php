<?php

require '../config.php'; // Load config database

//1° passo : verificar se o metodo está correto.

$method = strtolower($_SERVER['REQUEST_METHOD']); //pega o metodo que foi usado para acessar a api

if($method === 'post'){ 

    $title = filter_input(INPUT_POST, 'title'); //pega o titulo do post
    $body = filter_input(INPUT_POST, 'body'); //pega o corpo do post

    if($title && $body){
        $sql = $pdo->prepare("INSERT INTO notes (title, body) VALUES (:title, :body)");
        $sql->bindValue(':title', $title);
        $sql->bindValue(':body', $body);
        $sql->execute();

        $id = $pdo->lastInsertId();
        $array['result'] = [
            'id' => $id,
            'title' => $title,
            'body' => $body
        ];

    }else{
        $array['error'] = 'Dados não enviados';
    }
   

}else{
    
    $array['error'] = 'Método não permitido (apenas POST)';


    
    }



    require '../return.php'; 






?>