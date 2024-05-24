<!DOCTYPE html>
<html lang="en">
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
    require './connect.php';
    $produtoID = $_GET['id'];
    echo "<p>".$produtoID."</p>";   

    EditarProduto($produtoID,$conn);

    function EditarProduto($produtoID,$conn){
        $sqls = "select * from produtos where id=".$produtoID.";";
        $resultado = $conn->query($sqls);
        if ($resultado->num_rows>0)
        {   
        while($registo=$resultado->fetch_assoc()){
            echo "
            <h1 class='font-bold text-4xl mt-24'>Editar Produto</h1>
            <hr>
            <div class='flex justify-center mt-10 mb-10'>
            <div class='w-80 rounded-2xl bg-white'>
                <div class='flex flex-col justify-center text-center gap-y-3'>
                    <form method='POST' action='./update-prod.php'>
                        <label for='nome'>Produto</label>
                        <input id='nome' value='".$registo["nome"]."' class='w-full rounded-lg border border-gray-300 bg-white text-black px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-100' type='text'>
                        <label for='preco'>Preço</label>
                        <input id='preco' value='".$registo["preco"]."'class='w-full rounded-lg border border-gray-300 bg-white text-black px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-100' type='number'>
                        <label for='quantidade'>Quantidade</label>
                        <input id='quantidade' value='".$registo["quantidade"]."' class='w-full rounded-lg border border-gray-300 bg-white text-black px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-100' type='number'>
                        <label for='descricao'>Descrição</label>
                        <input id='descricao' value='".$registo["descricao"]."' class='w-full rounded-lg border border-gray-300 bg-white text-black px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-100' type='text'>
                        <button type='submit' class='btn-submit'>Editar Produto</button>
                    </form>
                </div>
            </div>
        </div>";
        }
    }
    else {
        echo "Estilo não encontrado";
        return;
    }
}
?>

<main>
</main>
<footer class="bg-green-500 bottom-0 w-full text-center text-white">
    Copyright 2024 - Francisco Zambujo
</footer>