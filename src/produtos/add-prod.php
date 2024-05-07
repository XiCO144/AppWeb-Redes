<!DOCTYPE html>
<html lang="en">
<head>
    <title>Frescos Lda. | Adicionar Produto</title>
    <link href="../output.css" rel="stylesheet">
    <link href="../number.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../../imagens/fruits.png">
</head>
<body class="bg-green-300">
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
        <h1 class="m-10 font-bold text-4xl flex justify-center">Novo Produto</h1>
        <hr class="border-black w-4/5 m-auto">
        <div class="flex justify-center mt-10 mb-10">
            <div class="w-80 rounded-2xl bg-white">
                <div class="flex flex-col justify-center text-center gap-y-3 p-2 p-8">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <label for="nome">Nome do Produto</label>
                    <input class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-100" type="text" name="nome" id="nome">
                    <label for="preco">Preço</label>
                    <input class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-100" type="number" name="preco" id="preco">
                    <label for="quantidade">Quantidade</label>
                    <input class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-100" type="number" name="quantidade" id="quantidade">
                    <label for="descricao">Descrição</label>
                    <input class="w-full rounded-lg border border-gray-300 bg-white px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-100" type="text" name="descricao" id="descricao">
                    <button type="submit" class="mt-10 bg-green-400 hover:bg-green-600 text-white font-bold py-2 px-4 flex justify-center w-48 cursor-pointer rounded-md text-center">Adicionar Produto</button>
                </form>
                </div>
            </div>
        </div>
        
    </main> 
    <!-- <footer class="bg-green-500 absolute bottom-0 w-full text-center text-white">
            Copyright 2024 - Francisco Zambujo
    </footer> --> 
<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require "../connect.php";
        
        $nomeProd = $_POST["nome"];
        $precoProd = $_POST["preco"];
        $quantidadeProd = $_POST["quantidade"];
        $descricaoProd = $_POST["descricao"];
        
        $sqli= "INSERT INTO produtos (nome, preco, quantidade, descricao) VALUES (".$nomeProd.",'".$precoProd."','".$quantidadeProd."','".$descricaoProd."');";
        
        if ($conn->query($sqli)===true)
        {
            echo "<div class='mx-auto max-w-lg rounded-lg border border-stone bg-stone-100 p-4 shadow-lg sm:p-6 lg:p-8'>
            <div class='flex items-center gap-4'>
            <span class='p-2 text-white'><p class='font-medium sm:text-lg text-emerald-600'>Frescos Lda.</p>
            <p class='mt-4 text-gray-600'>Produto inserido com sucesso!</p>
            <div class='mt-6 sm:flex sm:gap-4'>
            <a href='../produtos/produtos.php' class='inline-block w-full rounded-lg bg-emerald-500 px-5 py-3 text-center text-sm font-semibold text-white sm:w-auto'>OK</a>
            </div>
            </div>";
        }
        else
            echo "Erro a inserir Produto";
    }
?>
</body>
</html>