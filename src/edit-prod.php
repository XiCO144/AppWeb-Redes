<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frescos Lda.</title>
    <link href="./output.css" rel="stylesheet">    
    <link rel="icon" type="image/x-icon" href="../imagens/fruits.png">
</head>
<body class="bg-green-300">

<?php 
    require './header.php';
    require './connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $produtoID = $_GET['id'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $descricao = $_POST['descricao'];

        header("Location: index.php");
        exit();
    }

    $produtoID = $_GET['id'];
    EditarProduto($produtoID, $conn);

    function EditarProduto($produtoID, $conn) {
        $sqls = "select * from produtos where id={$produtoID};";
        $resultado = $conn->query($sqls);

        if ($resultado->num_rows > 0) {
            while ($registo = $resultado->fetch_assoc()) {
                echo "
                <h1 class='font-bold text-4xl mt-24'>Editar Produto</h1>
                <hr>
                <div class='flex justify-center mt-10 mb-10'>
                    <div class='w-80 rounded-2xl bg-white'>
                        <div class='flex flex-col justify-center text-center gap-4'>
                            <form method='POST' class='text-black' action='./update-prod.php'>
                                <label for='nome'>Produto</label>
                                <input id='nome' name='nome' value='".$registo["nome"]."' class='input' type='text'>
                                <label for='preco'>Preço/Kg</label>
                                <input id='preco' name='preco' value='".$registo["preco"]."' class='input' type='number'>
                                <label for='quantidade'>Quantidade(Kg)</label>
                                <input id='quantidade' name='quantidade' value='".$registo["quantidade"]."' class='input' type='number'>
                                <label for='descricao'>Descrição</label>
                                <input id='descricao' name='descricao' value='".$registo["descricao"]."' class='input' type='text'>
                                <input type='hidden' name='id' value='".$registo["id"]."'</input>
                                <button type='submit' class='btn-submit'>Editar Produto</button>
                            </form>
                        </div>
                    </div>
                </div>";
            }
        } else {
            echo "Produto não encontrado";
            return;
        }
    }
?>
<main>
</main>
<footer class="bg-green-500 bottom-0 w-full text-center text-white">
    Copyright 2024 - Francisco Zambujo
</footer>

</body>
</html>