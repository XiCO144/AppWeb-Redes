<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frescos Lda.</title>
    <link href="./output.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../imagens/fruits.png">
    <link rel="stylesheet" href="carousel.css">
</head>
<body class="bg-green-300">
    <?php 
        require "./header.php";
    ?>
    <div class="carousel z-0 bg-green-300">
        <div class="slide">
            <img src="../imagens/image1.jpg" alt="Slide 1" class="m-auto w-2/4 top-0">
        </div>
        <div class="slide">
            <img src="../imagens/image2.jpg" alt="Slide 2" class="m-auto w-2/4 top-0">
        </div>
        <div class="slide">
            <img src="../imagens/image3.jpg" alt="Slide 3" class="m-auto w-2/4 top-0">
        </div>
    </div>
    <footer class="bg-green-500 absolute bottom-0 w-full text-center text-white">
        Copyright 2024 - Francisco Zambujo
    </footer>
</body>
</html>