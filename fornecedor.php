<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Fornecedor</title>
</head>
<body>
<h1>Cadastro do Fornecedor</h1>
    <hr>
    <br>
    <form method="post" id="fornecedor" action="cadastrarfornecedor.php">
    <fieldset id="cad">
    <legend>Fornecedor</legend>
    <p> <label for="nome">Nome:</label><input type="text" name="nome" id="nome" size="35" maxlenght="100" placeholder="Digite o nome da sua empresa"></p>
    <p>Endereço</p>
    <p> <textarea name="endereco" id="endereco" placeholder="Endereço do fornecedor" class="textarea"></textarea></p>
    <p> <label for="cnpj">CNPJ: </label><input type="text" name="cnpj" id="cnpj" size="29" maxlenght="100" placeholder="Digite seu cnpj"></p>
</p>
<br>
<hr>
<input type="submit" value="Cadastrar">
</body>
</html>
