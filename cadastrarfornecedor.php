<?php
$conexao = mysqli_connect("localhost", "root","","mercadodotoninho");
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$cnpj = $_POST['cnpj'];

echo "{$nome} - {$endereco} - {$cnpj}";

$sql_inserir = "insert into tabfornecedor(nome, endereco,cnpj) values ('{$nome}' , '{$endereco}' , '{$cnpj}')";

mysqli_query($conexao, $sql_inserir);

mysqli_close($conexao);
?>