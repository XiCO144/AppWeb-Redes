<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frutaria</title>
    <link href="./output.css" rel="stylesheet">    
    <link rel="icon" type="image/x-icon" href="../../imagens/fruits.png">
</head>

<body>
    <h1>Editar Produto</h1>

    <?php 
        require './header.php';
        require "./connect.php";
        $nome = $_REQUEST["nome"];
        $preco= $_REQUEST["preco"];
        $quantidade= $_REQUEST["quantidade"];
        $descricao= $_REQUEST["descricao"];
        $sqlu= "update produtos set nome='".$nome."', preco='".$preco."', quantidade='".$quantidade."', descricao='".$descricao."' where cod_estilo=".$produtoID.";";
        if ($conn->query($sqlu) === TRUE) {
        echo  ("<br> Produto alterado com sucesso");
        } else{
        echo ("<br>Erro a alterar Produto");
        }
    ?>
</body>

</html>