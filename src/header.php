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
        <img src="../imagens/store.svg" alt="icon">
        <div class="absolute left-auto right-6 m-2">
            <?php
            if ($display_logout_button) {
                echo "
                    <form method='post'>
                        <button type='submit' name='logout' class='px-2 hover:border hover:border-green-600 hover:rounded-md'>
                            Log Out
                        </button>
                    </form>
                ";
            } else {
                echo "
                    <a href='login.php' class='px-2 hover:border hover:border-green-600 hover:rounded-md'>
                        Log In
                    </a>
                    ";
            }
            if ($display_logout_button) {
                echo "<p class ='absolute'>Username:".$_SESSION['user']."</p>";
            }
            ?>
        </div>
        </nav>
    <div class="flex flex-row z-10 -space-x-12">
        <img src="../imagens/toldo.png" alt="Toldo" class="w-2/4">
        <img src="../imagens/toldo.png" alt="Toldo" class="w-2/4">
    </div>
<header>