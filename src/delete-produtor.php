<!DOCTYPE html>
<html lang="en">
<head>
    <title>Frescos Lda.</title>
    <link href="./output.css" rel="stylesheet">
    <link href="./number.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../imagens/fruits.png">
</head>
<body class="bg-green-300">
    <?php 
    require './header.php';
    require './connect.php';
    $produtorID = $_GET['id'];

    $sqld= "DELETE FROM produtores where id = '".$produtorID."';";
            
        if ($conn->query($sqld)===true)
        {
            echo 
            "<div class='mx-auto max-w-lg rounded-lg border border-stone bg-stone-100 p-4 shadow-lg sm:p-6 lg:p-8'>
            <div class='flex items-center gap-4'>
            <span class='p-2 text-white'><p class='font-medium sm:text-lg text-emerald-600'>Frescos Lda.</p>
            <p class='mt-4 text-gray-600'>Produtor eliminado com sucesso!</p>
            <div class='mt-6 sm:flex sm:gap-4'>
            <a href='./produtores.php' class='inline-block w-full rounded-lg bg-emerald-500 px-5 py-3 text-center text-sm font-semibold text-white sm:w-auto'>OK</a>
            </div>
            </div>
            </div>";
        }
        else{
            echo "Erro a inserir Produtor";
        }

    ?>
    <footer class="bg-green-500 bottom-0 w-full text-center text-white">
        Copyright 2024 - Francisco Zambujo
    </footer> 
</body>
</html>
