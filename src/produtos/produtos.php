<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frescos Lda.</title>
    <link href="../output.css" rel="stylesheet">    
    <link rel="icon" type="image/x-icon" href="../../imagens/fruits.png">
</head>
<body class="bg-green-300">
    <?php
        require "../connect.php";
        $sqle = "SELECT * FROM produtos;";
        $resultado = $conn->query($sqle);
    ?>
    <header class="bg-green-500 text-white h-48">
        <img src="../../imagens/frescos.png" alt="Logo" class="w-28 m-auto">
        <nav class="flex justify-center m-4">
            <img src="../../imagens/store.svg" alt="icon">
            <a href="../index.html" class="px-2 hover:border hover:border-green-600 hover:rounded-md">Início</a>
            •
            <a href="../contactos.html" class="px-2 hover:border hover:border-green-600 hover:rounded-md">Contactos</a>
            •
            <a href="../produtos/produtos.php" class="px-2 hover:border hover:border-green-600 hover:rounded-md">Produtos</a>
            •
            <a href="../produtores/produtores.php" class="px-2 hover:border hover:border-green-600 hover:rounded-md">Produtores</a>
            <img src="../../imagens/store.svg" alt="icon">
        </nav>
        <div class="flex absolute z-10">
            <img src="../../imagens/toldo.png" alt="Toldo" class="m-auto w-2/4">
            <img src="../../imagens/toldo.png" alt="Toldo" class="m-auto w-2/4">
        </div>
    </header>
    <main>
        <div>
            <h1 class="font-bold text-4xl mt-24">Produtos</h1>
            <div class="flex m-4">
                <div class="bg-green-400 hover:bg-green-600 text-white font-bold py-2 px-4 mr-4 rounded flex w-48">
                    <img src="../../imagens/plus.svg" alt="Plus">
                    <button onclick="">Novo Produto</button>
                </div>
                <div class="bg-green-400 hover:bg-green-600 text-white font-bold py-2 px-4 rounded flex w-48">
                    <img src="../../imagens/refresh-cw.svg" alt="Refresh">
                    <button >Atualizar</button>
                </div>
            </div>
        </div>
        <hr>
        <div>
            <table class="border-black border-collapse border-solid border-2 text-center">
                <thead class="text-white font-bold bg-slate-500">
                    <tr>
                        <td class="p-2 border-solid border-2">Id</td>
                        <td class="p-2 border-solid border-2">Produto</td>
                        <td class="p-2 border-solid border-2">Preço</td>
                        <td class="p-2 border-solid border-2">Quantidade</td>
                        <td class="p-2 border-solid border-2">Descrição</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($resultado->num_rows > 0){
                        while ($registo = $resultado->fetch_assoc())
                            {
                            echo "<tr>";
                            echo "<td>".$registo["id"]."</td> <td>".$registo["nome"]."</td> <td>".$registo["preco"]."</td> <td>".$registo["quantidade"]."</td> <td>".$registo["descricao"]."</td>";
                            echo "</tr>";
                            }
                        }   
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <footer class="bg-green-500 absolute bottom-0 w-full text-center">
            Copyright 2024 - Francisco Zambujo
    </footer>
</body>
</html>