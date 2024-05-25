<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frescos Lda.</title>
    <link href="./output.css" rel="stylesheet">    
    <link rel="icon" type="image/x-icon" href="../../imagens/fruits.png">
</head>
<body class="bg-green-300">
    <?php 
        require './header.php';
        echo "   
        <h1 class='font-bold text-4xl mt-24'>Editar Produto</h1>
        <hr>
        ";
        require "./connect.php";
        $produtoID = $_POST["id"];
        $nome = $_POST["nome"];
        $preco= $_POST["preco"];
        $quantidade= $_POST["quantidade"];
        $descricao= $_POST["descricao"];
        $sqlu= "update produtos set nome='".$nome."', preco='".$preco."', quantidade='".$quantidade."', descricao='".$descricao."' where id=".$produtoID.";";
        if ($conn->query($sqlu) === TRUE) {
        echo "
        <div class='mx-auto max-w-lg rounded-lg border border-stone bg-stone-100 p-4 shadow-lg sm:p-6 lg:p-8'>
            <div class='flex items-center gap-4'>
                <span class='p-2 text-white'><p class='font-medium sm:text-lg text-emerald-600'>Frescos Lda.</p>
                <p class='mt-4 text-gray-600'>Produto alterado com sucesso!</p>
                <div class='mt-6 sm:flex sm:gap-4'>
                <a href='./produtos.php' class='inline-block w-full rounded-lg bg-emerald-500 px-5 py-3 text-center text-sm font-semibold text-white sm:w-auto'>OK</a>
            </div>
        </div>
        ";
        } else{
        echo ("<br>Erro a alterar Produto");
        }
    ?>

</body>

</html>