<?php

require '../config.php'; // Load config database

//1° passo : verificar se o metodo está correto.

$method = strtolower($_SERVER['REQUEST_METHOD']); //pega o metodo que foi usado para acessar a api



if($method !== 'get'){ //se o metodo for diferente de get, retorna um erro
    $array['error'] = 'Método não permitido (apenas GET)';

    require '../return.php';
    exit;
}else{

    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); //pega o id da url

    if($id){ //se o id existir, faz a consulta no banco de dados
        $sql =  $pdo->prepare("SELECT * FROM notes WHERE id = :id"); //prepara a consulta
        $sql->bindValue(':id', $id); //substitui o id da consulta pelo id da url
        $sql->execute(); //executa a consulta

        if($sql->rowCount() > 0){ //se a consulta retornar mais de 0 linhas, faz o foreach
            $data = $sql->fetch(PDO::FETCH_ASSOC); //pega os dados da consulta e coloca em um array

            $array['result'] = [ //coloca os dados do array em outro array
                'id' => $data['id'],
                'title' => $data['title'],
                'body' => $data['body']
                ];

        }else{
            $array['error'] = 'ID inexistente';
        }

        
    

    }else{
            $array['error'] = 'ID não enviado';
        }

    }
    
    


require '../return.php'; 

exit; 




?>