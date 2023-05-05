<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <p>Cadastro </p>
        <form>
            <p><input type="text" name="cpf" placeholder="Digite seu CPF." /></p>
            <p><input type="text" name="nome" placeholder="Digite seu nome." /></p>
            <p><input type="file" name="arquivo" /></p>
            <p><button type="submit" formmethod="post" formaction="processo.php" formenctype="multipart/form-data">Enviar </button></p>
    </body>