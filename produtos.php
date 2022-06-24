<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
</head>
<body>
<h1>Cadastro de Produtos</h1>
    <hr>
    <br>
    <form method="post" id="cadastro" action="cadastrarprodutos.php">
    <fieldset id="cad">
    <legend>Produtos</legend>
    <p> <label for="categoria">Categoria:</label><input type="text" name="categoria" id="categoria" size="35" maxlenght="100" placeholder="Digite a categoria do produto"></p>
    <p> <label for="marca">Marca:</label><input type="text" name="marca" id="marca" size="29" maxlenght="100" placeholder="Digite a marca do produto"></p>
    <p>Descrição</p>
    <p> <textarea name="descricao" id="descricao" placeholder="Descrição do prodruto" class="textarea"></textarea></p>
    <p> <label for="preco">Preço: </label><input type="number" name="preco" id="preco" size="29" maxlenght="100" placeholder="Digite o preco do produto"></p>
    <p> <label for="qtd">Quantidade: </label><input type="number" name="qtd" id="qtd" size="35" maxlenght="100" placeholder="Digite a quantidade do produto"></p>
</p>
<br>
<hr>
<input type="submit" value="Cadastrar">
</body>
</html>