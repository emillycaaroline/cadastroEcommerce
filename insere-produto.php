<?php
//puxa arquivo de conexão para ligar com o banco de dados.
include_once('controller/conexao.php');

$categoria  = $_POST['seleciona_categoria'];
$marca  = $_POST['seleciona_marca'];
$nome_produto  = $_POST['nome'];
$descricao  = $_POST['descricao'];
$estoque  = $_POST['estoque'];
$preco  = $_POST['preco'];

//guarda comando de sql
$grava_produto = "INSERT INTO produtos(IDCATEGORIA, IDMARCA, NOME, DESCRICAO, ESTOQUE, PRECO) VALUES ('$categoria','$marca','$nome_produto','$descricao','$estoque','$preco')";
//query executa comando SQL dentro do banco
$result_gravacao = mysqli_query($mysqli, $grava_produto);

// Serve para verificar o impacto de operações que alteram dados em um banco de dados MySQL, ajudando a garantir que suas consultas tenham o efeito esperado e facilitando o tratamento de erros ou condições especiais com base no número de linhas afetadas.
if (mysqli_affected_rows($mysqli) != 0) {
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = 'O;URL=produto.php'>
    <script type=\"text/javascript\">
        alert('produto cadastrado com sucesso!!');
    </script>
    ";
} else {
    echo "
    <META HTTP-EQUIV=REFRESH CONTENT = 'O;URL=produto.php'>
    <script type=\"text/javascript\">
        alert('problema no cadastrado produto!!');
    </script>
    ";
}
