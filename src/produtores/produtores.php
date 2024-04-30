<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frescos Lda.</title>
    <link href="../output.css" rel="stylesheet">    
    <link rel="icon" type="image/x-icon" href="../../imagens/fruits.png">
</head>
<body>
    <?php
        echo '<header class="bg-green-500 text-white h-48">';
        echo '<img src="../../imagens/frescos.png" alt="Logo" class="w-28 m-auto">';
        echo '<nav class="flex justify-center m-4">';
        echo '<img src="../../imagens/store.svg" alt="icon">';
        echo '<a href="../index.html" class="px-2 hover:border hover:border-green-600 hover:rounded-md">Início</a>';
        echo '•';
        echo '<a href="../contactos.html" class="px-2 hover:border hover:border-green-600 hover:rounded-md">Contactos</a>';
        echo '•';
        echo '<a href="../produtos/produtos.php" class="px-2 hover:border hover:border-green-600 hover:rounded-md">Produtos</a>';
        echo '•';
        echo '<a href="../produtores/produtores.php" class="px-2 hover:border hover:border-green-600 hover:rounded-md">Produtores</a>';
        echo '<img src="../../imagens/store.svg" alt="icon">';
        echo '</nav>';
        echo '<div class="flex absolute z-10">';
        echo '<img src="../../imagens/toldo.png" alt="Toldo" class="m-auto w-2/4">';
        echo '<img src="../../imagens/toldo.png" alt="Toldo" class="m-auto w-2/4">';
        echo '</div>';
        echo '</header>';
    ?>
</body>
</html>