<?php 
    session_start();

    if (isset($_POST['logout'])) {
        session_destroy();
        header('Location: index.php');
        exit;
    }

    $display_logout_button = isset($_SESSION['user']);
?>

<header class="bg-green-500 text-white h-48">
    <img src="../imagens/frescos.png" alt="Logo" class="w-28 m-auto">
    <nav class="flex justify-center m-4">
        <img src="../imagens/store.svg" alt="icon">
        <a href="index.php" class="px-2 hover:border hover:border-green-600 hover:rounded-md">Início</a>
        •
        <a href="contactos.php" class="px-2 hover:border hover:border-green-600 hover:rounded-md">Contactos</a>
        •
        <a href="produtos.php" class="px-2 hover:border hover:border-green-600 hover:rounded-md">Produtos</a>
        •
        <a href="produtores.php" class="px-2 hover:border hover:border-green-600 hover:rounded-md">Produtores</a>
        •
        <?php
        if ($display_logout_button) {
            echo '
                <form method="post" action="">
                    <button type="submit" name="logout" class="px-2 hover:border hover:border-green-600 hover:rounded-md">
                        Log Out
                    </button>
                </form>
            ';
        } else {
            echo '
                <a href="login.php" class="px-2 hover:border hover:border-green-600 hover:rounded-md">
                    Log In
                </a>
            ';
        }
        if ($display_logout_button) {
            echo '
            •
            Username:';
            echo $_SESSION['user'];
        }
        ?>
        <img src="../imagens/store.svg" alt="icon">
    </nav>
    <div class="flex flex-row absolute z-10 -space-x-2">
        <img src="../imagens/toldo.png" alt="Toldo" class="w-2/4">
        <img src="../imagens/toldo.png" alt="Toldo" class="w-2/4">
    </div>
<header>