<?php

    //var_dump($_REQUEST);
    //var_dump($_FILES);
    $arquivo = file_get_contents($_FILES['arquivo']['tmp_name']);
    //file_put_contents( './'.$_FILES['arquivo']['name'], $arquivo );
    $codificado = base64_encode($arquivo);

    $conexao = new pdo ('sqlite:banco');
    $sql = "insert into pessoa values(null, '".$_REQUEST['cpf']."', '".$_REQUEST['nome']."', '".$codificado."');";
    $resultado = $conexao->exec($sql);
    unset($conexao);
    if($resultado){
        print 'Upload com sucesso.';
    }
    else{
        print 'Erro no upload';
    }