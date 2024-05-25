<!DOCTYPE html>
<html lang="en">
<head>
    <title>Frescos Lda. | Criar Utilizador</title>
    <link href="output.css" rel="stylesheet">
    <link href="number.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../imagens/fruits.png">
</head>
<body class="bg-green-300">
    <header class="bg-green-500 text-white h-48">
        <img src="../imagens/frescos.png" alt="Logo" class="w-28 m-auto">
        <nav class="flex justify-center m-4">
            <img src="../imagens/store.svg" alt="icon">
            <a href="index.html" class="px-2 hover:border hover:border-green-600 hover:rounded-md">Início</a>
            •
            <a href="contactos.html" class="px-2 hover:border hover:border-green-600 hover:rounded-md">Contactos</a>
            •
            <a href="produtos/produtos.php" class="px-2 hover:border hover:border-green-600 hover:rounded-md">Produtos</a>
            •
            <a href="produtores/produtores.php" class="px-2 hover:border hover:border-green-600 hover:rounded-md">Produtores</a>
            •
            <a href="login.php" class="px-2 hover:border hover:border-green-600 hover:rounded-md">Log-In</a>
            <img src="../imagens/store.svg" alt="icon">
        </nav>
        <div class="flex flex-row -space-x-2">
            <img src="../imagens/toldo.png" alt="Toldo" class="w-2/4">
            <img src="../imagens/toldo.png" alt="Toldo" class="w-2/4">
        </div>
    </header>
    <div class="flex justify-center mt-24 mb-10">
        <div class="w-80 rounded-2xl bg-white">
            <div class="flex flex-col justify-center text-center gap-y-3">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="text-white p-2 bg-green-500 rounded-md border-white border-2">
                    <label for="user">Insira o seu username:</label>
                    <input placeholder="Novo Username" class="w-48 rounded-lg border border-gray-300 bg-green-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-100" type="text" id="user" name="user" required><br><br>
                    <label for="pass">Insira a sua password:</label>
                    <input placeholder="Nova Password" class="w-48 rounded-lg border border-gray-300 bg-green-300 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-700 focus:ring-offset-2 focus:ring-offset-gray-100" type="password" id="pass" name="pass" required><br><br>
                    <button type="submit" class="mt-4 bg-green-400 hover:bg-green-600 text-white font-bold py-2 px-4 w-48 cursor-pointer rounded-md text-center">Criar Utilizador</button>
                </form>
            </div>
        </div>
    </div>
    <?php
        require "./connect.php";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $user = $conn->real_escape_string($_POST['user']);
        $pass = $conn->real_escape_string($_POST['pass']);

        $sql_check = "SELECT * FROM utilizadores WHERE user = '$user' AND pass = '$pass'";
        $result_check = $conn->query($sql_check);

        if ($result_check->num_rows > 0) {  
            echo "
            <div class='mx-auto max-w-lg rounded-lg border border-stone bg-stone-100 p-4 shadow-lg sm:p-6 lg:p-8'>
                <div class='flex items-center gap-4'>
                    <span class='p-2 text-white'><p class='font-medium sm:text-lg text-emerald-600'>Frescos Lda.</p>
                    <p class='mt-4 text-gray-600'>Utilizador já existe!</p>
                    <div class='mt-6 sm:flex sm:gap-4'>
                    </div>
                </div>
            </div>";
        } else {
            $sql_insert = "INSERT INTO utilizadores (user, pass) VALUES ('$user', '$pass')";

            if ($conn->query($sql_insert) === TRUE) {
                echo "
                <div class='mx-auto max-w-lg rounded-lg border border-stone bg-stone-100 p-4 shadow-lg sm:p-6 lg:p-8'>
                    <div class='flex items-center gap-4'>
                        <span class='p-2 text-white'><p class='font-medium sm:text-lg text-emerald-600'>Frescos Lda.</p>
                        <p class='mt-4 text-gray-600'>Utilizador criado com sucesso!</p>
                        <div class='mt-6 sm:flex sm:gap-4'>
                        <a href='./index.php' class='inline-block w-full rounded-lg bg-emerald-500 px-5 py-3 text-center text-sm font-semibold text-white sm:w-auto'>OK</a>
                        </div>
                    </div>
                </div>";
            } else {
            echo "Erro ao criar utilizador: " . $conn->error;
            }
        }
        $conn->close();
        }
    ?>
    <footer class="bg-green-500 bottom-0 w-full text-center text-white">
        Copyright 2024 - Francisco Zambujo
    </footer>
</body>
</html>