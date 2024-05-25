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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $produtorID = $_GET['id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $contacto = $_POST['contacto'];
        $email = $_POST['email'];

        header("Location: index.php");
        exit();
    }

    $produtorID = $_GET['id'];
    EditarProduto($produtorID, $conn);

    function EditarProduto($produtorID, $conn) {
        $sqls = "select * from produtores where id={$produtorID};";
        $resultado = $conn->query($sqls);

        if ($resultado->num_rows > 0) {
            while ($registo = $resultado->fetch_assoc()) {
                echo "
                <h1 class='m-10 font-bold text-4xl flex justify-center'>Editar informações do produtor</h1>
                <hr class='border-black w-4/5 m-auto'>
                <div class='flex justify-center mt-10 mb-10'>
                <div class='w-96 rounded-2xl bg-white'>
                            <form method='POST' action='./update-produtor.php' class='text-black grid items-center justify-center grid-rows-2 gap-2'>
                                <label for='nome'>Nome do Produtor</label>
                                <input id='nome' name='nome' value='".$registo["nome"]."' class='input' type='text'>
                                <label for='endereco'>Endereco</label>
                                <input id='endereco' name='endereco' value='".$registo["endereco"]."' class='input' type='text'>
                                <label for='contacto'>Contacto</label>
                                <input id='contacto' name='contacto' value='".$registo["contacto"]."' class='input' type='text'>
                                <label for='email'>Email</label>
                                <input id='email' name='email' value='".$registo["email"]."' class='input' type='text'>
                                <input type='hidden' name='id' value='".$registo["id"]."'</input>
                                <button type='submit' class='btn-submit'>Editar informações</button>
                            </form>
                        </div>
                    </div>";
            }
        } else {
            echo "Produtor não encontrado";
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