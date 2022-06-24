<?php
$conexao = mysqli_connect("localhost", "root","","mercadodotoninho");
$categoria = $_POST['categoria'];
$marca = $_POST['marca'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$qtd = $_POST['qtd'];

echo "{$categoria} - {$marca} - {$descricao} - {$preco} - {$qtd}";

$sql_inserir = "insert into tabprodutos(categoria, marca,descricao,preco,qtd) values ('{$categoria}' , '{$marca}' , '{$descricao}' , {$preco} , {$qtd})";

mysqli_query($conexao, $sql_inserir);

mysqli_close($conexao);
?>